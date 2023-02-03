<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;

Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos']);

Route::get('/contato', [ContatoController::class, 'contato']);

Route::get('/contato/{nome}/{categoria_id}', //
function(
  string $nome = 'Desconhecido',
  int $categoria_id = 1 // 1 - 'informação'
) 
  {
   echo "Estamos aqui: $nome - $categoria_id" ;      
  }
)->where('categoria_id', '[0-9]+')->where('nome','[A-Za-z]+');

/* 
Métodos http
get
put
post
patch
delete
options
*/

//no curso, ensina a fazer de uma maneira diferente, porém, que não funciona

//contato, terá os seguintes parâmetros:nome, categoria,assunto,mensagem
//Para um parâmetro ser opcional, basta colocar ? na frente dele
//feito isso, inicie o valor do parâmetro. para ele não vir vazio
//------------------------------------------------------------------
// Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}', function(
//    string $nome = "Desconhecido", 
//    string $categoria = "Categoria não informada!", 
//    string $assunto = "Assunto não informado!", 
//    string $mensagem = "Mensagem não informada!"){
//      echo "Colaborador $nome - $categoria <br>
//      Assunto: $assunto <br>
//      Mensagem: $mensagem ";
//   }
// );
//rota criada de forma direta, sem passar por uma controller
// Route::get('/contato', function () {
//     return 'contato';
// });
