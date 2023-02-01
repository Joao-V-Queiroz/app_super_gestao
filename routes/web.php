<?php

use Illuminate\Support\Facades\Route;

/* 
Métodos http
get
put
post
patch
delete
options
*/

Route::get('/', function () {
    return 'Olá, Seja Bem Vindo ao sistema!';
});

Route::get('/sobre-nos', function () {
    return 'Sobre-nós';
});

Route::get('/contato', function () {
    return 'contato';
});
