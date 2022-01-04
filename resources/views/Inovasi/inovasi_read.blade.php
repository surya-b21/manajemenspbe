<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="">
    </style>
    <!-- <title>Hello, world!</title> -->
    <link rel="stylesheet" href="{{asset('template2/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('template2/assets/css/templatemo-digimedia-v1.css')}}">
    <link rel="stylesheet" href="{{asset('template2/assets/css/animated.css')}}">
    <link rel=" stylesheet" href="{{asset('template2/assets/css/owl.css')}}">
    <style>
    </style>
</head>

<body>
    
@include('template2/navbar')
<!-- ======= Breadcrumbs ======= -->

    <?php 
        $esmart_1 = "";
        $judul = "Kya";
        foreach ($inovasi as $id_ino){
            $id_inovasi = $id_ino['id'];
            $judul = $id_ino['nama'];
        }
    ?>

    <div class="container" style="padding-top:150px;">
        <div>
            <a href="/home" style="color: #189ad3;">Home</a> > <a href="/inovasi" style="color: #189ad3;">Inovasi</a> 
            >
            @foreach ($inovasi as $data_0)
                <a href="#" style="color: #189ad3;"> {{$judul}}</a>
            @endforeach
        </div>
    </div>

    <!-- Page content-->
    <div class="container">
        <div class="row">
            <div class="mt-4 bg-white col-lg-8" style="height:fit-content! important; display:inline-block;padding-top:50px; border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="row" style="margin-top:0px; margin-bottom: 100px;">
                    <div class="" style="height:fit-content;">
                        <div class="m-5">
                            @foreach ($inovasi as $data1)
                                <div class="w-50 h-50 mb-4 m-auto" style="">
                                    <img src="{{$data1['poster_path']}}" class="rounded" alt="" width="100%" height="100%">
                                </div>
                                <div>
                                    <h2>{{$data1['nama']}}</h2>
                                </div>
                                <div class="mb-2">
                                    <div style="display: inline-block; margin-right:4px;">
                                        {{$data1['tgl_upload']}}
                                    </div>
                                    <div style="display: inline-block;">
                                        @foreach ($opd as $opd)
                                        @if ($opd['id'] == $data1['id_opd'])
                                            {{$opd['nama_opd']}}
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="text-justify">
                                    {!! $data1['deskripsi'] !!}
                                </div>
                                <div class="mt-5">
                                    <div style="display: inline-block;">
                                        <?php $doc = "#"; ?>
                                        @foreach ($dokumen as $dokumen)
                                        <?php
                                            if ($dokumen['id_inovasi'] == $data1['id']){
                                                $doc = $dokumen['file_url'];
                                            }
                                        ?>
                                        @endforeach
                                        <a href="{{url($doc)}}"><img src="https://cdn.pixabay.com/photo/2017/03/08/21/19/file-2127825_960_720.png" class="rounded" alt="" width="30px" height="30px"></a>
                                    </div>
                                    <div style="display: inline-block; margin-left:5px;">
                                        <a href="{{url($doc)}}" style="color: #189ad3;">Lihat Dokumen</a>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <p>Dibuat oleh : 
                                    @foreach ($dev as $dev)
                                    @if ($dev['id'] == $data1['id_dev'])
                                        {{$dev['nama_dev']}}
                                    @endif
                                    @endforeach
                                    Dev 1
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4" style="display:inline-block;">
                <div class="card mb-4" style="border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class="m-5">
                        <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4 style="text-align:center; font-size:20pt;">TAG <em style="color: #189ad3;">Inovasi</em><br></h4>
                        </div>
                        
                        @foreach ($esmart as $esmart_tag)
                            @foreach ($ref_tag as $ref_tag1)
                                @if ($esmart_tag['id'] == $ref_tag1['id_esmart'])
                                    <li>
                                        <button class="header btn btn-link " style="color: #189ad3; font-size:14pt; text-align: left; margin: 0; padding:0; box-shadow: none !important; text-decoration: none;" type="button" name="submit">
                                            {{$esmart_tag['element']}}
                                        </button>
                                        <div id="" class="collapse" style="margin-left:15px;">
                                            <ul>
                                            @foreach ($ku as $ku1)
                                                @if ($ku1['id'] == $ref_tag1['id_ku'])
                                                    <li>
                                                        <a href="/inovasi/kategori/{{$esmart_tag['id']}}/{{$ku1['id']}}">
                                                            {{$ku1['kategori']}}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    @break
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>

                <div class="card mb-4" style="border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class="m-5">
                        <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4 style="text-align:center; font-size:20pt;">Smart <em style="color: #189ad3;">City</em><br></h4>
                        </div>
                        @foreach ($esmart as $esmart2)
                            <li>
                                <button class="header btn btn-link " style="color: #189ad3; font-size:14pt; text-align: left; margin: 0; padding:0; box-shadow: none !important; text-decoration: none;" type="button" name="submit">
                                    {{$esmart2['element']}}
                                </button>
                                <div id="" class="collapse" style="margin-left:15px;">
                                    <?php $saring = App\Http\Controllers\Inovasi\InovasiController::saring($esmart2['id']);?>
                                    @foreach ($ku as $ku0)
                                        <?php foreach ($saring as $ks0){ ?>
                                        <?php if ($ks0['id_ku'] == $ku0['id']) { ?>
                                            <ul>
                                                <li>
                                                    <a href="/inovasi/kategori/{{$esmart2['id']}}/{{$ku0['id']}}">
                                                        {{$ku0['kategori']}}
                                                    </a>
                                                </li>
                                            </ul>
                                            <?php break;?>
                                        <?php }
                                            }?>
                                    @endforeach
                                </div>
                            </li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:100px;">
        <div class="row " style="padding-bottom:20px;">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <!-- <h6>---</h6> -->
                    <h4 style="text-align:center;">Artikel Terkait <br> <em style="color: #189ad3;">{{$judul}}</em></h4>
                        <div class="line-dec m-auto" style="background-color: #189ad3;"></div>
                </div>
                <!-- <h6>Our Portofolio</h6> -->
            </div>
        </div>
        <div class="row">
            @foreach ($ref_tag as $reff)
                @foreach ($inovasi as $ino_reff)
                    @if ($reff['id_inovasi'] == $ino_reff['id'])
                        <div class="col-lg-3">
                            <div class="card mb-4" style="border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                <form action="/inovasi/read/#" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <button class="" style="border:none; background:none; border-top-left-radius:15px; border-top-right-radius:15px;" type="submit" name="submit">
                                            <img class="card-img-top" src="{{$ino_reff['poster_path']}}" alt="..."  style="border-top-left-radius:15px; border-top-right-radius:15px;"/>
                                        </button>
                                    </div>
                                </form>
                                <div class="card-body">
                                    <div class="small text-muted">{{$ino_reff['tgl_upload']}}</div>
                                    <h2 class="card-title h4">{{$ino_reff['nama']}}</h2>
                                    <p class="card-text">
                                        {!! Str::limit($ino_reff['deskripsi'], 80, '...') !!}
                                    </p>
                                    <form action="/inovasi/read/#" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <button class="btn w-100 mt-2 rounded" style="background-color: #189ad3; color:white;" type="submit" name="submit">
                                                Selengkapnya →
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>                    
    
    @include('template2/footer')
</body>

<script>
    $(".header").click(function () {

        $header = $(this);
        //getting the next element
        $content = $header.next();
        //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
        $content.slideToggle(500, function () {
            //execute this after slideToggle is done
            //change text of header based on visibility of content div
        });

    });
</script>

</html>
