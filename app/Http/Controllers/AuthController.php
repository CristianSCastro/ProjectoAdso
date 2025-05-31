<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Register a new user
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('Personal Access Token')->plainTextToken;

        return response()->json(['token' => $token], 201);
    }

    // Login a user
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $user = Auth::user();
        $token = $user->createToken('Personal Access Token')->plainTextToken;

        return response()->json(['token' => $token], 200);
    }

    // Logout the current user (revoke token)
    public function logout(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete(); // Revoke all tokens

        return response()->json(['message' => 'Logged out successfully'], 200);
    }
}

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Register route
Route::post('/register', [AuthController::class, 'register']);

// Login route
Route::post('/login', [AuthController::class, 'login']);

// Logout route (requires authentication)
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);