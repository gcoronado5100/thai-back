<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ClientsController extends Controller
{
    /**
     * Create a new client
     * 
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createClient(Request $request)
    {
        $pdv_id = $request->pdv;

        // Check if a PDV is provided
        if (!$pdv_id) {
            return response()->json([
                "message" => "A PDV is required"
            ], 400);
        }

        // Validate the request
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|string'
        ]);

        // Return an error if the request is invalid
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Check if the client already exists
        $client = null;
        $client = Clients::where('phone', $request->phone)->where('pdv', $pdv_id)->first();

        if ($client) {
            return response()->json([
                "message" => "Client already exists",
                "client" => $client
            ], 400);
        }

        $user = auth()->user();

        if (!$user) {
            return response()->json([
                "message" => "You need to login to create a client"
            ], 400);
        }

        // Create a new client
        $client = new Clients();
        $client->first_name = $request->first_name;
        $client->last_name = $request->last_name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->address_street = $request->address_street;
        $client->address_ext = $request->address_ext;
        $client->address_int = $request->address_int;
        $client->address_col = $request->address_col;
        $client->address_county = $request->address_county;
        $client->address_city = $request->address_city;
        $client->address_state = $request->address_state;
        $client->address_zip = $request->address_zip;
        $client->registered_by = $user->id;
        $client->pdv = $pdv_id;

        if ($client->save()) {
            return response()->json([
                "message" => "Client created successfully",
                "client" => $client
            ], 201);
        } else {
            return response()->json([
                "message" => "Failed to create client"
            ], 500);
        }
    }

    /**
     * Get all clients for an specific PDV
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function getClients(Request $request)
    {
        $pdv = $request->pdv;

        if (!$pdv) {
            return response()->json([
                "message" => "A PDV is required"
            ], 400);
        }

        $clients = Clients::where('pdv', $pdv)->get();

        return response()->json($clients, 200);
    }

    /**
     * Get a single client for an specific PDV with a given ID
     * 
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSingleClient(Request $request, $id)
    {
        $pdv = $request->pdv;

        if (!$pdv) {
            return response()->json([
                "message" => "A PDV is required"
            ], 400);
        }

        $client = Clients::where('id', $id)->where('pdv', $pdv)->first();

        if (!$client) {
            return response()->json([
                "message" => "Client not found"
            ], 404);
        }

        return response()->json($client, 200);
    }

    /**
     * Update a client information by ID
     * 
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateClient(Request $request, $id)
    {
        // validate the request
        if (!$id) {
            return response()->json([
                "message" => "A client ID is required"
            ], 400);
        }

        $pdv = $request->pdv;

        if (!$pdv) {
            return response()->json([
                "message" => "A PDV is required"
            ], 400);
        }

        // find the client
        $client = Clients::where('id', $id)->where('pdv', $pdv)->first();

        if (!$client) {
            return response()->json([
                "message" => "Client not found"
            ], 404);
        }

        // update the clients information
        $client->first_name = $request->first_name ? $request->first_name : $client->first_name;
        $client->last_name = $request->last_name ? $request->last_name : $client->last_name;
        $client->email = $request->email ? $request->email : $client->email;
        $client->phone = $request->phone ? $request->phone : $client->phone;
        $client->address_street = $request->address_street ? $request->address_street : $client->address_street;
        $client->address_ext = $request->address_ext ? $request->address_ext : $client->address_ext;
        $client->address_int = $request->address_int ? $request->address_int : $client->address_int;
        $client->address_col = $request->address_col ? $request->address_col : $client->address_col;
        $client->address_county = $request->address_county ? $request->address_county : $client->address_county;
        $client->address_city = $request->address_city ? $request->address_city : $client->address_city;
        $client->address_state = $request->address_state ? $request->address_state : $client->address_state;
        $client->address_zip = $request->address_zip ? $request->address_zip : $client->address_zip;
        $client->updated_by = $request->updated_by ? $request->updated_by : $client->updated_by;

        if ($client->save()) {
            return response()->json([
                "message" => "Client updated successfully",
                "client" => $client
            ], 200);
        } else {
            return response()->json([
                "message" => "Failed to update client"
            ], 500);
        }
    }

    /**
     * Search for a client
     * 
     * @param string $search
     * @return \Illuminate\Http\JsonResponse
     */
    public function searchClient(Request $request, $search)
    {
        // validate the request
        $pdv = $request->pdv;

        if (!$pdv) {
            return response()->json([
                "message" => "A PDV is required"
            ], 400);
        }

        if ($search == "") {
            return response()->json([
                "message" => "A search term is required"
            ], 400);
        }

        // search for the client
        $clients = Clients::where('first_name', 'like', '%' . $search . '%')
            ->orWhere('last_name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->orWhere('phone', 'like', '%' . $search . '%')
            ->get();

        return response()->json($clients, 200);
    }
}
