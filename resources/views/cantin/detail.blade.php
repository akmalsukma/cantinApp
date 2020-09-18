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

        <div class="row my-5">
            <div class="col-md-12">
                <a href="{{ url('home')}}" class="btn btn-warning mb-4"><i class="fas fa-arrow-left"></i> Kembali</a>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <img src="{{ asset('img')}}/{{$makanan->gambar}}" alt="" srcset="" width="300px"
                                    class="rounded mx-auto d-block">
                            </div>
                            <div class="col-md-6 mt-5">
                                <h3>{{$makanan->nama_makanan}}</h3>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td>Rp.{{$makanan->harga}}</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>:</td>
                                            <td>{{$makanan->status}}</td>
                                        </tr>

                                        <form action="{{url('pesan')}}/{{$makanan->id}}" method="post">
                                            @csrf
                                            <tr>
                                                <td>Jumlah pesanan</td>
                                                <td>:</td>
                                                <td><input type="text" name="jumlah_pesan" class="form-control"
                                                        required></td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td colspan="3">
                                                    <button type="submit" class="btn btn-success"><i
                                                            class="fas fa-shopping-cart"></i> Order!</button>
                                                </td>
                                            </tr>

                                        </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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