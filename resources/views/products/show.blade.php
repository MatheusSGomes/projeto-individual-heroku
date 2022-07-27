@extends('layouts.app')

@section('content')

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
                                    <a href="{{ formatToWhatsapp($product->user->phone) }}" class="btn text-white" target="_blank" style="background: #128c7e;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                        </svg>
                                        {{ $product->user->phone }}
                                    </a>
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
