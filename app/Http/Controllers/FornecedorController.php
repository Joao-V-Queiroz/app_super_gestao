<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
  public function index()
  {
    $fornecedores = [
      0 => [
        'nome' => 'Fornecedor 1',
        'status' => 'N',
        'cnpj' => '00.000.000/000-00',
        'ddd' => '64',
        //Ipameri (GO)
        'telefone' => '99337-7352'
      ],
      1 => [
        'nome' => 'Fornecedor 2',
        'status' => 'S',
        'cnpj' => null,
        'ddd' => '62',
        //Goiânia (GO)
        'telefone' => '99370-7070'
      ],
      2 => [
        'nome' => 'Fornecedor 3',
        'status' => 'S',
        'cnpj' => null,
        'ddd' => '11',
        //São Paulo (SP)
        'telefone' => '98470-7070'
      ],
    ];

    /* operador ternário (atalho para o if e else), recurso do php, independente de laravel ou blade, podemos usar de qualquer lugar
    condicao ? se verdade : se falso;
    é possível realizar encadiamentos condicao ? se verdade : (condicao ? se verdade : se falso); 
    */

    //  $msg = isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
    //  echo $msg;

    return view('app.fornecedor.index', compact('fornecedores'));
    // return view('app.fornecedor.index');
  }
}