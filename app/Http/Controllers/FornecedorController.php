<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
       $fornecedores = [    
       0 =>  [
         'nome' => 'Fornecedor 1', 
         'status' => 'N', 
         'cnpj' => '00.000.000/000-00'
       ],

       1 =>  [
         'nome' => 'Fornecedor 2', 
         'status' => 'S', 
         'cnpj' => null
       ],
    ];

    /* operador ternário (atalho para o if e else), recurso do php, independente de laravel ou blade, podemos usar de qualquer lugar
    condicao ? se verdade : se falso;
    é possível realizar encadiamentos condicao ? se verdade : (condicao ? se verdade : se falso); 
    */
   $msg = isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
   echo $msg;

   return view('app.fornecedor.index', compact('fornecedores'));
      // return view('app.fornecedor.index');
    }
}
