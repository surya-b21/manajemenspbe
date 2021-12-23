{{-- @include('.../template2/main')

<body style="background-image:url('{{asset('template2/assets/images/slider-right-dec.jpg')}}')">
<!-- Responsive navbar-->
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

<!-- Page content-->
<div class="container">
    <!-- Page header with logo and tagline-->
    <div class="row " style="padding-bottom:50px; padding-top:150px;">
        <div class="col-lg-12 d-flex justify-content-center">
            <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <h4><em>
                        <?php
                        $id_jenis = 1;
                        if ($jenis == "1") {
                            foreach ($kategori as $kategori) {
                                echo $kategori['kategori'];
                                $id_jenis = $kategori['id'];
                            }
                        } else if ($jenis == "2") {
                            $kosong = 1;
                            foreach ($kategori as $kategori) {
                                foreach ($esmart as $e_smart) {
                                    if ($kategori['id_esmart'] == $e_smart['id']) {
                                        $id_jenis = $kategori['id_esmart'];
                                    }
                                }
                                foreach ($inovasi as $ada) {
                                    if ($ada['id'] == $kategori['id_inovasi']) {
                                        $kosong = 0;
                                    }
                                }
                            }
                            foreach ($esmart as $ezmart) {
                                echo $ezmart['element'];
                            }
                        } else if ($jenis == "3") {
                            echo $kategori;
                            $id_jenis = $id_kategori;
                        }
                        ?>
                    </em></h4>
                <div class="line-dec m-auto"></div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-3 mt-3">
        <div class="col-md-7">
            <form action="/inovasi/kategori/search" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <input type="hidden" name="jenis" value="{{$jenis}}">
                    <input type="hidden" name="id_kategori" value="{{$id_jenis}}">
                    <input type="text" class="form-control" placeholder="Masukkan keyword pencarian.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit" name="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        @if ($jenis == "2")
        @if ($kosong == 0)
        @foreach ($inovasi as $data)
        @if ($data['id'] == $kategori['id_inovasi'])
        <div class="col-lg-3">
            <div class="card mb-4" style="border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <form action="/inovasi/read/{{$data['nama']}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="hidden" name="jenis" value="{{$jenis}}">
                        <input type="hidden" name="id_jenis" value="{{$id_jenis}}">
                        <input type="hidden" name="id_inovasi" value="{{$data['id']}}">
                        <button class="" style="border:none; background:none; border-top-left-radius:15px; border-top-right-radius:15px;" type="submit" name="submit">
                            <img class="card-img-top" src="{{Storage::url($data['poster_path'])}}" alt="..." style="border-top-left-radius:15px; border-top-right-radius:15px;" />
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
        <?php $kosong = 1; ?>
        @endif
        @endforeach
        @else
        <div style="text-align:center;">
            <p>Data Tidak Ditemukan</p>
        </div>
        @endif
        @else
        @forelse ($inovasi as $data)
        <div class="col-lg-3">
            <div class="card mb-4" style="border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <form action="/inovasi/read/{{$data['nama']}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="hidden" name="jenis" value="{{$jenis}}">
                        <input type="hidden" name="id_jenis" value="{{$id_jenis}}">
                        <input type="hidden" name="id_inovasi" value="{{$data['id']}}">
                        <button class="" style="border:none; background:none; border-top-left-radius:15px; border-top-right-radius:15px;" type="submit" name="submit">
                            <img class="card-img-top" src="{{Storage::url($data['poster_path'])}}" alt="..." style="border-top-left-radius:15px; border-top-right-radius:15px;" />
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
        @empty
        <div style="text-align:center;">
            <p>Data Tidak Ditemukan</p>
        </div>
        @endforelse
        @endif
    </div>
    <!-- Pagination-->
    <nav aria-label="Pagination">
        <hr class="my-0" />
        <ul class="pagination justify-content-center my-4">
            {{ $inovasi->links()}}
        </ul>
    </nav>
</div>
<!-- Footer-->
{{-- @endsection --}}
@include('template2/footer')

</body>

</html>