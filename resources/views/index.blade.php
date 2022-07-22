<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

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

<div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4">
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

  </div>
</div>

<div class="container mt-5"></div>

<div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card text-bg-dark">
        <img src="https://s2.glbimg.com/yD_u7JKxxZGps-xKcBRHJrvBK6Q=/0x0:1600x900/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2019/b/0/9oNBpeQ7iVRnWzmVUzWw/brecho-online-como-vender-coisas-usadas.jpg" class="card-img" alt="...">
        
        <div class="card-img-overlay">
          <h5 class="card-title"><span class="badge rounded-pill bg-primary">R$ 85,56</span></h5>
          <p class="card-text"><span class="badge rounded-pill text-bg-dark">Last updated 3 mins ago</span></p>
        </div>
      </div>
    </div><!-- end card -->

    <div class="col">
      <div class="card text-bg-dark">
        <a href="#" class="card-product">
          <img src="https://vangogh.teespring.com/v3/image/-OpCH5guL7iRy6xu4D7E7xWz9K8/480/560.jpg" class="card-img" alt="...">
          
          <div class="card-img-overlay">
            <div class="d-flex align-items-start flex-column" style="height: 330px;">
              
              <div class="mb-auto">
                <h4 class="card-title">
                  <span class="badge rounded-pill bg-primary">R$ 85,56</span>
                </h4>
              </div>
              <div class="p-2">
                <p class="card-text">
                  <span class="badge rounded-pill text-bg-dark">Last updated 3 mins ago</span>
                </p>
              </div>
  
            </div>
          </div>
        </a>

      </div>
    </div><!-- end card -->


  </div>
</div>

<div class="container mt-5"></div>
