<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            color: #444444;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Manajemen Penegetahuan SPBE</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('template2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('template2/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('template2/assets/css/templatemo-digimedia-v3.css')}}">
    <link rel="stylesheet" href="{{asset('template2/assets/css/animated.css')}}">
    <link rel=" stylesheet" href="{{asset('template2/assets/css/owl.css')}}">
    <!--  TemplateMo 568 DigiMedia https://templatemo.com/tm-568-digimedia -->
</head>

<!-- <body style="background-image:url('{{asset('template2/assets/images/slider-right-dec.jpg')}}')"> -->

<body>
    <!-- Responsive navbar-->
    @include('template2/navbar')
    <!-- ======= Breadcrumbs ======= -->

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h6>Selamat Datang</h6>
                                        <h3>Sistem Manajemen Pengetahuan SPBE</h3>
                                        <p>Dengan adanya alat bantu Sistem Manajemen Pengetahuan SPBE dapat memaksimalkan sistem yang akan membantu pengguna untuk memperoleh informasi mengenai sistem SPBE yang digunakan
                                            pemerintah Surakarta, serta mengizinkan pengguna untuk berinteraksi melalui forum.
                                            Selain itu, sistem ini sekaligus sebagai penyedia konten terkait inovasi layanan yang dapat dibuat oleh setiap koordinator OPD (Organisasi Perangkat Daerah) maupun super admin</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border-first-button scroll-to-section">
                                            {{-- <a href="#contact">Free Quote</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="{{asset('template2/assets/images/slider-dec-v3.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                <iframe src="https://www.youtube.com/embed/tUFKGkmKN3o" width="500" height="400" allowfullscreen></iframe>

                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="about-right-content">
                                <div class="section-heading">
                                    <h6>Tentang Kami</h6>
                                    <h4>Manajemen Pengetahuan <em>SPBE?</em></h4>
                                    <div class="line-dec"></div>
                                </div>
                                <p>Layanan SPBE terdiri atas layanan administrasi pemerintahan berbasis elektronik dan layanan publik berbasis elektronik.
                                    Penerapan. Sistem Manajemen Pengetahuan<a rel="nofollow" href="https://jurnal.uns.ac.id/wacana-publik/article/download/53143/32086" target="_blank"> SPBE</a> akan menyediakan berbagai layanan pengetahuan yang ada di
                                    Kota Surakarta baik berupa informasi maupun forum digital, sehingga masyarakat dapat lebih mengenal dan memanfaatkan layanan yang ada.
                                    <a href="https://templatemo.com/contact" target="_blank"></a>
                                </p>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="services section">
        <!-- bidang inovasi -->
        <div class="container">
            <div class="row" style="margin-bottom: 100px;">

            </div>

            <!-- elemen smart -->
            <div class="row" style="margin-bottom: 100px;">
                <div class="col-lg-12">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <!-- <h6>---</h6> -->
                        <h4>Elemen <em>Smart City</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="card-group">
                                    <?php for ($i = count($inovasi) - 1; $i > count($inovasi) - 4; $i--) { ?>
                                        <div class="card bg-image hover-zoom">
                                            <img src="{{Storage::url($inovasi[$i]->poster_path)}}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <span class="badge rounded-pill bg-info text-dark"><?= $inovasi[$i]->element ?></span>
                                                <span class="badge rounded-pill bg-info text-dark"><?= $inovasi[$i]->kategori ?></span>

                                                <h5 class="" style="font-family:sans-serif;letter-spacing: 1px;
  font-weight: 700;
  color: #4da6e7;text-transform: capitalize"><?= ucfirst($inovasi[$i]->nama) ?></h5>
                                                <p class="card-text"><?= substr($inovasi[$i]->deskripsi, 0, 50) . "..." ?></p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="{{url('/inov/konten/'.encrypt($inovasi[$i]->id))}}"><small class="text-muted">Selengkapnya</small></a>
                                            </div>
                                        </div>
                                        <div>
                                            &nbsp;
                                            &nbsp;
                                            &nbsp;
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- layanan spbe : kodingan telah dihapus -->
        </div>

        <div class="col-lg-12">
            <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <!-- <h6>---</h6> -->
                <h4><em>Forum</em></h4>
                <div class="line-dec"></div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="loop owl-carousel">
                @foreach ($topik as $t)

                <div class="item">
                    <a href="{{ url('/topik/'.$t->id) }}">
                        <div class="portfolio-item">
                            <div class="thumb hover-overlay hover-zoom">
                                <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
                                    <img src="{{Storage::url($t->foto_path)}}" class="w-100" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(57, 192, 237, 0.2)"></div>
                                    </a>
                                </div>
                                <div class="down-content">
                                    <h6>{{ $t->judul }}</h6>
                                    {{-- <span class="fs-7">{{ $t->created_at->toDateString() }}</span> --}}
                                    <span class="fs-7">{{ $t->created_at->isoFormat('DD MMMM YYYY') }}</span>
                                </div>
                                <div class="container">
                                    <p class="card-text">
                                        {!! Str::limit($t->isi, 100, '...') !!}
                                    </p>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    @include('template2/footer')