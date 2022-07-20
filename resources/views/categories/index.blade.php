@foreach($categories as $c)
  {{ $c->name }} <br>
  <a href="{{ route('categories.show', $c->id) }}">Editar</a> <br>

  <form method="POST" action="{{ route('categories.destroy', $c->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Apagar</button>
  </form>
  <hr>
@endforeach