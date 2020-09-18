<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Cart</title>

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
                <a href="{{ url('home')}}" class="btn btn-warning mb-4"> <i class="fas fa-arrow-left"></i> Kembali</a>
                <div class="card mb-5">
                    <div class="card-body">
                        <h3>My Cart</h3>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Makanan</th>
                                    <th>Harga Makanan</th>
                                    <th>Jumlah Pemesanan</th>
                                    <th>Total Harga</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1 ;?>
                                @foreach ($order as $data)
                                <tr>
                                    <td>{{$no++ }}</td>
                                    <td>{{$data->makanan->nama_makanan }}</td>
                                    <td>Rp. {{number_format($data->makanan->harga) }}</td>
                                    <td>{{$data->jumlah_pesan }}</td>
                                    <td>Rp. {{number_format($data->makanan->harga*$data->jumlah_pesan)}}</td>
                                    <td>
                                        <form action="{{url('/pesanan')}}/{{$data->id}}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                        <form action="{{url('/pesanan/bayar')}}/{{$data->id}}" method="post"
                                            class="d-inline">
                                            @method('post')
                                            @csrf
                                            <button type="submit" class="btn btn-primary"><i
                                                    class="fas fa-cash-register"></i></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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