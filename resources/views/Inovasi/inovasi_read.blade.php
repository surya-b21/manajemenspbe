<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="">

    <!-- <title>Hello, world!</title> -->
    <link rel="stylesheet" href="{{asset('template2/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('template2/assets/css/templatemo-digimedia-v1.css')}}">
    <link rel="stylesheet" href="{{asset('template2/assets/css/animated.css')}}">
    <link rel=" stylesheet" href="{{asset('template2/assets/css/owl.css')}}">
    <style>
        .crop-thumb
        {
            width: 100%;
            height: 150px;
            object-fit: cover;
            object-position: 50% 50%;
        }
    </style>
</head>

<body>
@include('template2/navbar')
    <!-- ======= Breadcrumbs ======= -->
    
    <!-- Page content-->
    <!-- <div class="container" > -->
        <!-- Page header with logo and tagline-->
        <div class="row" style="width:100%; height:100%;">
        <div class="col-lg-3" style="padding-top:99px;">
            <div class="card mb-4 " style=" height:100%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="m-5">
                    <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4 style="text-align:center; font-size:24pt;">Smart <em style="color: #189ad3;">City</em><br></h4>
                    </div>
                    @foreach ($esmart_all as $esmart2)
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

        <div class='col-lg-1' style="width:5%;"></div>
        
        <div class="col-lg-8" style="padding-top:150px;">
            <div class="row " style="padding-bottom:50px;">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div style="text-align:center; font-size:24pt;">
                                @foreach ($esmart as $judul)
                                {{$judul['element']}}
                                @endforeach
                            </div>
                            <div style="text-align:center; font-size:18pt;">
                                Urusan : 
                                @foreach ($kat as $urusan)
                                    {{$urusan['kategori']}}
                                @endforeach
                            </div>
                            <div class="line-dec m-auto" style=" background-color:#189ad3; margin-top:10px!important;"></div>
                        </div>
                    </div>
            </div>
            
            <div class="row justify-content-center mb-3 mt-3">
                <div class="col-md-7">
                    <form action="/inovasi/kategori/search/{{$id_smart_0}}/{{$id_ku_0}}" method="get" style="border:none;" enctype="multipart/form-data"> 
                        
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Masukkan keyword pencarian.." name="search" value="{{ request('search') }}">
                            <button class="btn" style=" background-color:#189ad3; color:white;" type="submit" name="submit">Cari</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                    @foreach ($hasil as $ino)
                    <?php foreach ($inovasi as $data) {?>
                        <?php if ($ino['id_inovasi'] == $data['id']) {?>
                        <div class="col-lg-3" style="display:inline-block!important;">
                            <div class="card mb-4" style="border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                <form action="/inovasi/read/{{$data['nama']}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="hidden" name="id_smart" value="{{$id_smart_0}}">
                                        <input type="hidden" name="id_kat_um" value="{{$id_ku_0}}">
                                        <input type="hidden" name="id_inovasi" value="{{$data['id']}}">
                                        <button class="w-100" style="border:none; background:none; border-top-left-radius:15px; border-top-right-radius:15px;" type="submit" name="submit">
                                            <img class="card-img-top crop-thumb" src="{{$data['poster_path']}}" alt="..."  style="border-top-left-radius:15px; border-top-right-radius:15px;"/>
                                        </button>
                                    </div>
                                </form>
                                <div class="card-body">
                                    <div class="small text-muted">{{$data['tgl_upload']}}</div>
                                    <h2 class="card-title h4">{{ Str::limit($data['nama'], 10, '...') }}</h2>
                                    <form action="/inovasi/read/{{$data['nama']}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <input type="hidden" name="id_smart" value="{{$id_smart_0}}">
                                            <input type="hidden" name="id_kat_um" value="{{$id_ku_0}}">
                                            <input type="hidden" name="id_inovasi" value="{{$data['id']}}">
                                            <button class="btn w-100 mt-2 rounded" style=" background-color:#189ad3; color:white;" type="submit" name="submit">
                                                Selengkapnya →
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php } ?>
                    @endforeach
            </div>
            <!-- Pagination-->
            <nav aria-label="Pagination">
                <hr class="my-0" />
                <ul class="pagination justify-content-center my-4">
                    {{ $hasil->appends($_GET)->links()}}
                </ul>
            </nav>
        </div>
        </div>
    <!-- </div> -->
    


    <!-- Footer-->
    {{-- @endsection --}}
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
