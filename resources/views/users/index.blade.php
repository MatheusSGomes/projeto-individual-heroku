@extends('layouts.app')
@section('content')
@auth
  @if(Auth::user()->is_admin == 1)
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 col-lg-10">
            <div class="card">
                <div class="card-header text-center">Todos usuários cadastrados</div>

                <div class="card-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th class="text-center" scope="col">#</th>
                        <th class="text-center" scope="col">Nome</th>
                        <th class="text-center" scope="col">Admin</th>
                        <th class="text-center" scope="col">Email</th>
                        <th class="text-center" scope="col">Telefone</th>
                        <th class="text-center" scope="col">...</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($users as $u)
                      <tr>
                        <td class="text-center" scope="row">{{ $u->id }}</td>
                        <td class="text-center">{{ $u->name }}</td>
                        <td class="text-center">
                          @if($u->is_admin == 1)
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#198754" class="bi bi-person-check" viewBox="0 0 16 16">
                              <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                              <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                          @else
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#0d6efd" class="bi bi-person-x" viewBox="0 0 16 16">
                              <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                              <path fill-rule="evenodd" d="M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                            </svg>
                          @endif
                        </td>
                        <td class="text-center">{{ $u->email }}</td>
                        <td class="text-center">{{ $u->phone }}</td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-primary" href="{{ route('users.edit', $u->id) }}">Editar</a>
                          <a href="#">
                              <form method="POST" action="{{ route('users.destroy', $u->id) }}" style="display:inline;">
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
                        <div class="p-1"><a class="btn btn-sm btn-outline-dark" href="{{ route('users.create') }}">Cadastrar usuário</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endif
@endauth

@endsection