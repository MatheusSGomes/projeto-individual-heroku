@foreach($products as $p)
  ID Produto: {{ $p->id }} <br>
  Nome: {{ $p->name }} <br>
  Descrição: {{ $p->description }} <br>
  Preço: {{ $p->price }} <br>
  Imagem:  <img src="{{ "storage/". $p->image }}" width="200px"> <br>
  ID Usuário: {{ $p->user_id }} <br>
  ID Categoria: {{ $p->category_id }} <br>
  Vendedor: {{ $p->user->name }} <br>
  <a href="{{ route('products.show', $p->id) }}">Visualizar</a>
  <form method="POST" action="{{ route('products.destroy', $p->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Apagar</button>
  </form>
  <hr>
@endforeach