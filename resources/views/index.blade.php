@foreach($categories as $category)
  <p>{{ $category->name }} ({{ count($category->products) }})</p>
  <ul>
    @foreach($category->products as $product)
      <li>{{$product->name}}</li>
    @endforeach
  </ul>
@endforeach

@auth
  <p>Conteúdo para quem está logado</p>
@endauth

@guest
  <p>Conteúdo apenas para visitantes</p>    
@endguest