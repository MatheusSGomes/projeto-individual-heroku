@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
  <div class="col-10 col-sm-8 col-md-6 col-lg-5">
    <div class="card">
      <div class="card-body">
        <h4 class="text-center">Deseja remover a categoria <strong>{{ $category->name }}</strong>?</h4>
        <p class="text-center">Essa categoria tem <strong>{{ count($category->products) }}</strong> produto(s) cadastrados.</p>
        @if(count($category->products) > 0)
          <p class="text-center alert alert-danger"><strong>AVISO:</strong> Todos os produtos da categoria serão apagados.</p>
        @endif
      </div>
      <div class="card-footer">
        <div class="d-flex flex-row justify-content-end">
          <a href="{{ route('dashboard')}}" class="btn btn-secondary m-1">Cancelar</a>
  
          <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
              @csrf
              @method("DELETE")
              <input class="btn btn-danger m-1" type="submit" value="Apagar">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection