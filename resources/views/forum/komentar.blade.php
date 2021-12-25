@include('template2/main')
@include('template2/navbar')
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

<body>
    <br />
    <br />
    <br />
    <br />
    <br />
    <div class="container mt-6 shadow-sm p-3 mb-5 bg-body rounded">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- <div class=" card mb-3">
                <div class="card-body"> -->
                <h2 class="entry-title">
                    @foreach ($topik as $t)
                </h2>
                <div class="mx-auto text-center">
                    <figure class="figure">
                        <img src="{{Storage::url($t->foto_path)}}" alt="">
                        {{-- <img src="{{Storage::url($t->foto_path)}}" class="figure-img rounded text-center" alt="<?= $t->foto_path ?>" width="600" height="300"> --}}
                    </figure>
                </div>
                <h2 class="lead">
                    <h2 class="mb-3">{{$t->judul}}</h2>
                </h2>
                <a href="/forum/{{ $t->kategori->id }}" class="text-decoration-none fs-6">{{ $t->kategori->kategori }}, </a>
                {{-- <a href="/forum/{{ $t->kategori->id }}" class="text-decoration-none fs-6">{{ $t->kategori->parent }}, </a> --}}
                {{-- <small class="text-muted">{{ $t->created_at->toDateString() }}</small> --}}
                <small class="text-muted">{{ $t->created_at->isoFormat('DD MMMM YYYY') }}</small>
                <!-- <h5 class="card-title">Card title</h5> -->
                <p class="lead text-dark"> {!! $t->isi !!}</p>
                <a href="/forum" class="btn btn-dark">Kembali ke Forum</a>
            </div>
            @endforeach
        </div>
    </div>
    </div>
    </div>


    <section>
        <div class="container my-5 py-5 text-dark">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="text-dark mb-0">Komentar</h4>
                        <div class="card">
                        </div>
                    </div>
                    <?php
                    if (auth() != null) {
                        $h = auth()->user();
                    }
                    ?>
                    @foreach ($komentar as $k)
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex flex-start">
                                <figure class="figure">
                                    <img class="rounded-circle shadow-1-strong me-1" src="{{Storage::url($k->foto_path)}}" alt="avatar" width="40" height="40" />
                                </figure>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="text-primary fw-bold mb-0">
                                            <span class="text-dark ms-2">{{$k->name}}</span> <br /><span class="badge rounded-pill bg-light" style="font-size:10px;color:grey">
                                                <i class="fa fa-calendar" style="font-size:10px; color:coral"></i>
                                                {{ $k->created_at }}</span>
                                            <p class="text-dark ms-2">{{$k->isi}}</p>

                                        </h6>
                                        <?php
                                        if ($h != null) {
                                            if ($k->name == $h['name']) { ?>

                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-row">
                                                        <a href="<?= url('/komentar/delete/' . $k->id) ?>" class=" reply"><i class="fas fa-trash"></i></a>
                                                        <a href="<?= url('/komentar/update/' . $k->id) ?>"><i class="fas fa-pen"></i></a>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <br />
                    <?php
                    if ($h != null) { ?>
                        <div class="w-100">
                            <form name=" newtopik" method="post" action="{{url('komentar/add')}}">
                                @csrf
                                <div class="row">
                                    <textarea class="form-control" id="isi" name="isi" rows="4" style="background: #fff;" placeholder="komentar baru"></textarea>
                                    <!-- <input type="text" name="isi" class="form-control" placeholder="Komentar"> -->
                                    <?php if (Auth::check()) : ?>
                                        <input name="id_user" type="hidden" class="form-control" value="{{ Auth::user()->id }}" ?>
                                    <?php endif ?>

                                    @foreach ($topik as $t)
                                    <input name="id_topik" type="hidden" class="form-control" value="<?= $t->id ?>">
                                    @endforeach
                                </div>
                                <!-- <button type="submit" class="btn btn-primary">Kirim</button> -->
                                <div class="float-end mt-2 pt-1">
                                    <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                                    <!-- <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button> -->
                                </div>
                            </form>
                        </div>
                    <?php }
                    ?>

                </div>
            </div>
        </div>
        </div>
    </section>
    </div>
    <!-- End blog comments -->
    </div>
    </section>
</body>
<footer>
    @include('template2/footer')
</footer>

</html>