<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //método ou action, será chamado pela rota
    public function principal(){
        echo 'Olá, Seja bem vindo ao curso!';
    }
}
