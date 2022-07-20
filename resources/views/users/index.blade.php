<h1>Lista de usuários</h1>

@foreach($usuarios as $usuario)
<p>ID: {{ $usuario->id }}</p>
<p>Nome: {{ $usuario->name }}</p>
<p>Telefone: {{ $usuario->phone }}</p>
<p>Email: {{ $usuario->email }}</p>
<p>Admin: {{ $usuario->is_admin }}</p>
<p>
  <a href="{{ route('user.show', $usuario->id) }}">Editar</a>
</p>
<hr>
@endforeach