<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cantin App</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/shop-homepage.css')}}" rel="stylesheet">

  <!--Fontawesome-->
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link
    href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}"
    rel="stylesheet">


</head>

<body>

  <!-- Navigation -->
  @include('cantin.include.navbar')

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-lg-12">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="{{ asset('img/anton-murygin-jD7WYFNJ-0s-unsplash.jpg')}}"
                alt="First slide" height="350px">
              <div class="carousel-caption d-none d-md-block">
                <h1>CantinApp</h1>
                <h5>Terpacaya,termurah dan terenak</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{ asset('img/nick-hillier-xBXF9pr6LQo-unsplash.jpg')}}"
                alt="Second slide" height="350px">
              <div class="carousel-caption d-none d-md-block">
                <h1>CantinApp</h1>
                <h5>Terpacaya,termurah dan terenak</h5>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <h1>CantinApp</h1>
                <h5>Terpacaya,termurah dan terenak</h5>
              </div>
              <img class="d-block img-fluid" src="{{ asset('img/shawn-ang-nmpW_WwwVSc-unsplash.jpg')}}"
                alt="Third slide" height="350px">
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          @foreach ($makanan as $data)
          <div class="col-lg-4 mb-4">
            <div class="card h-100">
              <img class="card-img-top" src="{{ asset('img')}}/{{$data->gambar}}" alt="" height="200px">
              <div class="card-body">
                <h4 class="card-title">
                  {{$data->nama_makanan}}
                </h4>
                <h5>{{$data->harga}}</h5>
                <p class="card-text">{{$data->status}}
                </p>
              </div>
              <div class="card-footer">
                <a href="{{url('pesan')}}/{{$data->id}}" class="btn btn-info"><i class="fas fa-cart-plus"></i> Add To
                  Cart</a>
              </div>
            </div>
          </div>


          @endforeach


        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  @include('cantin.include.footer')
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>