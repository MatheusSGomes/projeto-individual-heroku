<h1>Lista de usuários</h1>

@foreach($usuarios as $usuario)
<p>ID: {{ $usuario->id }}</p>
<p>Nome: {{ $usuario->name }}</p>
<p>Telefone: {{ $usuario->phone }}</p>
<p>Email: {{ $usuario->email }}</p>
<p>Admin: {{ $usuario->is_admin }}</p>
<ul>
  @foreach($usuario->products as $product)
    <li>{{$product->name}}</li>
  @endforeach
</ul>
<p>
  <a href="{{ route('users.show', $usuario->id) }}">Visualizar</a>
</p>
<p>
  <form method="POST" action="{{ route('users.destroy', $usuario->id)}}">
    @csrf
    @method('DELETE')
    <button type="submit">Apagar</button>
  </form>
</p>
<hr>
@endforeach