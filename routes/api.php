<?php

use App\Http\Controllers\Api\ClientsController;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'auth'
], function () {

    /** Session Authentication Routes */
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

    /** Users Routes */
    Route::post('users/new', [UsersController::class, 'createUser']);
    Route::get('users', [UsersController::class, 'getUsers']);
    Route::get('users/{id}', [UsersController::class, 'getUser']);
    Route::put('users/{id}', [UsersController::class, 'updateUser']);
    Route::put('users/{id}/activate', [UsersController::class, 'activateUser']);
    Route::put('users/{id}/deactivate', [UsersController::class, 'deactivateUser']);
    Route::put('users/{id}/password', [UsersController::class, 'updatePassword']);
    Route::put('users/{id}/grantPermission', [UsersController::class, 'grantPermission']);
    Route::put('users/{id}/revokePermission', [UsersController::class, 'revokePermission']);
    Route::put('users/{id}/updatePermission', [UsersController::class, 'updatePermission']);

    /** Clients Routes */
    Route::post('clients/new', [ClientsController::class, 'createClient']);
    Route::get('clients', [ClientsController::class, 'getClients']);
    Route::get('clients/{id}', [ClientsController::class, 'getSingleClient']);
    Route::put('clients/{id}', [ClientsController::class, 'updateClient']);
    Route::get('clients/search={search}', [ClientsController::class, 'searchClient']);
});
