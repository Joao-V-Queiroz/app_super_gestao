<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;

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
Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos']);

Route::get('/contato', [ContatoController::class, 'contato']);



//rota criada de forma direta, sem passar por uma controller
// Route::get('/contato', function () {
//     return 'contato';
// });
