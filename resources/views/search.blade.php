@extends('layouts.app')
@section('content')
<div class="container">

  <h2>Todos os produtos <strong>{{ $search }}</strong> encontrados</h2>
  <hr class="mb-5">
  
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($products as $product)
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
            <div class="d-flex justify-content-between">
              <small class="text-muted"> postado
                @if($product->created_at)
                   {{ $product->created_at->diffForHumans() }}
                @else
                  {{ $product->updated_at->diffForHumans() }}
                @endif
              </small>

              <p class="d-flex align-items-center text-muted mb-0">
                <small style="margin-right: 5px;">{{ $product->views }}</small>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                </svg>
              </p>
            </div>

          </div>
        </div>
      </div>
    @endforeach
  </div>
  
  <div class="mt-5">
    {{ $products->links('pagination::bootstrap-5') }}
  </div>
</div>
@endsection
