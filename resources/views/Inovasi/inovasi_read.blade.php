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
    
    <div class="container" style="padding-top:150px;">
        <div>
            <a href="{{url($home)}}">Home</a> > <a href="{{url($inov)}}">Inovasi</a>
        </div>
    </div>
    <!-- Page content-->
    <div class="container" style="padding-top:50px;">
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

    @include('../template2/footer')

</body>

</html>