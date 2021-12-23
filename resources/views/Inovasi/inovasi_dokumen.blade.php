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
            if ($jenis == 1) {
                foreach ($ku as $ku) {
                    if ($ku['id'] == $id_jenis) {
                        echo $ku['kategori'];
                    }
                }
            } else if ($jenis == 2) {
                foreach ($ks as $ks) {
                    if ($ks['id'] == $id_jenis) {
                        echo $ks['element'];
                    }
                }
            } else if ($jenis == 3) {
                if ($id_jenis == 1) {
                    echo "Layanan Administrasi Pemerintah";
                } else {
                    echo "Layanan Publik";
                }
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
                    <img src="{{Storgae::url($data['poster_path'])}}" class="rounded" alt="" width="100%" height="100%">
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