<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function Show_login(){
        return view('Auth.login');
    }

    public function Show_register(){
        return view('Auth.register');
    }

    public function signup(Request $request){
        $validateuser = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);

        if($validateuser->fails()){
            return response()->json([
                'status' => 400,
                'message' => 'validation error',
                'errors' => $validateuser->messages()
            ], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'user created successfully',
            'user' => $user
        ], 201);

    }

    public function login(Request $request){
        $validateuser = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if($validateuser->fails()){
            return response()->json([
                'status' => 400,
                'message' => 'validation error',
                'errors' => $validateuser->messages()
            ]);
        }

        if(Auth::attempt($request->only('email','password'))){
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;

             return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $token,
                'token_type' => 'Bearer',
                ], 200);
            }else{
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password does not match with our record.',
                ], 401);
            }
    }
    
    public function logout(Request $request){
        $user = $request->user();
        $user->tokens()->delete();

        return response()->json([
            'status' => true,
            'message' => 'User Logged Out Successfully',
            'user' => $user
        ], 200);
    }
}
