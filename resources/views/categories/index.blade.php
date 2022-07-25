@extends('layouts.app')
@section('content')
@auth
  @if(Auth::user()->is_admin == 1)
    <div class="d-flex justify-content-center mt-4 ">

        <div class="w-50">
            <div class="card">
                <div class="card-header text-center">Todos usuários cadastrados</div>

                <div class="card-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th class="text-center" scope="col">#</th>
                        <th class="text-center" scope="col">Nome</th>
                        <th class="text-center" scope="col">Imagem</th>
                        <th class="text-center" scope="col">...</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($categories as $c)
                      <tr>
                        <td class="text-center" scope="row">{{ $c->id }}</td>
                        <td class="text-center">{{ $c->name }}</td>
                        <td class="text-center">
                          @if($c->image)
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#198754" class="bi bi-card-image" viewBox="0 0 16 16">
                              <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                              <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
                            </svg>
                          @endif
                        </td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-primary" href="{{ route('categories.edit', $c->id) }}">Editar</a>
                          <a href="#">
                              <form method="POST" action="{{ route('categories.destroy', $c->id) }}" style="display:inline;">
                                  @csrf
                                  @method("DELETE")
                                  <input class="btn btn-sm btn-danger" type="submit" value="Apagar">
                              </form>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>                 
                </div>

                <div class="card-footer">
                    <div class="d-flex justify-content-start">
                        <div class="p-1"><a class="btn btn-sm btn-outline-dark" href="{{ route('categories.create') }}">Cadastrar categoria</a></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
  @endif
@endauth

@endsection