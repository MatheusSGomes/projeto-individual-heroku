@extends('layouts.app')
@section('content')
<div class="container">


  
<h1>Listar produtos da categoria</h1>

<div class="row row-cols-1 row-cols-md-3 g-4">
  @foreach($category->products as $product)
    <div class="col">
      <div class="card">
        <img 
          src="{{ "http://127.0.0.1:8000/storage/".$product->image }}"
          class="card-img-top" 
          alt="{{ $product->name }}"
        />

        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div class="mr-auto p-2">
              <p class="card-title h4">R$ {{ $product->price }}</h4>
              <p class="card-text">{{ $product->name }}</p>
            </div>
  
            <div class="p-2">
              <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm">Ver produto</a>
            </div>
          </div>
        </div>
  
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
  @endforeach
</div>

</div>
@endsection