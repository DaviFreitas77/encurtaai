<?php

namespace App\Http\Controllers\client;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController
{

    public function create()
    {
        return view('home');
    }

    public function store(RegisterRequest $request)
    {

        $data = $request->validated();

        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();

        Auth::login($user);
        $request->session()->regenerate();

        return response()->json([
            'message' => 'Registro realizado com sucesso!',
            'redirect_url' => route('home')
        ]);
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => "credenciais inválidas"], 401);
        }

        if (Auth::check() && Auth::user()->role == 'admin') {
            return response()->json([
                'message' => 'Login realizado com sucesso!',
                'redirect_url' => route('admin.dashboard')
            ]);
        }

        $request->session()->regenerate();

        return response()->json([
            'message' => 'Login realizado com sucesso!',
            'redirect_url' => route('home')
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Você saiu com sucesso.');
    }
}
