<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Hash;
use Session;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check() && Auth::user()->hasRole('Customer')) {
            return redirect()->route('user.dashboard');
        }else{
            return view('login');
        }
    }

    public function authentication(Request $request)
    {
        $request->validate([
            'email' =>  'required|email',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            $user = Auth::user(); 
            if ($user->status == 1) { // Check user status
                Auth::logout();
                return redirect('login')->with('error', 'Your account is inactive. Please contact the administrator.');
            }

            if(!$user->hasRole('Customer'))
            {
                Auth::logout();
                return redirect('login')->with('error', 'You are not allowed to access it');
            }

            return redirect()->route('user.dashboard');
        }

        return redirect('login')->with('error', 'Login details are not valid');
    }

    public function register()
    {
        if (Auth::check() && Auth::user()->hasRole('Customer')) {
            return redirect()->route('user.dashboard');
        }else{
            return view('register');
        }
        
    }

    public function dashboard()
    {
        return view('customer.user.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => [
                        'required',
                        'confirmed',
                        'min:6',
                        'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'
                    ],
            'agree_term' => 'required'
        ],[
            'password.regex' => 'The password must contain at least one uppercase letter, one lowercase letter, and one digit.'
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone_no = $request->phone_no;
        $user->save();

        $user->assignRole('Customer');
        return redirect('login')->with('success','Registered Successfully. Now you can login');
    }
}
