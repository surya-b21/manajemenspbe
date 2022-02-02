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

{{-- @if ($tampil->count()) --}}

<div class="container" style="padding-bottom:0px; padding-top:150px;">
    {{-- <h1 class="mb-3"> Topik tentang {{ $tampil['kf']->kategori }} </h1> --}}

    <div class="row justify-content-center mb-1 mt-3">
        <div class="col-md-7">
            <form action="/topiks" method="" enctype="multipart/form-data"> @csrf
                @if (request('kategori'))
                <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan keyword pencarian.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit" name="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>

    <div class="row">
        <div class="col-lg-3 mb-3 mt-3">
            <?php for ($i = 0; $i < count($kategori); $i++) { ?>
                {{-- <div class="container ml-5"> --}}
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-book" style="font-size:25px;color:rgba(56, 154, 255, 1);"></i>
                        <b> <?= $kategori[$i]['kategori']; ?></b>
                    </div>
                    <?php for ($j = 0; $j < count($kategori[$i]['children']); $j++) { ?>
                        <div class="card-body">
                            <i class="fa fa-send" style="font-size:14px;color:rgba(56, 154, 255, 1);"></i>
                            <span class="card-text">
                                <small>
                                    <a href="{{url('/forum/'.encrypt($kategori[$i]['children'][$j]['id']))}}">
                                        <?= $kategori[$i]['children'][$j]['kategori']; ?>
                                    </a>
                                    <?php
                                    $jumlahpost = 0;
                                    for ($b = 0; $b < count($tampil['jumlahtopik']); $b++) {
                                        if ($tampil['jumlahtopik'][$b]['id_kf'] == $kategori[$i]['children'][$j]['id']) {
                                            $jumlahpost++;
                                        }
                                    } ?>
                                    <span class="" style="font-size:12px;color:grey">
                                        (<?= $jumlahpost; ?>)</span>
                                </small>
                            </span>
                        </div>
                    <?php } ?>
                </div>
                {{-- </div> --}}
                <br />
            <?php } ?>
            <small><a href="/topiks" class="btn btn-dark">Semua topik</a></small>
        </div>

        {{-- topik konten --}}
        <div class="col-lg-9 mb-3 mt-3">
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
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 mt-3 mb-3">
                                <img src="{{Storage::url($tampil['t']->foto_path)}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">
                                        <a href="{{url('/topik/'.encrypt($tampil['t']->id))}}">
                                            <h5 class="card-title">
                                                <i class="fa fa-send" style="font-size:14px; color:blue"></i>
                                                {{$tampil['t']->judul}}
                                                <input name="idtopik" type="hidden" class="form-control" value="<?= $tampil['t']['id'] ?>">
                                            </h5>
                                        </a>

                                        <small>{!! Str::limit($tampil['t']->isi, 100, '...') !!}
                                            <a href="{{url('/topik/'.encrypt($tampil['t']->id))}}">Selengkapnya</a>
                                        </small>
                                        <br>
                                        <span class="badge rounded-pill bg-light" style="font-size:11px;color:grey">
                                            <i class="fa fa-calendar" style="font-size:10px; color:coral"></i>
                                            {{ $tampil['t']->created_at->isoFormat('DD MMMM YYYY') }}</span>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
            <?php } ?>
            @endforeach
            @endforeach

        </div>
        {{-- </div> --}}
    </div>


    {{-- @else
    <p class="text-center fs-4">No post found.</p>
@endif --}}
    <nav aria-label="Pagination">
        <hr class="my-0" />
        <ul class="pagination justify-content-center my-4">
            {{ $tampil['topik']->links()}}
        </ul>
    </nav>

</div>
</div>
</div>
</div>
</body>

<footer>
    @include('template2/footer')
</footer>

</html>