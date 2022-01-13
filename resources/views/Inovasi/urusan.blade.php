<!doctype html>
<html lang="en">

<head>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
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
    {{-- <h1 class="mb-3"> Inovasi tentang {{ $tampil['kf']->elemen }} </h1> --}}

    <!-- <div class="row justify-content-center mb-1 mt-3">
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
    </div> -->
    <br>
    <br>
    <div class="row">
        <div class="col-lg-3 mb-3 mt-3">
            <h5>
                <i class="fa fa-book" style="font-size:25px;color:rgba(56, 154, 255, 1);"></i>
                <?php
                for ($x = 0; $x < count($urusan); $x++)
                    if ($urusan[$x]->idku == $id_urusan) {
                        echo $urusan[$x]->kategori . "<br>";
                    }
                ?>
            </h5>
        </div>
    </div>
    <br />

    <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php
        for ($d = 0; $d < count($inoSmart); $d++) {
            if (($inoSmart[$d]->idku) == $id_urusan) {
        ?>
                <div class="col">
                    <div class="card h-70">

                        <div class="bg-image hover-zoom">
                            <img src="{{Storage::url($inoSmart[$d]->poster_path)}}" class="w-100" alt="<?= $inoSmart[$d]->poster_path ?>">
                        </div>
                        <div class=" card-body">
                            <?php for ($e = 0; $e < count($inoSmart); $e++) {
                                if ($inoSmart[$e]->id_ino == $inovasi[$d]->id) {
                            ?>
                                    <span class="badge rounded-pill bg-info text-dark"><?= $inoSmart[$e]->kategori ?></span>
                                <?php } ?>
                            <?php
                            } ?>
                            <h5 class="card-title"><?= $inoSmart[$d]->nama ?></h5>
                            <p class="card-text"><?= substr($inoSmart[$d]->deskripsi, 0, 50) . "..." ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="{{url('/inov/konten/'.$inoSmart[$d]->id)}}"><small class="text-muted">Selengkapnya</small></a>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>

    <br />
    {{$inovasi->links()}}
    <br />
    <small><a href="/inov" class="btn btn-dark">Semua Inovasi</a></small>
    {{-- topik konten --}}
    <div class="col-lg-9 mb-3 mt-3">
        <br />
    </div>
    {{-- </div> --}}
</div>


{{-- @else
    <p class="text-center fs-4">No post found.</p>
@endif --}}
<nav aria-label="Pagination">
    <hr class="my-0" />
    <ul class="pagination justify-content-center my-4">

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