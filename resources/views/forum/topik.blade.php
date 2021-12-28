<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Kategori | Topik</title>
</head>
@include('template2/main')
@include('template2/navbar')
<br>
<br>
<br>
<br>
{{-- @if ($tampil->count()) --}}

<div class="container mt-5">

    {{-- <h1 class="mb-3"> Topik tentang {{ $tampil['kf']->katwgori }} </h1> --}}

    {{-- <div class="container"> --}}
    {{-- kalo belum ada isi tabel, navbar nutup konten. semakin banyak jumlah baris tabel, semakin kebawah padding(?) --}}
    <div class="row justify-content-center mb-3 mt-3">
        <div class="col-md-7">
            <form action="/topiks" method="" enctype="multipart/form-data"> @csrf
                {{-- @if (request('kategori'))
                    <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                @endif --}}
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan keyword pencarian.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit" name="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    <br />
    <br />
    <?php
    for ($z = 0; $z < count($tampil['kf']); $z++) {
        if ($tampil['kf'][$z]['id'] == $tampil['id']) { ?>
            <h5>
                <i class="fa fa-book" style="font-size:25px;color:rgba(56, 154, 255, 1);"></i>
                <?= $tampil['kf'][$z]['kategori']; ?>
            </h5>
    <?php
        }
    }
    ?>
    <br />
    @foreach ($tampil['kf'] as $tampil['kf'])
    @foreach ($tampil['topik'] as $tampil['t'])

    <?php if ($tampil['kf']->id == $tampil['t']->id_kf) {
    ?>
        <div class="container">
            <div class="card mb-5">
                <div class="row g-0">
                    <div class="col-md-1 mt-3 mb-3">
                        <img src="{{Storage::url($tampil['t']->foto_path)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="{{url('/topik/'.$tampil['t']->id)}}">
                                    <h5 class="card-title">
                                        <i class="fa fa-send" style="font-size:14px; color:blue"></i>
                                        {{$tampil['t']->judul}}
                                        <input name="idtopik" type="hidden" class="form-control" value="<?= $tampil['t']['id'] ?>">
                                    </h5>
                                </a>

                                <?php
                                for ($a = 0; $a < count($tampil['user']); $a++) {
                                    // echo $penulis[$i]["id"];
                                    if ($tampil['user'][$a]["id"] == $tampil['t']->id_user) {

                                ?>
                                        <span class="badge rounded-pill bg-light " style="font-size:11px;color:grey">
                                            <i class="fa fa-user" style="font-size:10px;color:palevioletred"></i>
                                            <?= $tampil['user'][$a]["name"]; ?></span>
                                <?php
                                    }
                                }
                                ?>
                                <span class="badge rounded-pill bg-light" style="font-size:11px;color:grey">
                                    <i class="fa fa-calendar" style="font-size:10px; color:coral"></i>
                                    {{ $tampil['t']->created_at->isoFormat('DD MMMM YYYY') }}</span>
                                <?php
                                $jumlahpost = 0;
                                for ($b = 0; $b < count($tampil['jumlahkomen']); $b++) {
                                    if ($tampil['jumlahkomen'][$b]['id_topik'] == $tampil['t']->id) {
                                        $jumlahpost++;
                                    }
                                } ?>
                                <span class="badge rounded-pill bg-light" style="font-size:12px;color:grey">
                                    <i class="fa fa-book" style="font-size:10px; color:goldenrod"></i>
                                    <?= $jumlahpost;
                                    ?> komentar</span>
                            </p>

                            <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
    <?php } ?>
    @endforeach
    @endforeach

    <a href="/topiks" class="btn btn-dark">Semua topik</a>
</div>
{{-- </div> --}}
</div>


{{-- @else
    <p class="text-center fs-4">No post found.</p>
@endif --}}
<br>
<br>

</div>
</div>

</body>

<footer>
    @include('template2/footer')
</footer>

</html>