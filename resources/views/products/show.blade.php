@extends('layouts.app')

@section('content')

{{-- https://api.whatsapp.com/send?phone=5561992404578 --}}
{{-- {{ Str::of($product->user->phone)->trim('-') }} --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Detalhes do  {{ $product->name }}</div>

                <div class="card-body">
                    <div class="row mb-3">
                        <label for="image" class="col-md-4 col-form-label text-md-end">Imagem do produto</label>

                        <div class="col-md-6">
                            <div class="card text-bg-light">
                                <img src="{{ "http://127.0.0.1:8000/storage/".$product->image }}" class="card-img" alt="..." id="card-img" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            </div>

                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>    

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">Nome do produto</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}" readonly disabled autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="description" class="col-md-4 col-form-label text-md-end">Descrição do produto</label>

                        <div class="col-md-6">
                            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $product->description }}" readonly disabled autocomplete="description" autofocus>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="price" class="col-md-4 col-form-label text-md-end">Preço do produto</label>

                        <div class="col-md-6">
                            <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}" readonly disabled autocomplete="price" autofocus>

                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="user_id" class="col-md-4 col-form-label text-md-end">Vendedor</label>

                        <div class="col-md-6">
                            <input id="user_id" type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ $product->user->name }}" readonly disabled autocomplete="user_id" autofocus>

                            @error('user_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="category_id" class="col-md-4 col-form-label text-md-end">Categoria do produto</label>

                        <div class="col-md-6">
                            <input id="category_id" type="text" class="form-control @error('category_id') is-invalid @enderror" name="category_id" value="{{ $product->category->name }}" readonly disabled autocomplete="category_id" autofocus>

                            @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>                        

                </div>

                {{-- https://api.whatsapp.com/send?phone=5561992404578 --}}
                
                <div class="card-footer">
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label text-md-end">Contato do vendedor</label>

                        <div class="col-md-6">
                            <div class="row mb-0">
                                <p style="margin: 0px;">
                                    <a href="#" class="btn btn-success">{{ $product->user->phone }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                @auth
                    @if(Auth::user()->id == $product->user->id || Auth::user()->is_admin == 1)
                        <div class="card-footer">
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar produto</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endauth

            </div>
        </div>
    </div> 
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $product->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img 
                    src="{{ "http://127.0.0.1:8000/storage/".$product->image }}"
                    width="100%"
                    alt="{{ $product->name }}"
                />
            </div>
        </div>
    </div>
</div>

@endsection
