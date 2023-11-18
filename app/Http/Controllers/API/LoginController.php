<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(request $request)
    {

        if (!$request->email) {
            return response()->json([
                "error" => true,
                "message" => "email not found",
                "key" => "email",
            ]);
        }
        if (!$request->password) {
            return response()->json([
                "error" => true,
                "message" => "password not found",
                "key" => "password",
            ]);
        }


        $user = User::where('email', $request->email)->first();
        if ($user) {
            $data = array(
                'email' => $request->email,
                'password' => $request->password
            );
            if (Auth::attempt($data)) {
                return response()->json([
                    'error' => false,
                    'message' => 'you are logged in successfully',
                    'data' => $user
                ]);
            } else {
                return response()->json([
                    'error' => true,
                    'message' => 'Invalid Password'

                ]);
            }
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Invalid Email'

            ]);
        }
    }
}
