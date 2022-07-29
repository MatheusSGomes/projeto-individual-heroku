@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Editar Categoria</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">Imagem cadastrada</label>
    
                            <div class="col-md-6">
                                <div class="card text-bg-light">
                                    <img 
                                        @if($category->image)
                                            src="{{ "http://127.0.0.1:8000/storage/".$category->image }}"
                                        @else
                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                                        @endif
                                        class="card-img img-upload" 
                                        alt="...">
                                </div>    
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome da categoria') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $category->name }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">Trocar Imagem</label>
  
                            <div class="col-md-6">
                                <input 
                                    {{-- id="image"  --}}
                                    id="img-upload"
                                    type="file" 
                                    class="form-control @error('image') is-invalid @enderror"
                                    name="image"
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
