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
        //Validamos los campos
        $this->validateLogin($request);

        //  Validamos si el usuario existe
        //  de ser asi creamos la respuesta
        //  con el token dentro de ella
        if(Auth::attempt($request->only('email','password'))){
            return response()->json([
                'token' => $request->user()->createToken($request->user()->name)->plainTextToken,
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
