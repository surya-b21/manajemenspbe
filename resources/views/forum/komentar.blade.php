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

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <div class="container" style="padding-bottom:25px; padding-top:150px;">
        <div>
            {{-- <p> --}}
            <a href="/home" style=""> Home</a> > <a href="/forum" style="">Forum</a> >
            {{-- </p> --}}
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 md-8">
                <div class="card mb-4" style="border-radius:10px; ">
                    <div class="justify-content-center mt-6 p-5 mb-5">
                        <!-- <div class=" card mb-3">
                <div class="card-body"> -->
                        @foreach ($topik as $t)
                        {{-- <h2 class="card-title"> --}}
                        <div class="mx-auto text-center">
                            <figure class="figure mt-6 mb-3">
                                {{-- <img src="{{Storage::url($t->foto_path)}}" alt=""> --}}
                                <img src="{{Storage::url($t->foto_path)}}" class="figure-img rounded text-center" alt="<?= $t->foto_path ?>" width="600" height="300">
                            </figure>
                        </div>
                        <span style="font-size:28px;">
                            <b>{{$t->judul}}</b>
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
                            {{ $t->created_at->isoFormat('DD MMMM YYYY') }}</span>
                        <span class="badge rounded-pill bg-light" style="font-size:12px;color:grey">
                            <i class="fa fa-book" style="font-size:10px; color:forestgreen"></i>
                            <a href="{{ url('/forum/'.$t->kategori->id) }}">{{ $t->kategori->kategori }}</a></span>
                        <!-- <h5 class="card-title">Card title</h5> -->

                        <p class=""> {!! $t->isi !!}</p>
                    </div>
                    @endforeach
                </div>




                {{-- <section>
        <div class="container my-5 py-5 text-dark"> --}}
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12 col-lg-10 col-xl-10">
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
                                        <img class="rounded-circle shadow-1-strong me-1" src="{{Storage::url('user/'.$k->foto_path)}}" alt="avatar" width="40" height="40" />
                                    </figure>
                                    <div class="w-100">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            {{-- <h6 class="text-primary fw-bold mb-0"> --}}
                                            <h6 class="text-primary mb-0">
                                                <span class="text-dark ms-2">{{$k->name}}</span> <br /><span class="badge rounded-pill bg-light" style="font-size:10px;color:grey">
                                                    <i class="fa fa-calendar" style="font-size:10px; color:coral"></i>
                                                    {{ $k->created_at }}</span>
                                                {{-- {{ $k->created_at->isoFormat('DD MMMM YYYY') }}</span> --}}
                                                <p class="text-dark ms-2">{{$k->isi}}</p>
                                            </h6>
                                            <?php
                                            if ($h != null) {
                                                if ($k->name == $h['name']) { ?>

                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="d-flex flex-row">
                                                            <a href="<?= url('/komentar/delete/' . encrypt($k->id)) ?>"><i class="fas fa-trash primary" style="color:#007bff;" onclick="return confirm('Apakah anda yakin ingin hapus ?')"></i></a>
                                                            <!-- <input type="hidden" value="{{$k->id}}" name="idkomen"> -->
                                                            <a href="<?= url('/komentar/update/' . encrypt($k->id)) ?>"><i class="fas fa-pen"></i></a>
                                                        </div>
                                                    </div>

                                                <?php } ?>
                                            <?php } ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $k->id = 0 ?>
                        @endforeach

                        <?php
                        if ($h != null) { ?>
                            <div class="w-100">
                                <form name=" newtopik" method="post" action="{{url('komentar/add')}}">
                                    @csrf
                                    {{-- <div class="row"> --}}
                                    <div class="card mb-3">
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
            {{-- </div>
    </section> --}}
        </div>
    </div>

    <!-- End blog comments -->
    </div>
</body>
<footer>
    @include('template2/footer')
</footer>

</html>