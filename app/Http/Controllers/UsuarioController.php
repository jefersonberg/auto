<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function login(){
        var_dump($_POST);
        return view('site.login');
    }
}
