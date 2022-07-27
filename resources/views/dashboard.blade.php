@extends('layouts.app')
@section('content')

<style>
    a {
        text-decoration: none;
    }
</style>

<div class="container">
    {{-- FLASH MESSAGES --}}
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session()->has('category-created'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p>{{ session()->get('category-created') }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            @if(session()->has('category-updated'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <p>{{ session()->get('category-updated') }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session()->has('category-destroy'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <p>{{ session()->get('category-destroy') }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session()->has('product-edit'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <p>{{ session()->get('product-edit') }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session()->has('product-destroy'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <p>{{ session()->get('product-destroy') }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session()->has('user-created'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p>{{ session()->get('user-created') }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session()->has('user-update'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <p>{{ session()->get('user-update') }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session()->has('user-destroy'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <p>{{ session()->get('user-destroy') }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>

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

    {{-- DASHBOARD --}}
    @if(Auth::user()->is_admin == 1)
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-white bg-transparent">
                <div class="card-body bg-transparent">
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="{{ route('products.index') }}" class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Produtos</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dashboardData['products'] }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-cart-shopping fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="{{ route('categories.index') }}" class="text-xs font-weight-bold text-success text-uppercase mb-1">Total categorias</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dashboardData['categories'] }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-tags fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="{{ route('users.index') }}" class="text-xs font-weight-bold text-info text-uppercase mb-1">Total usuários</a>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dashboardData['users'] }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total visitas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dashboardData['views'] }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-eye fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif


    @if(count($products))
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Seus anuncios</div>

                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach($products as $p)
                            <div class="d-flex list-group-item mb-0">
                                <div class="p-2 align-self-center">{{ $p->name }}</div>

                                <div class="me-auto p-2 align-self-center">
                                    <span class="badge rounded-pill text-bg-primary text-white mr-2 mb-0">
                                        {{ $p->views }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </span>
                                </div>
                                <div class="p-2">
                                    <a class="btn btn-sm btn-primary" href="{{ route('products.edit', $p->id) }}">Editar</a>
                                </div>
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
                                <div class="p-2"><a class="btn btn-sm btn-danger" href="{{ route('categories.confirmDelete', $c->id) }}">Apagar</a></div>
                            </div>
                        @endforeach
                      </ul>                    
                </div>

                <div class="card-footer">
                    <div class="d-flex justify-content-start">
                        <div class="p-1"><a class="btn btn-sm btn-dark" href="{{ route('categories.index') }}">Ver todas</a></div>
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
