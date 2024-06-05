<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserCapability;
use App\Models\UserSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UsersController extends Controller
{
    /**
     * Create a new user
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     * @throws \Exception
     */
    public function createUser(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required|string|confirmed|min:6|max:20',
            ]);

            if ($validator->fails()) {
                throw new ValidationException($validator);
            }

            // Crear el usuario
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->active = true;
            $user->save();


            // Agrega Rol y Participación en la app
            if ($request->capabilities != null) {
                foreach ($request->capabilities as $capability) {
                    $userCapability = new UserCapability();
                    $userCapability->user_id = $user->id;
                    $userCapability->pdv_id = $capability['pdv_id'];
                    $userCapability->user_type_id = $capability['user_type_id'];
                    $userCapability->save();
                }
            }

            // Crear las configuraciones por defecto del usuario
            $userSettings = new UserSetting();
            $userSettings->user_id = $user->id;
            $userSettings->theme = 'light';
            $userSettings->pdv_id = null;
            $userSettings->showNews = true;
            $userSettings->save();

            // $user->notify(new NewUserNotification($user));

            return response()->json([
                'message' => 'User created successfully',
                'user' => $user
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $e->errors()
            ]);
        }
    }

    /**
     * Get all users
     * @return \Illuminate\Http\JsonResponse
     */

    public function getUsers()
    {
        $users = User::all();

        foreach ($users as $user) {
            $user->capabilities = UserCapability::where('user_id', $user->id)->get();
        }

        return response()->json($users);
    }

    /**
     * Get a user by ID
     * @return \Illuminate\Http\JsonResponse
     */

    public function getUser($id)
    {
        if ($id == null) {
            return response()->json([
                'message' => 'User ID is required'
            ], 400);
        }

        $user = null;
        $user = User::find($id);

        if ($user == null) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        return response()->json($user);
    }

    /**
     * Update a user
     * This function updates only the personal information of the user
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateUser(Request $request, $id)
    {
        if ($id == null) {
            return response()->json([
                'message' => 'User ID is required'
            ], 400);
        }

        $user = null;
        $user = User::find($id);

        if ($user == null) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        $user->name = $request->name ? $request->name : $user->name;
        $user->email = $request->email ? $request->email : $user->email;
        $user->phone = $request->phone ? $request->phone : $user->phone;
        $user->save();

        return response()->json([
            'message' => 'User updated successfully',
            'user' => $user
        ]);
    }

    /**
     * Activate a user account
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function activateUser($id)
    {
        if ($id == null) {
            return response()->json([
                'message' => 'User ID is required'
            ], 400);
        }

        $user = null;
        $user = User::find($id);

        if ($user == null) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        $user->active = true;
        $user->save();

        return response()->json([
            'message' => 'User activated successfully',
            'user' => $user
        ]);
    }

    /**
     * Deactivate a user account
     * This function replaces the Delete option of a user on an CRUD operation
     * Since the User Data should remain in the database for historical purposes
     * 
     * @return \Illuminate\Http\JsonResponse
     *
     */
    public function deactivateUser($id)
    {
        if ($id == null) {
            return response()->json([
                'message' => 'User ID is required'
            ], 400);
        }

        $user = null;
        $user = User::find($id);

        if ($user == null) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        $user->active = false;
        $user->save();

        return response()->json([
            'message' => 'User deactivated successfully',
            'user' => $user
        ]);
    }

    /**
     * Update the user password
     * This function is used for password recovery too
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function updatePassword(Request $request, $id)
    {
        if ($id == null) {
            return response()->json([
                'message' => 'User ID is required'
            ], 400);
        }

        $validator = Validator::make($request->all(), [
            'password' => 'required|string|confirmed|min:6|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ]);
        }

        $user = User::find($id);
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json([
            'message' => 'Password updated successfully',
            'user' => $user
        ]);
    }

    /**
     * Grant permissions to a user
     * This functions assigns permissions to a user on an specific PDV
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function grantPermissions(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'pdv_id' => 'required|integer',
            'user_type_id' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ]);
        }

        $check = UserCapability::where('user_id', $request->user_id)
            ->where('pdv_id', $request->pdv_id)
            ->first();

        if ($check != null) {
            $userCapability = new UserCapability();
            $userCapability->user_id = $request->user_id;
            $userCapability->pdv_id = $request->pdv_id;
            $userCapability->user_type_id = $request->user_type_id;
            $userCapability->save();
        } else {
            return response()->json([
                'message' => 'User already has permissions on this PDV'
            ], 400);
        }
    }

    /**
     * Update permissions to a user
     * This functions updates permissions to a user on an specific PDV
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function updatePermissions(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'pdv_id' => 'required|integer',
            'user_type_id' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ]);
        }

        $check = UserCapability::where('user_id', $request->user_id)
            ->where('pdv_id', $request->pdv_id)
            ->first();

        if ($check != null) {
            $check->user_type_id = $request->user_type_id;
            $check->save();
        } else {
            return response()->json([
                'message' => 'User does not have permissions on this PDV'
            ], 400);
        }
    }

    /**
     * Revoque permissions to a user
     * This functions removes permissions to a user on an specific PDV
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function revoquePermissions(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'pdv_id' => 'required|integer',
            'user_type_id' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ]);
        }

        $check = UserCapability::where('user_id', $request->user_id)
            ->where('pdv_id', $request->pdv_id)
            ->first();

        if ($check != null) {
            $check->delete();
        } else {
            return response()->json([
                'message' => 'User does not have permissions on this PDV'
            ], 400);
        }
    }
}
