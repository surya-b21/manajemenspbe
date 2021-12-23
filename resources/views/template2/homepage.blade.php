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

    <title>Manajemen Penegetahuan SPBE</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('template2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('template2/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('template2/assets/css/templatemo-digimedia-v3.css')}}">
    <link rel="stylesheet" href="{{asset('template2/assets/css/animated.css')}}">
    <link rel=" stylesheet" href="{{asset('template2/assets/css/owl.css')}}">
    <!--  TemplateMo 568 DigiMedia https://templatemo.com/tm-568-digimedia -->
</head>

<body style="background-image:url('{{asset('template2/assets/images/slider-right-dec.jpg')}}')">
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
                                        Selain itu, sistem ini sekaligus sebagai penyedia konten terkait inovasi layanan yang  dapat dibuat oleh setiap koordinator OPD (Organisasi Perangkat Daerah) maupun super admin</p>
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
                            Penerapan.  Sistem Manajemen Pengetahuan<a rel="nofollow" href="https://jurnal.uns.ac.id/wacana-publik/article/download/53143/32086" target="_blank"> SPBE</a> akan menyediakan berbagai layanan pengetahuan yang ada di 
                            Kota Surakarta baik berupa informasi maupun forum digital, sehingga masyarakat dapat lebih mengenal dan memanfaatkan layanan yang ada.
                            <a href="https://templatemo.com/contact" target="_blank"></a></p>
                                </p>
                                <!-- <div class="row">
                    <div class="col-lg-4 col-sm-4">
                      <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="progress" data-percentage="90">
                          <span class="progress-left">
                            <span class="progress-bar"></span>
                          </span>
                          <span class="progress-right">
                            <span class="progress-bar"></span>
                          </span>
                          <div class="progress-value">
                            <div>
                              90%<br>
                              <span>Coding</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                      <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="progress" data-percentage="80">
                          <span class="progress-left">
                            <span class="progress-bar"></span>
                          </span>
                          <span class="progress-right">
                            <span class="progress-bar"></span>
                          </span>
                          <div class="progress-value">
                            <div>
                              80%<br>
                              <span>Photoshop</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                      <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="progress" data-percentage="80">
                          <span class="progress-left">
                            <span class="progress-bar"></span>
                          </span>
                          <span class="progress-right">
                            <span class="progress-bar"></span>
                          </span>
                          <div class="progress-value">
                            <div>
                              80%<br>
                              <span>Animation</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
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
                <div class="col-lg-12">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <!-- <h6>---</h6> -->
                        <h4>Bidang <em>Inovasi</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="naccs" id="jenis">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="menu">
                                        <?php $i = 0; ?>
                                        @foreach ($ku as $jenis)
                                        <?php if ($i == 0) { ?>
                                            <div class="first-thumb active">
                                                <div class="thumb">
                                                    <span class="icon"><img src="{{asset('template2/assets/images/service-icon-02.png')}}" alt=""></span>
                                                    <?php echo $jenis['kategori']; ?>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            <div>
                                                <div class="thumb">
                                                    <span class="icon"><img src="{{asset('template2/assets/images/service-icon-02.png')}}" alt=""></span>
                                                    <?php echo $jenis['kategori']; ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php $i++; ?>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <?php $i = 0;
                                        $jenis = 1; ?>
                                        @foreach ($ku as $ku)
                                        <?php $id_jenis = $ku['id']; ?>
                                        <?php if ($i == 0) { ?>
                                            <?php $k = 1; ?>
                                            <li class="active">
                                                <div>
                                                    <div class="thumb">
                                                        <div class="row">
                                                            <div class="col-lg-6 align-self-center">
                                                                <div class="left-text mb-4">
                                                                    <h4>Kategori {{$ku['kategori']}} </h4>
                                                                    @foreach ($inovasi as $data)
                                                                    @if ($k <= 5) @if ($data['id_ku']==$ku['id']) <form action="/inovasi/read/{{$data['nama']}}" method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="input-group mb-3">
                                                                            <input type="hidden" name="jenis" value="{{$jenis}}">
                                                                            <input type="hidden" name="id_jenis" value="{{$id_jenis}}">
                                                                            <input type="hidden" name="id_inovasi" value="{{$data['id']}}">
                                                                            <button class="btn btn-link " style="box-shadow: none !important; text-decoration: none;" type="submit" name="submit">
                                                                                {{$data['nama']}}
                                                                            </button>
                                                                        </div>
                                                                        </form>
                                                                        <?php $k++; ?>
                                                                        @endif
                                                                        @else
                                                                        @break
                                                                        @endif
                                                                        @endforeach
                                                                </div>
                                                                <form action="/inovasi/kategori" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="input-group mb-3">
                                                                        <input type="hidden" name="jenis" value="{{$jenis}}">
                                                                        <input type="hidden" name="id_kategori" value="{{$id_jenis}}">
                                                                        <button class="btn btn-primary w-100 rounded" type="submit" name="submit">
                                                                            Jelajahi → <img style="width:15px; height:15px" src="{{asset('template2/assets/images/service-icon-01.png')}}" alt=""> {{$ku['kategori']}}
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-lg-6 align-self-center">
                                                                <div class="right-image">
                                                                    <img src="{{asset('template2/assets/images/services-image.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } else { ?>
                                            <?php $k = 1; ?>
                                            <li class="">
                                                <div>
                                                    <div class="thumb">
                                                        <div class="row">
                                                            <div class="col-lg-6 align-self-center">
                                                                <div class="left-text mb-4">
                                                                    <h4>Kategori {{$ku['kategori']}}</h4>
                                                                    @foreach ($inovasi as $data)
                                                                    @if ($k <= 5) @if ($data['id_ku']==$ku['id']) <form action="/inovasi/read/{{$data['nama']}}" method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="input-group mb-3">
                                                                            <input type="hidden" name="jenis" value="{{$jenis}}">
                                                                            <input type="hidden" name="id_jenis" value="{{$id_jenis}}">
                                                                            <input type="hidden" name="id_inovasi" value="{{$data['id']}}">
                                                                            <button class="btn btn-link " style="box-shadow: none !important; text-decoration: none;" type="submit" name="submit">
                                                                                {{$data['nama']}}
                                                                            </button>
                                                                        </div>
                                                                        </form>
                                                                        <?php $k++; ?>
                                                                        @endif
                                                                        @else
                                                                        @break
                                                                        @endif
                                                                        @endforeach
                                                                </div>
                                                                <form action="/inovasi/kategori" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="input-group mb-3">
                                                                        <input type="hidden" name="jenis" value="{{$jenis}}">
                                                                        <input type="hidden" name="id_kategori" value="{{$id_jenis}}">
                                                                        <button class="btn btn-primary w-100 rounded" type="submit" name="submit">
                                                                            Jelajahi → <img style="width:15px; height:15px" src="{{asset('template2/assets/images/service-icon-01.png')}}" alt=""> {{$ku['kategori']}}
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-lg-6 align-self-center">
                                                                <div class="right-image">
                                                                    <img src="{{asset('template2/assets/images/services-image.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                        <?php $i++; ?>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <div class="col-lg-12">
                                    <div class="menu">
                                        <?php $i = 0; ?>
                                        @foreach ($esmart as $data)
                                        <?php if ($i == 0) { ?>
                                            <div class="active">
                                                <div class="thumb">
                                                    <span class="icon"><img src="{{asset('template2/assets/images/service-icon-01.png')}}" alt=""></span>
                                                    {{$data['element']}}
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            <div class="">
                                                <div class="thumb">
                                                    <span class="icon"><img src="{{asset('template2/assets/images/service-icon-01.png')}}" alt=""></span>
                                                    {{$data['element']}}
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php $i++; ?>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <?php $i = 0;
                                        $jenis = 2; ?>
                                        @foreach ($esmart as $e_smart)
                                        <?php $id_jenis = $e_smart['id']; ?>
                                        <?php if ($i == 0) { ?>
                                            <?php $k = 1; ?>
                                            <li class="active">
                                                <div>
                                                    <div class="thumb">
                                                        <div class="row">
                                                            <div class="col-lg-6 align-self-center">
                                                                <div class="left-text mb-4">
                                                                    <h4>Kategori {{$e_smart['element']}} </h4>
                                                                    @foreach ($inovasi as $data)
                                                                    @if ($k <= 5) @foreach ($ks as $ksa) @if ($e_smart['id']==$ksa['id_esmart']) @if ($data['id']==$ksa['id_inovasi']) <form action="/inovasi/read/{{$data['nama']}}" method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="input-group mb-3">
                                                                            <input type="hidden" name="jenis" value="{{$jenis}}">
                                                                            <input type="hidden" name="id_jenis" value="{{$id_jenis}}">
                                                                            <input type="hidden" name="id_inovasi" value="{{$data['id']}}">
                                                                            <button class="btn btn-link " style="box-shadow: none !important; text-decoration: none;" type="submit" name="submit">
                                                                                {{$data['nama']}}
                                                                            </button>
                                                                        </div>
                                                                        </form>
                                                                        <?php $k++; ?>
                                                                        @endif
                                                                        @endif
                                                                        @endforeach
                                                                        @else
                                                                        @break
                                                                        @endif
                                                                        @endforeach
                                                                </div>
                                                                <form action="/inovasi/kategori" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="input-group mb-3">
                                                                        <input type="hidden" name="jenis" value="{{$jenis}}">
                                                                        <input type="hidden" name="id_kategori" value="{{$id_jenis}}">
                                                                        <button class="btn btn-primary w-100 rounded" type="submit" name="submit">
                                                                            Jelajahi → <img style="width:15px; height:15px" src="{{asset('template2/assets/images/service-icon-01.png')}}" alt="">
                                                                            <!-- -->
                                                                            {{$e_smart['element']}}
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-lg-6 align-self-center">
                                                                <div class="right-image">
                                                                    <img src="{{asset('template2/assets/images/services-image.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } else { ?>
                                            <?php $k = 1; ?>
                                            <li class="">
                                                <div>
                                                    <div class="thumb">
                                                        <div class="row">
                                                            <div class="col-lg-6 align-self-center">
                                                                <div class="left-text mb-4">
                                                                    <h4>Kategori {{$e_smart['element']}}" </h4>
                                                                    @foreach ($inovasi as $data)
                                                                    @if ($k <= 5) @foreach ($ks as $ksb) @if ($e_smart['id']==$ksb['id_esmart']) @if ($data['id']==$ksb['id_inovasi']) <form action="/inovasi/read/{{$data['nama']}}" method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="input-group mb-3">
                                                                            <input type="hidden" name="jenis" value="{{$jenis}}">
                                                                            <input type="hidden" name="id_jenis" value="{{$id_jenis}}">
                                                                            <input type="hidden" name="id_inovasi" value="{{$data['id']}}">
                                                                            <button class="btn btn-link " style="box-shadow: none !important; text-decoration: none;" type="submit" name="submit">
                                                                                {{$data['nama']}}
                                                                            </button>
                                                                        </div>
                                                                        </form>
                                                                        <?php $k++; ?>
                                                                        @endif
                                                                        @endif
                                                                        @endforeach
                                                                        @else
                                                                        @break
                                                                        @endif
                                                                        @endforeach
                                                                </div>
                                                                <form action="/inovasi/kategori" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="input-group mb-3">
                                                                        <input type="hidden" name="jenis" value="{{$jenis}}">
                                                                        <input type="hidden" name="id_kategori" value="{{$id_jenis}}">
                                                                        <button class="btn btn-primary w-100 rounded" type="submit" name="submit">
                                                                            Jelajahi → <img style="width:15px; height:15px" src="{{asset('template2/assets/images/service-icon-01.png')}}" alt="">
                                                                            <!-- -->
                                                                            {{$e_smart['element']}}
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-lg-6 align-self-center">
                                                                <div class="right-image">
                                                                    <img src="{{asset('template2/assets/images/services-image.jpg')}}" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                        <?php $i++; ?>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- layanan spbe -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <!-- <h6>---</h6> -->
                        <h4>Layanan <em>SPBE</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="menu">
                                        <div class="active">
                                            <div class="thumb">
                                                <span class="icon"><img src="{{asset('template2/assets/images/service-icon-01.png')}}" alt=""></span>
                                                {{ Str::limit(
                                                    'Layanan Administrasi Pemerintah'
                                                    , 35, '...')
                                                }}
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="thumb">
                                                <span class="icon"><img src="{{asset('template2/assets/images/service-icon-01.png')}}" alt=""></span>
                                                {{ Str::limit(
                                                    'Layanan Publik'
                                                    , 35, '...')
                                                }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <?php $k = 1;
                                        $layanan1 = 1;
                                        $jenis = 3; ?>
                                        <li class="active">
                                            <div>
                                                <?php $id_jenis = 1; ?>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text mb-4">
                                                                <h4></h4>
                                                                @foreach ($inovasi as $data)
                                                                @if ($k <= 5) @if ($data['layanan_spbe']=="Layanan Administrasi Pemerintah" ) <form action="/inovasi/read/{{$data['nama']}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="input-group mb-3">
                                                                        <input type="hidden" name="jenis" value="{{$jenis}}">
                                                                        <input type="hidden" name="id_jenis" value="{{$id_jenis}}">
                                                                        <input type="hidden" name="id_inovasi" value="{{$data['id']}}">
                                                                        <button class="btn btn-link " style="box-shadow: none !important; text-decoration: none;" type="submit" name="submit">
                                                                            {{$data['nama']}}
                                                                        </button>
                                                                    </div>
                                                                    </form>
                                                                    <?php $k++; ?>
                                                                    @endif
                                                                    @else
                                                                    @break
                                                                    @endif
                                                                    @endforeach
                                                            </div>
                                                            <form action="/inovasi/kategori" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="input-group mb-3">
                                                                    <input type="hidden" name="jenis" value="{{$jenis}}">
                                                                    <input type="hidden" name="id_kategori" value="{{$id_jenis}}">
                                                                    <button class="btn btn-primary w-100 rounded" type="submit" name="submit">
                                                                        Jelajahi → <img style="width:15px; height:15px" src="{{asset('template2/assets/images/service-icon-01.png')}}" alt="">
                                                                        Layanan Administrasi Pemerintah
                                                                        <!-- -->
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{asset('template2/assets/images/services-image.jpg')}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php $k = 1;
                                        $layanan2 = 2; ?>
                                        <li class="">
                                            <div>
                                                <?php $id_jenis = 2; ?>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text mb-4">
                                                                <h4></h4>
                                                                @foreach ($inovasi as $data)
                                                                @if ($k <= 5) @if ($data['layanan_spbe']=="Layanan Publik" ) <form action="/inovasi/read/{{$data['nama']}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="input-group mb-3">
                                                                        <input type="hidden" name="jenis" value="{{$jenis}}">
                                                                        <input type="hidden" name="id_jenis" value="{{$id_jenis}}">
                                                                        <input type="hidden" name="id_inovasi" value="{{$data['id']}}">
                                                                        <button class="btn btn-link " style="box-shadow: none !important; text-decoration: none;" type="submit" name="submit">
                                                                            {{$data['nama']}}
                                                                        </button>
                                                                    </div>
                                                                    </form>
                                                                    <?php $k++; ?>
                                                                    @endif
                                                                    @else
                                                                    @break
                                                                    @endif
                                                                    @endforeach
                                                            </div>
                                                            <form action="/inovasi/kategori" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="input-group mb-3">
                                                                    <input type="hidden" name="jenis" value="{{$jenis}}">
                                                                    <input type="hidden" name="id_kategori" value="{{$id_jenis}}">
                                                                    <button class="btn btn-primary w-100 rounded" type="submit" name="submit">
                                                                        Jelajahi → <img style="width:15px; height:15px" src="{{asset('template2/assets/images/service-icon-01.png')}}" alt="">
                                                                        Layanan Publik
                                                                        <!-- -->
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{asset('template2/assets/images/services-image.jpg')}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="portfolio" class="our-portfolio section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div style="text-align: center;" class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                                <!-- <h6>---</h6> -->
                                <h4>Fo<em>rum</em></h4>
                                <div class="line-dec"></div>
                            </div>
                            <!-- <h6>Our Portofolio</h6> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="loop owl-carousel">
                    @foreach ($topik as $t)

                    <div class="item">
                        <a href="{{ url('/topik/'.$t->id) }}">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <span></span>
                                    <h4></h4>
                                    <img src="{{Storage::url($t->foto_path)}}" alt="">
                                    <div class="down-content">
                                        <h6>{{ $t->judul }}</h6>
                                        {{-- <span class="fs-7">{{ $t->created_at->toDateString() }}</span> --}}
                                        <span class="fs-7">{{ $t->created_at->isoFormat('DD MMMM YYYY') }}</span>
                                    </div>
                                    <div class="container ml-2">
                                        <p class="card-text">
                                            {!! Str::limit($t->isi, 100, '...') !!}
                                        </p>
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
