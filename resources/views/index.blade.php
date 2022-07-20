
@foreach($categories as $category)
  <p>{{ $category->name }} ({{ count($category->products) }})</p>
  <ul>
    @foreach($category->products as $product)
      <li>{{$product->name}}</li>
    @endforeach
  </ul>
@endforeach