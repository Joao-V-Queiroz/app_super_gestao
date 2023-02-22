<h3>Fornecedor</h3>

<!--A baixo temos comentários em Blade -->
{{-- Fica o comentário que será descartado pelo interpretador do blade --}}
{{-- Adicionar o php no blade --}}

<!-- First Hello Word in Blade/Php -->
{{-- {{' Olá Mundo! '}} --}}

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

{{-- como usar o switch case --}}
@isset($fornecedores)
 
      <h3>Testes feitos com Switch Case e utilizando For</h3>
 
 @for($i=0; isset($fornecedores[$i]); $i++)
      <br>
      Fornecedor: {{ $fornecedores[$i]['nome'] }}
      <br>
      Status: {{ $fornecedores[$i]['status'] }}
      <br>
      CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
      <br> 
      Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
      <br>
@switch($fornecedores[$i]['ddd'])
      @case('11')
         <b>Telefone de São Paulo - SP</b>
         <hr> 
      <!-- Colocar o break, pra que quando o código chegar aqui,
      execute e pare, se não irá percorrer o restante dos casos! -->
      @break   
      @case('64')
         <b>Telefone de Ipameri - Goiás</b>
         <hr> 
      @break
      @case('62')
         <b>Telefone de Goiânia - Goiás</b>
         <hr> 
      @break
      <!-- Seria como o else do if, cairia aqui, caso nenhum
      dos outros casos aparececem -->
      @Default
         <b>Estado não identificado</b>  
         <hr>         
   @endswitch
 @endfor 
@endisset

<br><br>

{{-- Trabalhando com laço de repetição while --}}
@isset($fornecedores)
    <h3>Testes feitos com Switch Case e utilizando While</h3>
{{-- Diferente do for, aqui temos que criar o i separadamente --}}
{{-- poderiamos enviar esta variavel via controller, mas, 
não faz sentido vist que ela será usada somente no laço --}}    
@php $i = 0 @endphp
  @while(isset($fornecedores[$i]))
      <br>
      Fornecedor: {{ $fornecedores[$i]['nome'] }}
      <br>
      Status: {{ $fornecedores[$i]['status'] }}
      <br>
      CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
      <br> 
      Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
      <br>
@switch($fornecedores[$i]['ddd'])
      @case('11')
         <b>Telefone de São Paulo - SP</b>
         <hr> 
      @break   
      @case('64')
         <b>Telefone de Ipameri - Goiás</b>
         <hr> 
      @break
      @case('62')
         <b>Telefone de Goiânia - Goiás</b>
         <hr> 
      @break
      @default
         <b>Estado não identificado</b>  
         <hr>         
     @endswitch
    @php $i++ @endphp
  @endwhile
@endisset

<br><br>

{{-- trabalhando com laço de repetição foreach --}}
@isset($fornecedores)
    <h3>Testes feitos com Switch Case e utilizando ForEach</h3>    
@foreach ($fornecedores as $indice => $fornecedor)
      <br>
      Fornecedor: {{ $fornecedor['nome'] }}
      <br>
      Status: {{ $fornecedor['status'] }}
      <br>
      CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
      <br> 
      Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
      <br>
@switch($fornecedor['ddd'])
      @case('11')
         <b>Telefone de São Paulo - SP</b>
         <hr> 
      @break   
      @case('64')
         <b>Telefone de Ipameri - Goiás</b>
         <hr> 
      @break
      @case('62')
         <b>Telefone de Goiânia - Goiás</b>
         <hr> 
      @break
      @default
         <b>Estado não identificado</b>  
         <hr>         
     @endswitch
   @endforeach  
@endisset

<br><br>

{{-- Trabalhando com forelse --}}
@isset($fornecedores)
    <h3>Testes feitos com Switch Case e utilizando ForElse</h3>    
{{-- O operador forelse, uni o laço de repetição for, com
a condição forelse, entrando no laço somente se o array tiver alguma 
posição preenchida --}}
@forelse($fornecedores as $indice => $fornecedor)
      <br>
      Fornecedor: {{ $fornecedor['nome'] }}
      <br>
      Status: {{ $fornecedor['status'] }}
      <br>
      CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
      <br> 
      Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
      <br>
@switch($fornecedor['ddd'])
      @case('11')
         <b>Telefone de São Paulo - SP</b>
         <hr> 
      @break   
      @case('64')
         <b>Telefone de Ipameri - Goiás</b>
         <hr> 
      @break
      @case('62')
         <b>Telefone de Goiânia - Goiás</b>
         <hr> 
      @break
      @default
         <b>Estado não identificado</b>  
         <hr>         
     @endswitch
  <!-- se não houver nenhum item no array, o mesmo cairá no empty -->
    @empty 
       <h3>Não existem fornecedores cadastrados!!!</h3>
   
   @endforelse  
@endisset



