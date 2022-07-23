<p>Inspiração: https://getbootstrap.com.br/docs/4.1/examples/blog/</p>

@extends('layouts.app')
@section('content')

@auth
  <p>Conteúdo para quem está logado</p>
@endauth

@guest
  <p>Conteúdo apenas para visitantes</p>    
@endguest


{{-- CATEGORIAS --}}
<div class="container">
  <h1 class="display-4 font-italic h1-classificados text-center mb-5 mt-5">Classificados</h1>


  <h2>Categorias</h2>
  <hr class="mb-5">  

  <div class="d-flex justify-content-around mb-5">
    @foreach($categories as $category)
      <a href="{{ route('categories.showproducts', $category->id) }}" class="categoria-link">
        <div class="categoria">
          <img class="rounded-circle mb-2" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="90" height="90">
          <p class="text-center">{{$category->name}} ({{ count($category->products) }})</p>
        </div>
      </a>
    @endforeach
  </div>
  
</div>


{{-- TODOS OS PRODUTOS --}}
<div class="container">
  <h2>Todos os produtos</h2>
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
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    @endforeach
  </div>


</div>


{{-- <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="https://vangogh.teespring.com/v3/image/-OpCH5guL7iRy6xu4D7E7xWz9K8/480/560.jpg" class="card-img-top" alt="...">

      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="mr-auto p-2">
            <h5 class="card-title"><p>R$ 197,89</p></h5>
            <p class="card-text">Nome produto</p>
          </div>

          <div class="p-2">
            <a href="#" class="btn btn-success btn-sm">Ver produto</a>
          </div>
        </div>
      </div>

      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div> --}}


<div class="container mt-5"></div>

{{-- <div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card text-bg-white box-card-img-config card-product">

        <img src="http://127.0.0.1:8000/storage/products/ZuEQ9RrvB11sx2Eo41bRftn8ay4IEHr3Xrt1LfQU.jpg" class="card-img card-img-config" alt="...">
        
        <div class="card-img-overlay p-1">
          <div class="d-flex justify-content-between" style="height: 290px;"> 
            <div class="mb-auto p-2">
              <h4 class="card-title">
                <span class="badge rounded-pill bg-primary">R$ 85,56</span>
              </h4>
              <span class="badge rounded-pill text-bg-dark" style="opacity: 0.6;">3 dias atrás</span>
            </div>
            <div class="p-2">
              <p class="card-text">
                <span class="badge rounded-pill text-bg-secondary">Usado</span>
              </p>
            </div>
          </div>
        </div><!-- card overlay -->

        <div class="card-body">
          <div class="d-flex justify-content-between"> 
            <div class="mb-auto p-2">
              <a>Nome produto</a>
            </div>
            <div class="p-2">
              <a href="#" class="btn btn-sm btn-primary">Comprar</a>
            </div>
          </div>
        </div>

      </div>
    </div><!-- end card -->
    
  </div>
</div> --}}

<div class="container mt-5"></div>


@endsection