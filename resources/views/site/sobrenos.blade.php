<h3>Sobre Nós (View)</h3>

<!-- Aula 37, nos mostra como utilizar nomenclatura em rotas, para chamá-las
nosso href, deve receber o método route, seguido do nome dado para a rota entre aspas simples.
 -->
<ul>
    <li>
        <a href="{{route('site.index')}}">Home</a>
    </li>
    <li>
        <a href="{{route('site.sobrenos')}}">Sobre Nós</a>
    </li>
    <li>
        <a href="{{route('site.contato')}}">Contato</a>
    </li>
</ul>