<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function dashboard() 
    {
        if (Auth::check() === true) {
            return view('admin.dashboard');
        }

        return redirect()->route('admin.login');
        
    }

    public function showLoginForm()
    {
        return view('admin.formLogin');
    }

    public function login(Request $request)
    {
        /*
        Este comando não trouxe o retorno esperado, no entanto a opção de login/autenticação
        parece ser a melhor opççao
        OBS: sempre é bom manter as boas práticas de desenvolvimento manual para não se perder as 
        prátias de desenvolvimento e acabar caindo no comodismo.
        */
        $credentials = [
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];  
        var_dump($credentials);
        Auth::attempt($credentials);
    }
}
