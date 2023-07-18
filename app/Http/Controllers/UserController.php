<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function loginUser()
    {
        if (auth()->check()) {
            return redirect()->route('home');
        }
        // dd(bcrypt('minhphuoc'));
        return view('auth.login');
    }
    public function postLoginUser(Request $request)
    {
        $remember = $request->has('remember_me') ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect()->to('/');
        }
    }
    public function userInfo()
    {
        $user = Auth::user();
        if (Auth::check()) {
            return view('auth.user_info', compact('user'));
        } else {
            return redirect()->route('login');
        }
    }
    public function register()
    {
        return view('auth.register');
    }
    public function postRegisterUser(RegisterRequest $request)
    {
        $new_user = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => $request->password
        ];
        User::create($new_user);
        return view('auth.login');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('home');
    }

}