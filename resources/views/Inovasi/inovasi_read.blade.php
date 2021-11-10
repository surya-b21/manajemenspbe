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
            <a href="{{url($kategori)}}">  
                <?php 
                    foreach ($inovasi as $data){
                        foreach ($ku as $ku){
                            if ($ku['id'] == $data['id_ku']){
                                $umum = $ku['kategori'];
                                $id_umum = $ku['id'];
                            }
                        }
                        foreach ($ks as $ks){
                            if ($ks['id'] == $data['id_smart']){
                                $smart = $ks['element'];
                                $id_smart = $ks['id'];
                            }
                        }
                        if ($data['id_layanan'] == 1){
                            $layanan = "Layanan Administrasi Pemerintah";
                            $id_layanan = 1;
                        }
                        else {
                            $layanan = "Layanan Publik";
                            $id_layanan = 2;
                        }
                    }

                    if ($jenis == 1){
                        echo $umum;
                    }
                    else if ($jenis == 2){
                        echo $smart;
                    }
                    else if ($jenis == 3){
                        echo $layanan;
                    }
                ?>
            </a> >
            @foreach ($inovasi as $data)
            <a href="{{url($self_url)}}">{{$data['nama']}}</a>
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
                            {{$data['deskripsi']}}
                        </div>
                        <div class="mt-5">
                            <div style="display: inline-block;">
                                <?php $doc = "#"; ?>
                                @foreach ($dokumen as $dokumen)
                                <?php
                                    if ($dokumen['id_inovasi'] == $data['id']){
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
                                <a href="/inovasi/kategori_umum/{{$id_umum}}">#{{$umum}}</a>
                            </div>
                            <div>
                                <a href="/inovasi/kategori_smart/{{$id_smart}}">#{{$smart}}</a>
                            </div>
                            <div>
                                <a href="/inovasi/kategori_layanan/{{$id_layanan}}">#{{$layanan}}</a>
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

    {{-- @include('../template2/footer') --}}
    
</body>
@include('template2/footer')

</html>