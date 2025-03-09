<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return response()->json(['message' => 'Đăng nhập thành công']);
        }

        return response()->json(['message' => 'Thông tin đăng nhập không đúng'], 401);
    }

    // public function getUser(Request $request)
    // {
    //     if (Auth::check()) {
    //         $user = Auth::user();
            
    //         return response()->json([
    //             'name' => $user->name,
    //             'email' => $user->email,
    //         ]);
    //     }

    //     return response()->json(['message' => 'Unauthorized'], 401);
    // }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json(['message' => 'Đã đăng xuất']);
    }
}
