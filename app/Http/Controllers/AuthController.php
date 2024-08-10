<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    /**
     * Register a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {

        $validatedData = $request->validate([
            'email' => 'required|email:rfc|unique:users,email',
            'password' => 'required|min:6',
        ]);
        // dd('hereeee', $request);

        $user = User::create([
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json([
            'user' => $user->only(['id', 'email']),
            'token' => $token,
        ], 201);
    }

    /**
     * Log in a user and return user data with JWT token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = Auth::attempt($credentials)) {
            return response()->json(['error' => 'Invalid email or password!'], 401);
        }

        $user = Auth::user();

        return response()->json([
            'user' => $user->only(['id', 'email']),
            'token' => $token,
        ]);
    }
}
