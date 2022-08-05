@extends('layouts.app')
@section('content')
<div class="container">
 
<h2>Produtos da categoria: {{ $category->name }}</h2>
<hr class="mb-5">  

<div class="row row-cols-1 row-cols-md-3 g-4">
  @foreach($category->products as $product)
    <div class="col">
      <div class="card">
        <div style="height: 250px;">
          <img 
            src="{{ $product->image }}"
            class="card-img-top" 
            alt="{{ $product->name }}"
            style="height: 100%; width: 100%; object-fit: cover;"
          />
        </div>
        
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