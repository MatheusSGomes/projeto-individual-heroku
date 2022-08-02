@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Editar Produto</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">Imagem do produto</label>
    
                            <div class="col-md-6">
                                <div class="card text-bg-light">
                                    <img 
                                        @if($product->image)
                                            src="{{ $product->image }}" 
                                        @else
                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                        @endif
                                        class="card-img img-upload" 
                                        alt="{{ $product->name }}"
                                    />
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
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}" autocomplete="name" autofocus>

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
                              <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $product->description }}" autocomplete="description" autofocus>

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
                              <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ formatMoney($product->price) }}" autocomplete="price" autofocus>

                              @error('price')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="image" class="col-md-4 col-form-label text-md-end">Imagem do produto</label>

                          <div class="col-md-6">
                            <input 
                                {{-- id="image"  --}}
                                id="img-upload" 
                                type="text" 
                                class="form-control @error('image') is-invalid @enderror" 
                                name="image" 
                                value="{{ $product->image }}" 
                                autocomplete="image" 
                                autofocus
                                onchange="previewImage()"
                            />

                              @error('image')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                        </div>

                        <div class="row mb-3">
                            <label for="category_id" class="col-md-4 col-form-label text-md-end">Categoria do produto</label>
                            
                            <div class="col-md-6">
                                <select class="form-select" size="3" aria-label="size 3 select example" name="category_id">
                                    @foreach($categories as $category)
                                        
                                    <option 
                                        @if($product->category_id == $category->id)
                                            selected
                                        @endif
                                        value="{{ $category->id }}"
                                    >
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
  
                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
