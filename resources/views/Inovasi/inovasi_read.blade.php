{{-- @include('.../template2/main')
<body  style="background-image:url('{{asset('template2/assets/images/slider-right-dec.jpg')}}')">
@include('../template2/navbar') --}}


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

<div class="container" style="padding-top:150px;">
    <div>
        <a href="{{url($home)}}">Home</a> > <a href="{{url($inov)}}">Inovasi</a> >
        <form action="/inovasi/kategori" style="display: inline; padding: 0; margin:none;" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="jenis" value="{{$jenis}}">
            <input type="hidden" name="id_kategori" value="{{$id_jenis}}">
            <button class="btn btn-link align-baseline" style="box-shadow: none !important; text-decoration: none; padding: 0; margin: 0;" type="submit" name="submit">
                <?php
                foreach ($inovasi as $data) {
                    foreach ($ku as $ku) {
                        if ($ku['id'] == $data['id_ku']) {
                            $umum = $ku['kategori'];
                            $id_umum = $ku['id'];
                        }
                    }
                    foreach ($ks as $ks) {
                        foreach ($esmart as $e_smart) {
                            if ($ks['id_esmart'] == $e_smart['id']) {
                                $smart = $e_smart['element'];
                                $id_smart = $ks['id_esmart'];
                            }
                        }
                    }
                    if ($data['id_layanan'] == 1) {
                        $layanan = "Layanan Administrasi Pemerintah";
                        $id_layanan = 1;
                    } else {
                        $layanan = "Layanan Publik";
                        $id_layanan = 2;
                    }
                }
                if ($jenis == 1) {
                    echo $umum;
                } else if ($jenis == 2) {
                    echo $smart;
                } else if ($jenis == 3) {
                    echo $layanan;
                }
                ?>
            </button>
        </form>
        >
        @foreach ($inovasi as $data)
        <?php $judul = $data['nama']; ?>
        <a href="{{url($self_url)}}">{{$judul}}</a>
        @endforeach
    </div>
