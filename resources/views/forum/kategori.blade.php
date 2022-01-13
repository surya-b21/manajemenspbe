<!doctype html>
<html lang="en">

<head>
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

@if ($kategori->count())

<div class="container" style="padding-bottom:30px; padding-top:100px;">

    <div class="container">
        {{-- <div class="row justify-content-center mb-3 mt-3">
            <div class="col-md-7">
                <form action="/topiks" method="" enctype="multipart/form-data"> @csrf
                    @if (request('kategori'))
                    <input type="hidden" name="kategori" value="{{ request('kategori') }}">
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
        <br>
        <?php for ($i = 0; $i < count($kategori); $i++) { ?>
            <div class="container ml-5">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-book" style="font-size:25px;color:rgba(56, 154, 255, 1);"></i>
                        <b> <?= $kategori[$i]['kategori']; ?></b>
                    </div>
                    <?php for ($j = 0; $j < count($kategori[$i]['children']); $j++) { ?>
                        <div class="card-body">
                            <i class="fa fa-send" style="font-size:14px;color:rgba(56, 154, 255, 1);"></i>
                            <span class="card-title">
                                <a href="{{url('/forum/'.$kategori[$i]['children'][$j]['id'])}}">
                                    <b> <?= $kategori[$i]['children'][$j]['kategori'];
                                        ?></b>
                                </a>
                            </span>
                            <br>

                            <?php
                            for ($a = 0; $a < count($penulis); $a++) {
                                // echo $penulis[$i]["id"];
                                if ($penulis[$a]["id"] == $kategori[$i]['children'][$j]['create_by']) {

                            ?>
                                    <?php if ($kategori[$i]['children'][$j]['create_by'] != null) { ?>
                                        <span class="badge rounded-pill bg-light " style="font-size:12px;color:grey">
                                            <i class="fa fa-user" style="font-size:10px;color:palevioletred"></i>
                                            <?= $penulis[$a]["name"]; ?></span>
                                    <?php }
                                }
                                if ($kategori[$i]['children'][$j]['create_by'] = null) { ?>
                                    <span class="badge rounded-pill bg-light" style="font-size:12px;color:grey">
                                        <i class="fa fa-user" style="font-size:10px;color:palevioletred"></i>
                                        null</span>
                            <?php }
                            }
                            ?>
                            <span class="badge rounded-pill bg-light" style="font-size:12px;color:grey">
                                <i class="fa fa-calendar" style="font-size:10px; color:coral"></i>
                                {{ $kategori[$i]['children'][$j]['created_at']->isoFormat('DD MMMM YYYY');
                                }}</span>
                            <?php
                            $jumlahpost = 0;
                            for ($b = 0; $b < count($jumlahtopik); $b++) {
                                if ($jumlahtopik[$b]['id_kf'] == $kategori[$i]['children'][$j]['id']) {
                                    $jumlahpost++;
                                }
                            } ?>
                            <span class="badge rounded-pill bg-light" style="font-size:12px;color:grey">
                                <i class="fa fa-book" style="font-size:10px; color:goldenrod"></i>
                                <?= $jumlahpost;
                                ?> topik</span><?php
                                                ?>
                            <hr style="color:rgba(56, 154, 255, 1);">
                            <!-- <p class="card-text"></p> -->
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    <?php } ?>
                </div>
            </div>
            <br />

        <?php } ?>

        @else
        <p class="text-center fs-4">No post found.</p>
        @endif
    </div>
</div>

</body>
@include('template2/footer')

</html>