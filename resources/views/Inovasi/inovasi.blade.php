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
        /* .active:hover {
            content: '';
        } */
        .kard:hover {
            background-color: rgba(57, 192, 237, 0.3);
            color: white;
            transform: scale(1.1);
        }
        button .kard .smart:active {
            background-color: rgba(57, 192, 237, 0.3);
            color: white;
            transform: scale(1.1);
        }
        .services ul.nacc li {
            transition: none; 
        }
        li .card{
            display:inline-block!important;
        }
        .services ul.nacc li.active{
            display:inline-block!important;
            text-align: center;
            padding: 50px;
        }
        .services ul.nacc li{
            display:none!important;
        }
        .services .grid .row .kard.active {
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
            background-color: rgba(57, 192, 237, 0.3);
        }
        .kat_um.hover{
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
            /* background-color: rgba(57, 192, 237, 0.3); */ 
            background-color:#189ad3;
            color: white!important;
        }
        .kat_um.active{
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
            /* background-color: rgba(57, 192, 237, 0.3); */ 
            background-color:#189ad3;
            color: white!important;
            transform: scale(1.1);
            /* transition-duration: 0.1s; */
        }
        .kat_um.active button{
            color: white!important;
        }
        .kat_um button:hover{
            color: white!important;
        }
        .crop-thumb
        {
            width: 100%;
            height: 200px;
            object-fit: cover;
            object-position: 50% 50%;
        }

    </style>
</head>

