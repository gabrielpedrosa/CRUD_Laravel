<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request) 
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return "Usuário Cadastrado";
    }

    public function login(Request $request) {
        $user = User::query()->where('email', '=', $request->email)->get()->first();
        if($user){
            if($user->password == $request->password){
                return redirect('/home');
            }else {
                return "Usuário e/ou senha inválidos.";
            }
        }else{
            return "Usuário não encontrado!";
        }
    }
}
