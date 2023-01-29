<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{

    public function login(Request $request)
    {
        $this->validateLogin($request);

        //  login true
        if(Auth::attempt($request->only('email','password'))){
            return response()->json([
                'token' => $request->user()->createToken("auth_token")->plainTextToken,
                'message' => 'Success'
            ]);
        }

        //  login false
        return response()->json([
            'messege' => 'No esta autorizado'
        ],401);
    }

    public function validateLogin(Request $request)
    {
        return $request->validate([
            'email'     => 'required|email',
            'password'  => 'required',
            'name'      => 'name',
        ]);
    }
}
