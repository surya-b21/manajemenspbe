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
  @include('../template2/navbar')
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
                    <h2>Sistem Manajemen Pengetahuan SPBE</h2>
                    <p>Thank you.</p>
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
                  <h6>About Us</h6>
                  <h4>Manajemen Pengetahuan <em>SPBE?</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>merupakan 
                  <a href="#" target="_blank">Diskominfo SP</a> 
                  ....
                </p>
                <div class="row">
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
                </div>
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
                                        <?php $i=0; ?>
                                        @foreach ($ku as $jenis)
                                        <?php if ($i==0){ ?>
                                            <div class="first-thumb active">
                                                <div class="thumb">
                                                    <span class="icon"><img src="{{asset('template2/assets/images/service-icon-02.png')}}" alt=""></span>
                                                    <?php echo $jenis['kategori'];?>
                                                </div>
                                            </div>
                                        <?php }
                                            else {?>
                                            <div>
                                                <div class="thumb">
                                                    <span class="icon"><img src="{{asset('template2/assets/images/service-icon-02.png')}}" alt=""></span>
                                                    <?php echo $jenis['kategori'];?>
                                                </div>
                                            </div>
                                        <?php }?>
                                        <?php $i++; ?>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <?php $i=0; $jenis=1; ?>
                                        @foreach ($ku as $ku)
                                        <?php $id_jenis = $ku['id'];?>
                                        <?php if ($i==0){ ?>
                                            <?php $k=1;?>
                                            <li class="active">
                                                <div>
                                                    <div class="thumb">
                                                        <div class="row">
                                                            <div class="col-lg-6 align-self-center">
                                                                <div class="left-text mb-4">
                                                                    <h4>ini nampilin list tentang topik yang masuk dikategori "{{$ku['kategori']}}" </h4>
                                                                    @foreach ($inovasi as $data)
                                                                    @if ($k <= 5)
                                                                        @if ($data['id_ku'] == $ku['id'])
                                                                        <a href="{{url('/inovasi/read/'.$jenis.'/'.$id_jenis.'/'.$data['id'])}}">
                                                                            <div>
                                                                                {{$data['nama']}}
                                                                                <input name="id_inovasi" type="hidden" class="form-control" value="<?= $data['id'] ?>">
                                                                            </div>
                                                                        </a>
                                                                        <?php $k++; ?>
                                                                        @endif
                                                                    @endif
                                                                    @endforeach
                                                                </div>
                                                                    <a class="btn btn-primary w-100" href="{{url('/inovasi/kategori_umum/'.$ku['id'])}}">Jelajahi → <img style="width:15px; height:15px" src="{{asset('template2/assets/images/service-icon-01.png')}}" alt=""> {{$ku['kategori']}}</a>
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
                                        <?php }
                                            else {?>
                                            <?php $k=1; ?>
                                            <li class="">
                                                <div>
                                                    <div class="thumb">
                                                        <div class="row">
                                                            <div class="col-lg-6 align-self-center">
                                                                <div class="left-text mb-4">
                                                                    <h4>ini nampilin list tentang topik yang masuk dikategori "{{$ku['kategori']}}" </h4>
                                                                    @foreach ($inovasi as $data)
                                                                    @if ($k <= 5)
                                                                        @if ($data['id_ku'] == $ku['id'])
                                                                        <a href="{{url('/inovasi/read/'.$jenis.'/'.$id_jenis.'/'.$data['id'])}}">
                                                                            <div>
                                                                                {{$data['nama']}}
                                                                                <input name="id_inovasi" type="hidden" class="form-control" value="<?= $data['id'] ?>">
                                                                            </div>
                                                                        </a>
                                                                        <?php $k++; ?>
                                                                        @endif
                                                                    @endif
                                                                    @endforeach
                                                                </div>
                                                                    <a class="btn btn-primary w-100" href="{{url('/inovasi/kategori_umum/'.$ku['id'])}}">Jelajahi → <img style="width:15px; height:15px" src="{{asset('template2/assets/images/service-icon-01.png')}}" alt=""> {{$ku['kategori']}}</a>
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
                                        <?php }?>
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
                                        <?php $i=0; ?>
                                        @foreach ($ks as $data)
                                        <?php if ($i==0){ ?>
                                            <div class="active">
                                                <div class="thumb">
                                                    <span class="icon"><img src="{{asset('template2/assets/images/service-icon-01.png')}}" alt=""></span>
                                                    {{$data['element']}}
                                                </div>
                                            </div>
                                        <?php }
                                            else {?>
                                            <div class="">
                                                <div class="thumb">
                                                    <span class="icon"><img src="{{asset('template2/assets/images/service-icon-01.png')}}" alt=""></span>
                                                    {{$data['element']}}
                                                </div>
                                            </div>
                                        <?php }?>
                                        <?php $i++; ?>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <?php $i=0; $jenis=2;?>
                                        @foreach ($ks as $ks)
                                        <?php $id_jenis = $ks['id'];?>
                                        <?php if ($i==0){ ?>
                                            <?php $k=1; ?>
                                            <li class="active">
                                                <div>
                                                    <div class="thumb">
                                                        <div class="row">
                                                            <div class="col-lg-6 align-self-center">
                                                                <div class="left-text mb-4">
                                                                        <h4>ini nampilin list tentang topik yang masuk di kategori "{{$ks['element']}}" </h4>
                                                                        @foreach ($inovasi as $data)
                                                                        @if ($k <= 5)
                                                                        @if ($data['id_smart'] == $ks['id'])
                                                                        <a href="{{url('/inovasi/read/'.$jenis.'/'.$id_jenis.'/'.$data['id'])}}">
                                                                            <div>
                                                                                {{$data['nama']}}
                                                                                <input name="id_inovasi" type="hidden" class="form-control" value="<?= $data['id'] ?>">
                                                                            </div>
                                                                        </a>
                                                                        <?php $k++; ?>
                                                                        @endif
                                                                        @endif
                                                                        @endforeach
                                                                    </div>
                                                                    <a class="btn btn-primary w-100" href="{{url('/inovasi/kategori_smart/'.$ks['id'])}}">Jelajahi → <img style="width:15px; height:15px" src="{{asset('template2/assets/images/service-icon-01.png')}}" alt=""> {{$ks['element']}}</a>
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
                                        <?php }
                                            else {?>
                                            <?php $k=1; ?>
                                            <li class="">
                                                <div>
                                                    <div class="thumb">
                                                        <div class="row">
                                                            <div class="col-lg-6 align-self-center">
                                                                <div class="left-text mb-4">
                                                                    <h4>ini nampilin list tentang topik yang masuk di kategori "{{$ks['element']}}" </h4>
                                                                    @foreach ($inovasi as $data)
                                                                    @if ($k <= 5)
                                                                    @if ($data['id_smart'] == $ks['id'])
                                                                    <a href="{{url('/inovasi/read/'.$jenis.'/'.$id_jenis.'/'.$data['id'])}}">
                                                                        <div>
                                                                            {{$data['nama']}}
                                                                            <input name="id_inovasi" type="hidden" class="form-control" value="<?= $data['id'] ?>">
                                                                        </div>
                                                                    </a>
                                                                    <?php $k++; ?>
                                                                    @endif
                                                                    @endif
                                                                    @endforeach
                                                                </div>
                                                                <a class="btn btn-primary w-100" href="{{url('/inovasi/kategori_smart/'.$ks['id'])}}">Jelajahi → <img style="width:15px; height:15px" src="{{asset('template2/assets/images/service-icon-01.png')}}" alt=""> {{$ks['element']}}</a>
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
                                        <?php }?>
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
                                        <?php $k=1; $layanan1 = 1; $jenis=3; ?>
                                        <li class="active">
                                            <div>
                                                <?php $id_jenis = 1;?>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text mb-4">
                                                                <h4>ini nampilin list tentang topik yang masuk dikategori Layanan Administrasi Pemerintah </h4>
                                                                @foreach ($inovasi as $data)
                                                                @if ($k <= 5)
                                                                @if ($data['id_layanan'] == $layanan1)
                                                                <a href="{{url('/inovasi/read/'.$jenis.'/'.$id_jenis.'/'.$data['id'])}}">
                                                                    <div>
                                                                        {{$data['nama']}}
                                                                        <input name="id_inovasi" type="hidden" class="form-control" value="<?= $data['id'] ?>">
                                                                    </div>
                                                                </a>
                                                                <?php $k++; ?>
                                                                @endif
                                                                @endif
                                                                @endforeach
                                                            </div>
                                                                <a class="btn btn-primary w-100" href="{{url('/inovasi/kategori_layanan/'.$layanan1)}}">Jelajahi → <img style="width:15px; height:15px" src="{{asset('template2/assets/images/service-icon-01.png')}}" alt=""> Layanan Administrasi Pemerintah</a>
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
                                        <?php $k=1; $layanan2 = 2; ?>
                                        <li class="">
                                            <div>
                                                <?php $id_jenis = 2; ?>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text mb-4">
                                                                <h4>ini nampilin list tentang topik yang masuk dikategori Layanan Publik </h4>
                                                                @foreach ($inovasi as $data)
                                                                @if ($k <= 5)
                                                                @if ($data['id_layanan'] == $layanan2)
                                                                <a href="{{url('/inovasi/read/'.$jenis.'/'.$id_jenis.'/'.$data['id'])}}">
                                                                    <div>
                                                                        {{$data['nama']}}
                                                                        <input name="id_inovasi" type="hidden" class="form-control" value="<?= $data['id'] ?>">
                                                                    </div>
                                                                </a>
                                                                <?php $k++; ?>
                                                                @endif
                                                                @endif
                                                                @endforeach    
                                                            </div>
                                                                <a class="btn btn-primary w-100" href="{{url('/inovasi/kategori_layanan/'.$layanan2)}}">Jelajahi → <img style="width:15px; height:15px" src="{{asset('template2/assets/images/service-icon-01.png')}}" alt=""> Layanan Publik </a>
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
        <div class="col-lg-5">
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
        {{-- @foreach ($topik as $t) --}}

        <div class="item">
          {{-- <a href="{{ url('/topik/'.$topik->id) }}"> --}}
            <div class="portfolio-item">
              <div class="thumb">
                <span></span>
                <h4></h4>
                <img src="{{asset('template2/assets/images/portfolio-01.jpg')}}" alt="">
                <div class="down-content">
                  {{-- <h4>{{ $t->judul }}</h4> --}}
                  {{-- <span>{{ $t->created_at->toDateString() }}</span> --}}
                </div>
                <div class="container ml-2 mt-2">
                  <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum voluptatem nobis, dolores perspiciatis eius omnis excepturi, odit in alias placeat molestiae saepe sequi id quos dolorem, ab repellendus. Molestias, distinctio.</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        {{-- @endforeach --}}

      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>

  @include('template2/footer')