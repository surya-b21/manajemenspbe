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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <title>Hello, world!</title> -->
</head>
@include('template2/main')
@include('template2/navbar')

<!-- ======= Breadcrumbs ======= -->

@if ($smart->count())

<div class="container" style="padding-bottom:30px; padding-top:100px;">

    <div class="container">
        {{-- <div class="row justify-content-center mb-3 mt-3">
            <div class="col-md-7">
                <form action="/topiks" method="" enctype="multipart/form-data"> @csrf
                    @if (request('smart'))
                    <input type="hidden" name="kategori" value="{{ request('smart') }}">
        @endif
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukkan keyword pencarian topik" name="search" value="{{ request('search') }}">
            <button class="btn btn-outline-primary" type="submit" name="submit">Search</button>
        </div>
        </form>
    </div>
</div> --}}

<br>
<br>
<?php
$tahun = ["2015", "2016", "2017", "2018", "2019", "2020", "2021", "2022"];
for ($i = 0; $i < count($tahun); $i++) { ?>
    <!-- <a href="{{url('/inov/tahun/'.$tahun[$i])}}">
        <button type="button" class="btn btn-dark"><?= $tahun[$i] ?></button></a> -->
<?php } ?>
<br /><br />
<!-- <button type="button" class="btn btn-dark">Semua</button> -->
<div class="overflow-auto">
    <?php for ($i = 0; $i < count($smart); $i++) { ?>
        <a href="{{url('/inov/isismart/'.$smart[$i]['id'])}}">
            <button type="button" class="btn btn-dark"><?= $smart[$i]['element'] ?></button>
        </a>
    <?php } ?>
</div>
</a>
<?php for ($i = 0; $i < count($urusan); $i++) {
?>
    <!-- <a href="{{url('/inov/'.$urusan[$i]['id'])}}">
        <button type="button" class="btn btn-dark"><?= $urusan[$i]['kategori'] ?></button>
    </a> -->
<?php
}
$h = "\n\n";
?>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    @foreach ($smart as $j)
    <!-- <li class="nav-item" role="presentation">
        <button class="nav-link" id="1" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><?= $j->element ?></button>
    </li>
    <li class="nav-item" role="presentation">&nbsp
    </li> -->

    @endforeach
    <?php for ($z = 0; $z < count($smart); $z++) { ?>
        <!-- <li class="nav-item" role="presentation">
            <?php $idtab = trim($smart[$z]['id'])
            ?>
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="<?= "#A" . $idtab ?>" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><?= ($smart[$z]['element']) ?></button>
        </li> -->
    <?php } ?>
    <!-- <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
    </li> -->
</ul>
<div class="tab-content" id="pills-tabContent">
    <!-- <div class="tab-pane fade show active" id="1" role="tabpanel" aria-labelledby="1">ha</div> -->
    @foreach($joinUrusan as $j)
    <?php $idtab2 = trim($j->id_smart);
    ?>
    <div class="tab-pane fade" id="<?= "A" . $idtab2 ?>" role="tabpanel" aria-labelledby="pills-profile-tab">
        <button><?= $j->kategori  ?></button>
    </div>
    @endforeach

    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">B</div>

</div>
<br>
<br>
<br>
<div class="row row-cols-1 row-cols-md-4 g-4">
    <?php for ($d = 0; $d < count($inovasi); $d++) { ?>
        <div class="col">
            <div class="card h-70">
                <div class="bg-image hover-zoom">
                    <img src="{{Storage::url($inovasi[$d]->poster_path)}}" class="card-img-top" alt="<?= $inovasi[$d]->poster_path ?>">
                </div>
                <div class="card-body">
                    <?php for ($e = 0; $e < count($inoSmart); $e++) {
                        if ($inoSmart[$e]->id_ino == $inovasi[$d]->id) {
                    ?>
                            <span class="badge rounded-pill bg-info text-dark"><?= $inoSmart[$e]->element ?></span>
                            <span class="badge rounded-pill bg-info text-dark"><?= $inoSmart[$e]->kategori ?></span>
                    <?php }
                    } ?>
                    <h5 class="card-title"><?= $inovasi[$d]->nama ?></h5>
                    <p class="card-text"><?= substr($inovasi[$d]->deskripsi, 0, 50) . "..." ?></p>
                </div>
                <div class="card-footer">
                    <a href="{{url('/inov/konten/'.$inovasi[$d]->id)}}"><small class="text-muted">Selengkapnya</small></a>
                </div>
            </div>
        </div>
    <?php } ?>
</div><br>
{{$inovasi->links()}}
<!-- Tabs content -->
@else
<p class="text-center fs-4">No post found.</p>
@endif
</div>
</div>

</body>
@include('template2/footer')

</html>