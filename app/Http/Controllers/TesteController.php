<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste()
    {
        //echo "A soma de $p1 + $p2 é: ", ($p1 + $p2);

        //Maneiras de enviar parâmetros para a view
        //return view('site.teste', ['x' => $p1, 'y' => $p2]); //aray associativo
        //return view('site.teste', compact('p1','p2')); //método compact

        $str = 'one two three four';
        // positive limit
        print_r(explode(' ', $str, 4));

        // negative limit (since PHP 5.1)
        //print_r(explode(' ', $str, -1));


        // return view('site.teste')->with('p1', $p1)->with('p2', $p2); //método with
    }
}