</div>
<!-- Page content-->
<div class="container mt-4 bg-white" style="padding-top:50px; border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="row" style="margin-top:0px; margin-bottom: 100px;">
        <div class="col-lg-12 shadow-sm rounded" style="height:fit-content;">
            <div class="m-5">
                @foreach ($inovasi as $data)
                <div class="w-50 h-50 mb-4 m-auto" style="">
                    <img src="{{$data['poster_url']}}" class="rounded" alt="" width="100%" height="100%">
                </div>
                <div>
                    <h2>{{$data['nama']}}</h2>
                </div>
                <div class="mb-2">
                    <div style="display: inline-block; margin-right:4px;">
                        {{$data['tgl_upload']}}
                    </div>
                    <div style="display: inline-block;">
                        @foreach ($opd as $opd)
                        @if ($opd['id'] == $data['id_opd'])
                        {{$opd['nama_opd']}}
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="text-justify">
                    {!! $data['deskripsi'] !!}
                </div>
                <div class="mt-5">
                    <div style="display: inline-block;">
                        <?php $doc = "#"; ?>
                        @foreach ($dokumen as $dokumen)
                        <?php
                        if ($dokumen['id_inovasi'] == $data['id']) {
                            $doc = $dokumen['file_url'];
                        }
                        ?>
                        @endforeach
                        <a href="{{url($doc)}}"><img src="https://cdn.pixabay.com/photo/2017/03/08/21/19/file-2127825_960_720.png" class="rounded" alt="" width="30px" height="30px"></a>
                    </div>
                    <div style="display: inline-block; margin-left:5px;">
                        <a href="{{url($doc)}}">Lihat Dokumen</a>
                    </div>
                </div>
                <div class="mt-4">
                    <div>
                        <form style="display: inline;" action="/inovasi/kategori" id="link_umum" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="jenis" value="1">
                            <input type="hidden" name="id_kategori" value="{{$id_umum}}">
                            <a class="link-primary" style="cursor: pointer;" onclick="document.getElementById('link_umum').submit();" name="submit">
                                #{{$umum}}
                            </a>
                        </form>
                    </div>
                    <div>
                        <form style="display: inline;" action="/inovasi/kategori" id="link_esmart" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="jenis" value="2">
                            <input type="hidden" name="id_kategori" value="{{$id_smart}}">
                            <a class="link-primary" style="cursor: pointer;" onclick="document.getElementById('link_esmart').submit();" name="submit">
                                #{{$smart}}
                            </a>
                        </form>
                    </div>
                    <div>
                        <form style="display: inline;" action="/inovasi/kategori" id="link_layanan" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="jenis" value="3">
                            <input type="hidden" name="id_kategori" value="{{$id_layanan}}">
                            <a class="link-primary" style="cursor: pointer;" onclick="document.getElementById('link_layanan').submit();" name="submit">
                                #{{$layanan}}
                            </a>
                        </form>
                    </div>
                </div>
                <div class="mt-4">
                    <p>Dibuat oleh :
                        @foreach ($dev as $dev)
                        @if ($dev['id'] == $data['id_dev'])
                        {{$dev['nama_dev']}}
                        @endif
                        @endforeach
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row " style="padding-bottom:20px;">
        <div class="col-lg-12 d-flex justify-content-center">
            <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <!-- <h6>---</h6> -->
                <h4 style="text-align:center;">Artikel <em>Terkait</em><br>{{$judul}}</h4>
                <div class="line-dec m-auto"></div>
            </div>
            <!-- <h6>Our Portofolio</h6> -->
        </div>
    </div>

    <div class="row">
        @if ($jenis == 2)
        <?php
        foreach ($terkait as $tr) {
            foreach ($inovasi as $data) {
                if ($data['id'] == $tr['id_inovasi']) {
        ?>
                    <div class="col-lg-3">
                        <div class="card mb-4" style="border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <form action="/inovasi/read/{{$data['nama']}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="hidden" name="jenis" value="{{$jenis}}">
                                    <input type="hidden" name="id_jenis" value="{{$id_jenis}}">
                                    <input type="hidden" name="id_inovasi" value="{{$data['id']}}">
                                    <button class="" style="border:none; background:none; border-top-left-radius:15px; border-top-right-radius:15px;" type="submit" name="submit">
                                        <img class="card-img-top" src="{{$data['poster_url']}}" alt="..." style="border-top-left-radius:15px; border-top-right-radius:15px;" />
                                    </button>
                                </div>
                            </form>
                            <div class="card-body">
                                <div class="small text-muted">{{$data['tgl_upload']}}</div>
                                <h2 class="card-title h4">{{ Str::limit($data['nama'], 10, '...') }}</h2>
                                <p class="card-text">
                                    {!! Str::limit($data['deskripsi'], 80, '...') !!}
                                </p>
                                <form action="/inovasi/read/{{$data['nama']}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="hidden" name="jenis" value="{{$jenis}}">
                                        <input type="hidden" name="id_jenis" value="{{$id_jenis}}">
                                        <input type="hidden" name="id_inovasi" value="{{$data['id']}}">
                                        <button class="btn btn-primary w-100 mt-2 rounded" type="submit" name="submit">
                                            Selengkapnya →
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
        <?php
                }
            }
        }
        ?>
        @else
        @foreach ($terkait as $data)
        <div class="col-lg-3">
            <div class="card mb-4" style="border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <form action="/inovasi/read/{{$data['nama']}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="hidden" name="jenis" value="{{$jenis}}">
                        <input type="hidden" name="id_jenis" value="{{$id_jenis}}">
                        <input type="hidden" name="id_inovasi" value="{{$data['id']}}">
                        <button class="" style="border:none; background:none; border-top-left-radius:15px; border-top-right-radius:15px;" type="submit" name="submit">
                            <img class="card-img-top" src="{{$data['poster_url']}}" alt="..." style="border-top-left-radius:15px; border-top-right-radius:15px;" />
                        </button>
                    </div>
                </form>
                <div class="card-body">
                    <div class="small text-muted">{{$data['tgl_upload']}}</div>
                    <h2 class="card-title h4">{{ Str::limit($data['nama'], 10, '...') }}</h2>
                    <p class="card-text">
                        {!! Str::limit($data['deskripsi'], 80, '...') !!}
                    </p>
                    <form action="/inovasi/read/{{$data['nama']}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="hidden" name="jenis" value="{{$jenis}}">
                            <input type="hidden" name="id_jenis" value="{{$id_jenis}}">
                            <input type="hidden" name="id_inovasi" value="{{$data['id']}}">
                            <button class="btn btn-primary w-100 mt-2 rounded" type="submit" name="submit">
                                Selengkapnya →
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>

</div>
<!-- {{-- @include('../template2/footer') --}} -->

</body>
@include('template2/footer')

</html>