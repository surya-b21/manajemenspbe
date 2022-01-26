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

<div class="container" style="padding-bottom:25px; padding-top:150px;">
    <div>
        {{-- <p> --}}
        <a href="/home" style=""> Home</a> > <a href="/inov" style="">Inovasi</a> >
        {{-- </p> --}}
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-8">

            <div class="card shadow p-3 mb-4" style="border-radius:10px; ">
                <div class="justify-content-center mt-6 p-5 mb-5">
                    <!-- <div class=" card mb-3">
                <div class="card-body"> -->
                    @foreach ($inovasi as $t)
                    {{-- <h2 class="card-title"> --}}
                    <div class="mx-auto text-center">
                        <figure class="figure mt-6 mb-3">
                            {{-- <img src="{{Storage::url($t->poster_path)}}" alt=""> --}}
                            <img src="{{Storage::url($t->poster_path)}}" class="figure-img rounded text-center" alt="" width="600" height="300">
                        </figure>
                    </div>
                    <?php for ($b = 0; $b < count($joinUrusan); $b++) { ?>
                        <?php if ($joinUrusan[$b]->id_ku == $t->id_ku) { ?>
                            <span class="badge rounded-pill bg-info text-dark"><?= $joinUrusan[$b]->element ?></span>
                            <span class="badge rounded-pill bg-info text-dark"><?= $joinUrusan[$b]->kategori ?></span><br />
                        <?php } ?>
                    <?php } ?>
                    <span style="font-size:28px;">
                        <b>{{$t->nama}}</b>
                    </span>
                    {{-- </h2> --}}
                    <br>
                    <?php
                    for ($a = 0; $a < count($user); $a++) {
                        // echo $penulis[$i]["id"];
                        if ($user[$a]["id"] == $t->id_user) {

                    ?>
                            <span class="badge rounded-pill bg-light " style="font-size:12px;color:grey">
                                <i class="fa fa-user" style="font-size:10px;color:palevioletred"></i>
                                <?= $user[$a]["name"]; ?></span>
                    <?php
                        }
                    }
                    ?>
                    <span class="badge rounded-pill bg-light" style="font-size:12px;color:grey">
                        <i class="fa fa-calendar" style="font-size:10px; color:coral"></i>
                        {{ $t->tgl_launching }}</span>
                    <span class="badge rounded-pill bg-light" style="font-size:12px;color:grey"></span>
                    <p class=""> {{$t->deskripsi}}</p>


                    @foreach ($dokumen as $d)
                    <?php
                    $doc = $d->file_path; ?>
                    <a href="{{Storage::url($doc)}}"><?= $d->judul ?></a><br />
                    @endforeach
                    <br />
                    <div class="row row-cols-1 row-cols-md-3 g-4">

                        @foreach ($versi as $v)
                        <?php
                        $doc = $v->namaversi; ?><br />
                        <div class="col">
                            <div class="card shadow-sm  h-100 text-dark bg-light ">
                                <!-- <img src="{{Storage::url($t->poster_path)}}" class="card-img-top" alt="..."> -->
                                <div class="card-body">
                                    <h5 class="card-title"><?= $doc ?></h5>
                                    <p class="card-text"><?= ($v->tgl_versi)  ?></p>
                                    <p class="card-text"><?= $v->deskripsiversi ?></p>
                                    <p class="card-text">Developer : <?= $v->nama_dev ?></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
        <div class="col-4 p-9">
            <div class="card shadow p-3">
                <div class="card-body">
                    <!-- <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                    <!-- <h5 class="card-title">Search</h5> -->
                    <br />
                    <h6 class="card-subtitle mb-2 text-muted">Smart City</h6>
                    <div class="accordion-flush" id="accordionPanelsStayOpenExample">
                        <?php $i = "B" ?>
                        @foreach($smart as $s)
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="list-group list-group-flush accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="<?= "#" . $i . $s->id ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <?= $s->element; ?>
                                    </button>
                                </h2>
                                <div id="<?= $i . $s->id ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <ul class="list-group list-group-flush">
                                        @foreach($joinUrusan as $j)
                                        <?php if ($j->element == $s->element) { ?>
                                            <div class="accordion-body">
                                                <li><a href="{{url('/inov/urusan/'.$j->id_ku)}}"><?= $j->kategori ?></a>
                                                </li>
                                            </div>
                                        <?php } ?>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>

                </div>
            </div>

        </div><!-- End sidebar recent posts-->
    </div>

    @endforeach
</div>
</div>

</div>
</section><!-- End Blog Single Section -->
</div>
</div>
<!-- End blog comments -->
</div>
</body>
<footer>
    @include('template2/footer')
</footer>

</html>