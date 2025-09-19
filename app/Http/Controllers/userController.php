<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */


    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => ['required'],
        'email' => ['required', 'unique:tb_user,email'],
        'password' => ['required', 'min:8']
    ], [
        'name.required' => 'O campo nome é obrigatório.',
        'email.required' => 'O campo e-mail é obrigatório.',
        'email.unique' => 'Este e-mail já está em uso.',
        'password.required' => 'O campo senha é obrigatório.',
        'password.min' => 'A senha deve ter no mínimo 8 caracteres.'
    ]);

    if ($validator->fails()) {
        if ($request->ajax()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $data = $validator->validated();

    $user = new User;
    $user->name = $data['name'];
    $user->email = $data['email'];
    $user->password = Hash::make($data['password']);
    $user->save();

    Auth::login($user);
    $request->session()->regenerate();

    return response()->json([
        'success' => true,
        'redirect' => route('home'),
        'message' => 'Usuário criado com sucesso!'
    ],201);
}

    // public function Login(Request $request)
    // {
    //         $credentials = $request->only('email', 'password');

    //     if (!Auth::attempt($credentials)) {
    //        return response()->json(['message' => "credenciais inválidas"], 401);
    //     }

    //     $request->session()->regenerate();
    //     return redirect()->intended('/home');


    // }

    public function logout(Request $request, User $id)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Você saiu com sucesso. voce venceuu!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
