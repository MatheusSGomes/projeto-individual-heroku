@extends('layouts.app')
@section('content')

@auth
  @if(Auth::user()->is_admin == 1)
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Todos os produtos cadastrados</div>

                <div class="card-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th class="text-center" scope="col">#</th>
                        <th class="text-center" scope="col">Nome</th>
                        <th class="text-center" scope="col">Descrição</th>
                        <th class="text-center" scope="col">Preço</th>
                        <th class="text-center" scope="col">Visitas</th>
                        <th class="text-center" scope="col">Vendedor</th>
                        <th class="text-center" scope="col">Categoria</th>
                        <th class="text-center" scope="col">...</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($products as $p)
                      <tr>
                        <td class="text-center" scope="row">{{ $p->id }}</td>
                        <td class="text-center">{{ $p->name }}</td>
                        <td class="text-center">{{ $p->description }}</td>
                        <td class="text-center">{{ formatMoney($p->price) }}</td>
                        <td class="text-center">{{ $p->views }}</td>
                        <td class="text-center">{{ $p->user->name }}</td>
                        <td class="text-center">{{ $p->category->name }}</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-primary" href="{{ route('products.show', $p->id) }}">Visualizar</a>
                          <form method="POST" action="{{ route('products.destroy', $p->id) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit">Apagar</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>                 
                </div>

                <div class="card-footer">
                    <div class="d-flex justify-content-start">
                        <div class="p-1"><a class="btn btn-sm btn-outline-dark" href="{{ route('users.create') }}">Cadastrar usuário</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endif
@endauth

@endsection