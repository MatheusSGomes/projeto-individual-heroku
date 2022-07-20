@foreach($products as $p)
  ID Produto: {{ $p->id }} <br>
  Nome: {{ $p->name }} <br>
  Descrição: {{ $p->description }} <br>
  Preço: {{ $p->price }} <br>
  Imagem: {{ $p->image }} <br>
  ID Usuário: {{ $p->user_id }} <br>
  ID Categoria: {{ $p->category_id }} <br><hr>
@endforeach