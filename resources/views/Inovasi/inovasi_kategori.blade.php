<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>DigiMedia - Creative SEO HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('template2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('template2/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('template2/assets/css/templatemo-digimedia-v3.css')}}">
    <link rel="stylesheet" href="{{asset('template2/assets/css/animated.css')}}">
    <link rel=" stylesheet" href="{{asset('template2/assets/css/owl.css')}}">
    <!--  TemplateMo 568 DigiMedia https://templatemo.com/tm-568-digimedia -->
</head>

<body>
    <!-- Responsive navbar-->
    {{-- @include('../template2/navbar') --}}
    @extends('../template')
    @section('container')

    <!-- Page content-->
    <div class="container" >
        <!-- Page header with logo and tagline-->
        <div class="row " style="padding-bottom:50px;">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <!-- <h6>---</h6> -->
                        <h4><em>
                            @foreach ($kategori as $kategori)
                            <?php
                                if ($jenis == "1"){
                                    echo $kategori['kategori'];
                                }
                                else if ($jenis == "2"){
                                    echo $kategori['element'];
                                }
                                else if ($jenis == "3"){
                                    echo $kategori['nama'];
                                }
                            ?>    
                            @endforeach
                        </em></h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
        </div>
        <div class="row">
            @foreach ($inovasi as $data)
            <div class="col-lg-3">
                <div class="card mb-4" style="border-radius:15px;">
                    <a href="{{url('/inovasi/read/'.$data['id'])}}"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..."  style="border-top-left-radius:15px; border-top-right-radius:15px;"/></a>
                    <div class="card-body">
                        <div class="small text-muted">{{$data['tgl_upload']}}</div>
                        <h2 class="card-title h4">{{ Str::limit($data['nama'], 10, '...') }}</h2>
                        <p class="card-text">
                            {{ Str::limit($data['deskripsi'], 80, '...') }}
                        </p>
                        <a class="btn btn-primary" href="{{url('/inovasi/read/'.$data['id'])}}">Selengkapnya →</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Pagination-->
        <nav aria-label="Pagination">
            <hr class="my-0" />
            <ul class="pagination justify-content-center my-4">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Terbaru</a></li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                <li class="page-item"><a class="page-link" href="#!">15</a></li>
                <li class="page-item"><a class="page-link" href="#!">Terlama</a></li>
            </ul>
        </nav>
    </div>
    <!-- Footer-->
    @endsection
     {{-- @include('.../template2/footer') --}}
</body>
</html>
