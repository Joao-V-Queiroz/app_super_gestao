<h3>Fornecedor</h3>

<!--A baixo temos comentários em Blade -->
{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

{{-- Adicionar o php no blade --}}

{{' Olá Mundo! '}}

<?php

  //Comentários de uma linha
  /*
     Comentários de múltiplas linhas 
  */
// {{-- if(){
// }else if(){

// }else {

// } --}};

?>
{{-- dd inspenciona uma váriavel e nos mostra um print do que ela contém em tela--}}
{{-- @dd($fornecedores) --}}

@if(count($fornecedores) > 0 && count($fornecedores) < 10 )
<h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
<h3>Existem vários fornecedores cadastrados</h3>
@else 
<h3>Ainda não existem fornecedores cadastrados</h3>
@endif