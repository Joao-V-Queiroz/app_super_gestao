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
  
  /* 
     if(!<condicao>) {} //enquanto executa se o retorno for true  
  */
 


?>

{{-- @unless executa se o retorno for false --}}
@isset($fornecedores)
{{-- Imprimindo valores existentes dentro do array --}}
Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
Cnpj: {{ $fornecedores[0]['cnpj'] }}
{{-- Verificando se a variável está ou não vazia! --}}
@empty($fornecedores[0]['cnpj'])
- Vazio
@endempty
{{-- Se a vaiavel ou posição do array possuir um valor --}}
@empty(!($fornecedores[0]['cnpj']))
- Não Vazio
@endempty
<br>
{{-- testes sendo feitos na segunda posição do array --}}
@isset($fornecedores[1]['cnpj']) {{-- testando se esta informação é informada ou não --}}
Cnpj: {{ $fornecedores[1]['cnpj'] }}
@endisset
@if(! ($fornecedores[0]['status'] == 'S') )
 Fornecedor Inativo
@endif
<br> 
@unless($fornecedores[0]['status'] == 'S') <!-- se o retorno da condição for false -->
 Fornecedor Inativo
@endunless
<br><br>
{{-- Aula 50, Operador condicional de valor Default --}}
Condicional de valor Default: <br>
CNPJ: {{$fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido'}}
<!-- 
$variavel testada não estiver definida (isset)
ou 
$variavel testada possui o valor null 
-->

@endisset
<br>


<!-- if(isset($variavel)) {} //retorna true se a variavel estiver definida, não se importando com seu valor -->

<!-- if(empty($variavel)) {} //retorna true se a variavel estiver vazia
 Quando ela é vazia para o php? Nas seguintes situações:
 - 0
 - 0.0
 - '0'
 - null
 - false
 - array()
 - $var
 -->
 
{{-- dd inspenciona uma váriavel e nos mostra um print do que ela contém em tela--}}
{{-- @dd($fornecedores); --}}
{{-- @dd($fornecedores) --}}
{{-- Como usar o if e else --}}
@isset($fornecedores)
@if(count($fornecedores) > 0 && count($fornecedores) < 10 )
<h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
<h3>Existem vários fornecedores cadastrados</h3>
@else 
<h3>Ainda não existem fornecedores cadastrados</h3>
@endif
@endisset