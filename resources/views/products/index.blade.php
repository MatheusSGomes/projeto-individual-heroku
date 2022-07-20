@foreach($products as $p)
  ID Produto: {{ $p->id }} <br>
  Nome: {{ $p->name }} <br>
  Descrição: {{ $p->description }} <br>
  Preço: {{ $p->price }} <br>
  Imagem:  <img src="{{ "storage/". $p->image }}" width="200px"> <br>
  ID Usuário: {{ $p->user_id }} <br>
  ID Categoria: {{ $p->category_id }} <br>
  <a href="{{ route('products.show', $p->id) }}">Visualizar</a>
  <hr>
@endforeach