<body>
@include('template2/navbar')
<!-- ======= Breadcrumbs ======= -->

    <div id="services" class="services section">
        <div class="container" style="margin-top:50px;">
            
            <!-- elemen smart -->
            <div class="row" style="margin-bottom: 50px;">
                <div class="col-lg-12">
                    <div class="section-heading wow fadeInDown" style="" data-wow-duration="1s" data-wow-delay="0.5s">
                        <!-- <h6>---</h6> -->
                        <h4>Elemen <em style="color:#189ad3;">Smart City</em></h4>
                        <div class="line-dec" style="background-color:#189ad3;"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="grid" style="box-shadow: 0px 0px 15px rgba(0,0,0,0.1); border-radius:5px; padding-top:50px;padding-bottom:50px;">
                        <div class='' style="text-align: center;">
                            <?php $i=0; $ganti=0;?>
                            @foreach ($esmart as $data)
                                <li class="" id="smart_1" style="display:inline-block;">
                                <button onclick="urus('urusan', <?php echo $ganti; ?>); return false;" class='kard smart btn' style="margin: 10px; width:150px; border:none; border-radius:10px;">
                                    <div class='w-100 h-100' style="display:inline-block; padding:10px;">
                                        <div class='' style="width:100%">
                                            <img src="{{$data['icon']}}" class="card-img-top" alt="">
                                        </div>
                                        <div class='' style="width:100%; line-height 1.5em; height: 3em; margin-top:10px;">
                                            {{$data['element']}}
                                        </div>
                                    </div>
                                </button>
                                </li>
                            <?php $i++; ?>
                            <?php $ganti++;?>
                            @endforeach
                        </div>                       
                        
                        @foreach ($esmart as $data) 
                        <div class="col-lg-12 urusan " style="display:none;">
                            <div class='' style="margin-bottom:20px; text-align:center; margin-top:20px;">
                                <h3>URUSAN</h3>
                            </div>     
                            <div class="naccs">
                                
                                <?php $saring = App\Http\Controllers\Inovasi\InovasiController::saring($data['id']);?>
                                <div class="menu" id="kat_um">
                                        @foreach ($ku as $ku0)
                                        <?php foreach ($saring as $s_ku)
                                            {
                                                if ($ku0['id'] == $s_ku['id_ku']){
                                                    ?>
                                                    <div class="kard kat_um" style="width:fit-content! important; display:inline-block; border-radius:5px; margin: 0px 10px 0px 10px;">
                                                        <button  class="btn" style="border: 1px solid rgba(57, 192, 237, 1); color: #145A32; box-shadow: none !important; text-decoration: none;" type="submit" name="submit">
                                                            {{$ku0['kategori']}}
                                                        </button>
                                                    </div>
                                                    
                                        <?php
                                                    break 1;
                                                }
                                            }
                                            ?>
                                        @endforeach
                                </div>

                                <ul class="nacc" style="">
                                    <?php $i=0; $jenis=2;?>
                                    @foreach ($ku as $ku1)
                                        <?php $id_jenis = "";?>
                                        <?php if ($i==0){ ?>
                                            <?php $k=1; ?>
                                            <li class="active" style="border-radius:none; box-shadow:none;">
                                                <div>
                                                @foreach ($saring as $s_ino)
                                                    <?php $inov = App\Http\Controllers\Inovasi\InovasiController::ino1($s_ino['id_inovasi'], $ku1['id']);?>    
                                                        @foreach ($inov as $data1)
                                                        @if ($k <= 8)
                                                        <div class="card" style="width:200px; margin: 5px 5px 10px 5px; border-radius:15px;">
                                                            <form action="/inovasi/read/{{$data1['nama']}}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="input-group mb-3">
                                                                    <input type="hidden" name="jenis" value="{{$jenis}}">
                                                                    <input type="hidden" name="id_inovasi" value="{{$data1['id']}}">
                                                                    <button class="w-100" style="border:none; background:none; border-top-left-radius:15px; border-top-right-radius:15px;" type="submit" name="submit">
                                                                        <img class="card-img-top crop-thumb" src="{{$data1['poster_path']}}" alt="..."  style="height:200px; width:100%; border-top-left-radius:15px; border-top-right-radius:15px;"/>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                            <div class='' style="padding:10px; line-height:1.5em; height:4.5em">
                                                                <div style="font-weight:400;">
                                                                    {{ Str::limit(
                                                                        $data1['nama']
                                                                        , 35, '...')
                                                                    }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php $k++; ?>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                                </div>
                                                <div style="margin-top:50px;">
                                                    <a href="/inovasi/kategori/{{$data['id']}}/{{$ku1['id']}}">
                                                    <button class="btn align-baseline" style="padding-top:10px; padding-bottom: 10px; color: white; width: 100%; background-color:#189ad3;" type="submit" name="submit">
                                                    Jelajahi {{$data['element']}} urusan {{$ku1['kategori']}}
                                                    </button>
                                                    </a>
                                                <div>
                                            </li>
                                        <?php } else { ?>
                                            <li class="" style="border-radius:none; box-shadow:none;">
                                                <div>
                                                @foreach ($saring as $s_ino)
                                                    <?php $inov = App\Http\Controllers\Inovasi\InovasiController::ino1($s_ino['id_inovasi'], $ku1['id']);?>    
                                                        @foreach ($inov as $data1)
                                                        @if ($k <= 8)
                                                        <div class="card" style="width:200px; margin: 5px 5px 10px 5px; border-radius:15px;">
                                                            <form action="/inovasi/read/{{$data1['nama']}}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="input-group mb-3">
                                                                    <input type="hidden" name="jenis" value="{{$jenis}}">
                                                                    <input type="hidden" name="id_inovasi" value="{{$data1['id']}}">
                                                                    <button class="w-100" style="border:none; background:none; border-top-left-radius:15px; border-top-right-radius:15px;" type="submit" name="submit">
                                                                        <img class="card-img-top crop-thumb" src="{{$data1['poster_path']}}" alt="..."  style="height:200px; width:100%; border-top-left-radius:15px; border-top-right-radius:15px;"/>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                            <div class='' style="padding:10px; line-height:1.5em; height:4.5em">
                                                                <div style="font-weight:400;">
                                                                    {{ Str::limit(
                                                                        $data1['nama']
                                                                        , 35, '...')
                                                                    }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php $k++; ?>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                                </div>
                                                <div style="margin-top:50px;">
                                                <form action="/inovasi/kategori/{{$data['id_esmart']}}/{{$ku1['id']}}" style="display: inline; padding: 0; margin:none;" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                        <button class="btn align-baseline" style="padding-top:10px; padding-bottom: 10px; color: white; width: 100%; background-color:#189ad3;" type="submit" name="submit">
                                                        Jelajahi {{$data['element']}} urusan {{$ku1['kategori']}}
                                                        </button>
                                                </form>
                                                <div>
                                            </li>
                                        <?php }?>
                                        <?php $i++;?>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @endsection --}}

    @include('template2/footer')
</body>
    <script>
        function urus(divClass, no)
        {
            var els = document.getElementsByClassName(divClass);
            for(var i = 0; i < els.length; i++)
            {
                if (i == no){
                    els[no].style.display = "inline-block";
                }
                else{
                    els[i].style.display = "none";
                }
            }
        }

        // $('.carousel').carousel()
        
        // var btns_container_0 = document.getElementsById("smart_1");
        // var btns = btns_container_0.getElementsByClassName("smart");
        // for (var i = 0; i < btns.length; i++) {
        //     btns[i].addEventListener("click", function() {
        //         var current = btns_container_0.getElementsByClassName("active");
        //         current[i].className = current[i].className.replace(" active", "");
        //         this.className += " active";
        //     });
        // }

        // function aktif()
        // {
        //     $('button .smart').click(function(){
        //         $(this).siblings().removeClass("active");
        //         $(this).addClass("active");
        //     });
        // }

    </script>
    
</html>
