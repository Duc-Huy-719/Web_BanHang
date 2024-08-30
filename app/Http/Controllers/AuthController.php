<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        if ($request->has('HONV')) {
            $request->validate([
                'USERID' => 'required|unique:USERS',
                'MATKHAU' => 'required',
                'HONV' => 'required',
                'TENNV' => 'required',
                'EMAIL' => 'required',
            ]);
            User::create([
                'USERID' => $request->USERID,
                'MATKHAU' => Hash::make($request->MATKHAU),
                'HONV' => $request->HONV,
                'TENNV' => $request->TENNV,
                'EMAIL' => $request->EMAIL,
                'USERROLESID' => '1', // default role
            ]);
            return redirect('/layouts/login')->with('registerSuccess', 'Đăng ký thành công!');
        } else {
            // Login logic
            $credentials = $request->only('USERID', 'MATKHAU');

            if (Auth::attempt($credentials)) {
                return redirect('/layouts');
            }

            return back()->withErrors(['loginError' => 'Tài khoản hoặc mật khẩu không đúng!']);
        }
    }
}