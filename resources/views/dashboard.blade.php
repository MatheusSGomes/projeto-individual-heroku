@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="me-auto p-2">
                            <h4>{{ Auth::user()->name }}</h4>
                            @if(Auth::user()->is_admin == 1)
                                <span class="badge rounded-pill bg-success">Admininistrador</span>
                            @else
                                <span class="badge rounded-pill bg-primary">Cliente</span>
                            @endif
                        </div>
                        <div class="d-flex flex-column align-items-end justify-content-center">
                            <div class=""><a class="btn btn-sm btn-dark" href="{{ route('products.create') }}">Anunciar produto</a></div>
    
                            <div class="mt-1"><a class="btn btn-sm btn-outline-dark" href="{{ route('users.edit', Auth::user()->id) }}">Editar perfil</a></div>
                        </div>
                    </div>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @if(count($products))
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Seus anuncios</div>

                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach($products as $p)
                            <div class="d-flex list-group-item">
                                <div class="me-auto p-2">{{ $p->name }}</div>
                                <div class="p-2"><a class="btn btn-sm btn-primary" href="{{ route('products.edit', $p->id) }}">Editar</a></div>
                                <div class="p-2">
                                    <a href="#">
                                        <form method="POST" action="{{ route('products.destroy', $p->id) }}">
                                            @csrf
                                            @method("DELETE")
                                            <input class="btn btn-sm btn-danger" type="submit" value="Apagar">
                                        </form>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                      </ul>                    
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(Auth::user()->is_admin == 1)
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Últimos usuários cadastrados</div>

                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach($users as $u)
                            <div class="d-flex list-group-item">
                                <div class="me-auto p-2">{{ $u->name }}</div>
                                <div class="p-2"><a class="btn btn-sm btn-primary" href="{{ route('users.edit', $u->id) }}">Editar</a></div>
                                <div class="p-2">
                                    <a href="#">
                                        <form method="POST" action="{{ route('users.destroy', $u->id) }}">
                                            @csrf
                                            @method("DELETE")
                                            <input class="btn btn-sm btn-danger" type="submit" value="Apagar">
                                        </form>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                      </ul>                    
                </div>

                <div class="card-footer">
                    <div class="d-flex justify-content-start">
                        <div class="p-1"><a class="btn btn-sm btn-dark" href="{{ route('users.index') }}">Ver todos</a></div>
                        <div class="p-1"><a class="btn btn-sm btn-outline-dark" href="{{ route('users.create') }}">Cadastrar usuário</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(Auth::user()->is_admin == 1)
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categorias cadastradas</div>

                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach($categories as $c)
                            <div class="d-flex list-group-item">
                                <div class="me-auto p-2">{{ $c->name }}</div>
                                <div class="p-2"><a class="btn btn-sm btn-primary" href="{{ route('categories.edit', $c->id) }}">Editar</a></div>
                                <div class="p-2">
                                    <a href="#">
                                        <form method="POST" action="{{ route('categories.destroy', $c->id) }}">
                                            @csrf
                                            @method("DELETE")
                                            <input class="btn btn-sm btn-danger" type="submit" value="Apagar">
                                        </form>
                                    </a>
                                </div>
                            </div>
                            {{-- <li class="list-group-item">{{ $p->name }}</li> --}}
                        @endforeach
                      </ul>                    
                </div>

                <div class="card-footer">
                    
                    <div class="d-flex justify-content-between">
                        <div class="p-1"><a class="btn btn-sm btn-outline-dark" href="{{ route('categories.create') }}">Criar categoria</a></div>
                        <div class="">
                            {{ $categories->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(Auth::user()->is_admin == 1)
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Últimos produtos cadastrados</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach($allProducts as $p)
                        <div class="d-flex list-group-item">
                            <div class="me-auto p-2">{{ $p->name }}</div>
                            <div class="p-2">
                                <a class="btn btn-sm btn-primary" href="{{ route('products.show', $p->id) }}">Visualizar</a>
                            </div>
                            <div class="p-2">
                                <form method="POST" action="{{ route('products.destroy', $p->id) }}">
                                    @csrf
                                    @method("DELETE")
                                    <input class="btn btn-sm btn-danger" type="submit" value="Apagar">
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-start">
                        <div class="p-1"><a class="btn btn-sm btn-dark" href="{{ route('products.index') }}">Ver todos</a></div>
                        <div class="p-1"><a class="btn btn-sm btn-outline-dark" href="{{ route('products.create') }}">Cadastrar produto</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

</div>
@endsection
