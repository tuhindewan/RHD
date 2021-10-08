<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Classes\SendCode;
use App\Models\Applicant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{


    public function login(Request $request)
    {
        $rules = [
            'email' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6'],
        ];

        $messages = [
            'email.required' => 'Username or mobile number is required',
            'password.required' => 'Passowrd is required',
            'password.min' => 'Password must be at least 6 characters',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return response()->json([
                "code"=> 422,
                "status"=> "Unprocessable Entity",
                "error"=> $validator->messages()->first()
                ], 422);
        }else{
            // Check username
            $user = User::where('email', $request->email)->first();

            // Check password
            if(!$user || !Hash::check($request->password, $user->password)){
                return response()->json([
                    "code"=> 401,
                    "status"=>"error",
                    "message" => "These credentials do not match our records."
                ], 401);
            }


            $token = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'user' => $user,
                'token' => $token,
                'code' => 201,
                'status' => 'success',
                'message' => 'Successfully logged in!'
            ], 201);
        }
    }
}
