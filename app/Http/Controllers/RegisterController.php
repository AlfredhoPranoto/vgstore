<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => ['required','ends_with:@gmail.com'],
            'password' => ['required', 'confirmed', 'min:5', 'max:255'],
        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2
         ]);

        event(new Registered($user));

        if($user){
            Session::flash('success','success');
            Session::flash('message','Registered Successful');
        }
        Auth::login($user);

        return redirect('/');
    }
}
