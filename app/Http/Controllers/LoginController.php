<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){

        return view('login');
    }

    public function login(Request $request)
    {
        $mail = $request->get('mail');
        $pass = $request->get('pass');

        $usuario = Usuario::where('mail', '=', $mail)->where('pass', '=', md5($pass))->first();

        if($usuario != null){

            Session::put('usuario', $usuario);

            return redirect()->route('redirigir');
        }
        else{
            return view('login');
        }

    }
}
