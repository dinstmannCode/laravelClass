<h3>Essa é a view Index da pasta Contato</h3>


<!-- usar foreach pra acessar os dados, primeiro parametro nome da lista de dados
      segundo parametro nova variavel que vai se usada para acessar os dados -->
@foreach ($contatos as $contato)

<p>{{ $contato->nome }}</p>
<p>{{ $contato->tel }}</p>

@endforeach