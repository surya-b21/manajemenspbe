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
                        <h2 class="lead">
                            <h2 class="text-center mb-3">{{$t->judul}}</h2>
                        </h2>
                    </h2>
                    <div class="mx-auto text-center">
                        <figure class="figure">
                            <img src="{{asset('storage/'.$t->foto_url)}}" class="figure-img rounded text-center" alt="<?= $t->foto_url ?>" width="600" height="300">
                            <!-- <figcaption class="figure-caption">A caption for the above image.</figcaption> -->
                        </figure>
                    </div>
                    
                    <a href="/forum/{{ $t->kategori->id }}" class="text-decoration-none fs-6">{{ $t->kategori->kategori }} - {{ $t->kategori->parent }}, </a> 
                    <small class="text-muted">{{ $t->created_at->toDateString() }}</small>
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <p class="lead text-dark"> {{$t->isi}}</p>
                    <a href="/forum"><button type="button" class="btn btn-dark">Kembali ke Forum</button>
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

                    @foreach ($komentar as $k)
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex flex-start">
                                <figure class="figure">
                                    <img class="rounded-circle shadow-1-strong me-1" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" alt="avatar" width="40" height="40" />
                                </figure>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="text-primary fw-bold mb-0">
                                            mindyy_def (Nama User?)
                                            <span class="text-dark ms-2">{{$k->isi}}
                                            </span>
                                        </h6>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex flex-row">
                                                <a href="<?= url('/komentar/delete/' . $k->id) ?>" class=" reply"><i class="fas fa-trash"></i></a>
                                                <a href="<?= url('/komentar/update/' . $k->id) ?>"><i class="fas fa-pen"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-0">
                                        <time datetime="2020-01-01">{{$k->created_at}}</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <br />
                    <div class="w-100">
                        <form name=" newtopik" method="post" action="{{url('komentar/add')}}">
                            @csrf
                            <div class="row">
                                <textarea class="form-control" id="isi" name="isi" rows="4" style="background: #fff;" placeholder="komentar baru"></textarea>
                                <!-- <input type="text" name="isi" class="form-control" placeholder="Komentar"> -->
                                <input name="id_user" type="hidden" class="form-control" value=1>
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
                </div>
            </div>
        </div>
        </div>
    </section>
    </div><!-- End blog comments -->
    </div>
    </section>
</body>
<footer>
    @include('template2/footer')
</footer>

</html>