<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AdminLoginController extends Controller
{
    public function register(request $request) {

        $request->validate([
            "name" => 'required',
            "email" => 'required|email',
            "password" => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        toastr()->success('New Admin Created Successfully');
        return back();

    }

    function AdminLogin(Request $request)
    {
        $request->validate([
            "email" => 'required|email',
            "password" => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            $data = array(
                'email' => $request->email,
                'password' => $request->password
            );
            if (Auth::attempt($data)) {
                toastr()->success('welcome! you are login');
                return redirect('index');
            } else {
                toastr()->error('Invalid Password');
                return redirect()->back();
            }
        } else {
            toastr()->error('Invalid Email');
            return redirect()->back();
        }
    }

    public function admin_logout()
    {
        Auth::logout();
        toastr()->success('Logout successfully!');
        return redirect(url('/'));
    }

}
