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
<?php

use Hamcrest\Core\HasToString;

$tahun = ["2015", "2016", "2017", "2018", "2019", "2020", "2021", "2022"]; ?>


<div class="container" style="padding-bottom:0px; padding-top:150px;">
    <div class="row">
        <div class="col-lg-3 mb-3 mt-5">
            <h5>
                <i class="fa fa-book" style="font-size:25px;color:rgba(56, 154, 255, 1);"></i>
                <?php
                for ($c = 0; $c < count($smart); $c++) {
                    if ($smart[$c]->id == $idsmart) {
                        echo $smart[$c]->element;
                    }
                }
                ?>
                <br />
            </h5>
        </div>
        <div class="row">
            <div class="col-lg-2 mb-3 mt-4">
                {{-- <div class="container ml-5"> --}}
                <?php
                for ($c = 0; $c < count($smart); $c++) {
                    if ($smart[$c]->id == $idsmart) {

                        for ($d = count($tahun) - 1; $d >= 0; $d--) {
                ?>
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-book" style="font-size:25px;color:rgba(56, 154, 255, 1);"></i>
                                    <a href="{{url('/inov/isismart/'.$smart[$c]->id.'/'.$tahun[$d])}}"><b> <?= $tahun[$d] ?></b></a>
                                </div>

                            </div>
                <?php }
                    }
                }
                ?>
                {{-- </div> --}}
                <br />
                <small><a href="/inov" class="btn btn-dark">Semua Inovasi</a></small>
            </div>

            {{-- topik konten --}}
            <div class="col-lg-9 mb-3 mt-3">
                <!-- <h5>
                <i class="fa fa-book" style="font-size:25px;color:rgba(56, 154, 255, 1);"></i>
                n
            </h5> -->

                <br />
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php
                    for ($c = 0; $c < count($smart); $c++) {
                        if ($smart[$c]->id == $idsmart) {
                            // echo "id smart : " . $smart[$c]->id . "<br>";
                            for ($d = 0; $d < count($urusan); $d++) {
                                if ($urusan[$d]->id_smart == $smart[$c]->id) {
                                    // echo "id kategori : " . $urusan[$d]->id . " : " . $urusan[$d]->kategori . "<br>";
                                    for ($e = 0; $e < count($inovasi); $e++) {
                                        if ($inovasi[$e]->id_ku ==  $urusan[$d]->id) {
                                            // echo  $urusan[$d]->kategori . " : " . $inovasi[$e]->id . " : " . $inovasi[$e]->nama . "<br>";
                    ?>
                                            <?php $tahunsesuai = substr($inovasi[$e]->created_at, 0, 4);
                                            ?>
                                            <div class="list-group">
                                                <?php if (substr($inovasi[$e]->tgl_launching, 0, 4) == $tahunpilih) { ?>
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title"><?= $inovasi[$e]->nama ?></h5>
                                                            <span class="badge rounded-pill bg-info text-dark"><?= $smart[$c]->element ?></span>
                                                            <span class="badge rounded-pill bg-info text-dark"><?= substr($urusan[$d]->kategori, 0, 30)  ?></span>
                                                            <p class="card-text"><?= substr($inovasi[$e]->deskripsi, 0, 50) . "..." ?></p>
                                                        </div>
                                                        <div class="card-footer">
                                                            <a href="{{url('/inov/konten/'.$inovasi[$e]->id)}}"><small class="text-muted">Selengkapnya</small></a>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>

                    <?php
                                        }
                                    }
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br />
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