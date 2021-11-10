{{-- @include ('.../template2/main')
<body style="background-image:url('{{asset('template2/assets/images/slider-right-dec.jpg')}}')">
    @extends('../template')
    @section('container') --}}

    
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- <title>Hello, world!</title> -->
</head>
@include('template2/main')
@include('template2/navbar')
<!-- ======= Breadcrumbs ======= -->

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
    {{-- @endsection --}}

</body>
@include('template2/footer')

</html>
