@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Produto') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome do produto') }}</label>

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
                          <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Descrição do produto') }}</label>

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
                          <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Preço do produto') }}</label>

                          <div class="col-md-6">
                              <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}" autocomplete="price" autofocus>

                              @error('price')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Imagem do produto') }}</label>

                          <div class="col-md-6">
                              <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ $product->image }}" autocomplete="image" autofocus>

                              @error('image')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="user_id" class="col-md-4 col-form-label text-md-end">{{ __('ID do usuário') }}</label>

                          <div class="col-md-6">
                              <input id="user_id" type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ $product->user_id }}" autocomplete="user_id" autofocus>

                              @error('user_id')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="category_id" class="col-md-4 col-form-label text-md-end">{{ __('Categoria do produto') }}</label>

                          <div class="col-md-6">
                              <input id="category_id" type="text" class="form-control @error('category_id') is-invalid @enderror" name="category_id" value="{{ $product->category_id }}" autocomplete="category_id" autofocus>

                              @error('category_id')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Editar') }}
                                </button>

                                <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Apagar</button>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
