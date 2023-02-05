<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\ProdutosController;

//nomeando rotas, aula 37, use o método ->name(), após a rota
Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login',   [LoginController::class, 'login'])->name('site.login');

//agrupamento de rotas, aula 36, agrupando rotas dentro do prefixo /app
Route::prefix('/app')->group(function(){
  Route::get('/clientes', [ClientesController::class, 'clientes'])->name('app.clientes');
  Route::get('/fornecedores', [FornecedoresController::class, 'fornecedores'])->name('app.fornecedores');
  Route::get('/produtos', [ProdutosController::class, 'produtos'])->name('app.produtos');
});

//rota que irá ser chamada, quando o usuário tentar acessar uma rota inexistente
//usar função fallback
Route::fallback(function(){
 echo 'A rota acessada não existe.
  <a href="'.route('site.index').'">Clique aqui</a> para ir a página inicial
 ';
});

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

//categoria_id, terá que ser números inteiros
//nome só poderá receber caracteres, maiúsculos ou minúsculos
// Route::get('/contato/{nome}/{categoria_id}', //
// function(
//   string $nome = 'Desconhecido',
//   int $categoria_id = 1 // 1 - 'informação'
// ) 
//   {
//    echo "Estamos aqui: $nome - $categoria_id" ;      
//   }
// )->where('categoria_id', '[0-9]+')->where('nome','[A-Za-z]+');

//as duas formas de se redirecionar uma rota
// //usando redirect pelo objetivo route ou dentro da função de callback
// Route::get('/rota1', function(){
//    echo 'Rota 1';
// })->name('site.rota1');
// Route::get('/rota2', function(){
//   return redirect()->route('site.rota1');
// })->name('site.rota2');
//aula 38, trabalhando com redirecionamento de rotas
// Route::redirect('/rota2', '/rota1');