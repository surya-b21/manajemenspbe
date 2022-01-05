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

<div class="container">

    <div class="row " style="padding-bottom:50px; padding-top:150px;">
        <div class="col-lg-12 d-flex justify-content-center">
            <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <h4><em> {{ $title }} </em></h4>
                <div class="line-dec m-auto"></div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-3 mt-3">
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

    {{-- @if ($topiks->count()) --}}

    <div class="row">
        <div class="col-lg-10 mb-3 mt-3">
    
            {{-- @foreach ($tampil['kf'] as $tampil['kf']) --}}
            @foreach ($tampil['topik'] as $tampil['t'])
        
                <div class="container">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 mt-3 mb-3">
                                <img src="{{Storage::url($tampil['t']->foto_path)}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">
                                        {{-- <a href="{{url('/forum/'.$tampil['kf']->id)}}">
                                            <small>{{ $tampil['kf']->kategori }}</small>
                                        </a> --}}
                                        <?php
                                        for ($a = 0; $a < count($tampil['kf']); $a++) {
                                            if ($tampil['kf'][$a]["id"] == $tampil['t']->id_kf) {
                                        ?>
                                        {{-- <small><?= $tampil['kf'][$a]["kategori"]; ?></small> --}}
                                            <a href="{{url('/forum/'.$tampil['kf'][$a]["id"])}}">
                                                <span class="badge rounded-pill bg-light " style="font-size:11px;color:grey">
                                                <?= $tampil['kf'][$a]["kategori"]; ?></span>
                                            </a>
                                        <?php
                                            }
                                        }
                                        ?>
                                        
                                        <a href="{{url('/topik/'.$tampil['t']->id)}}">
                                            <h5 class="card-title">
                                                <i class="fa fa-send" style="font-size:14px; color:blue"></i>
                                                {{$tampil['t']->judul}}
                                                <input name="idtopik" type="hidden" class="form-control" value="<?= $tampil['t']['id'] ?>">
                                            </h5>
                                        </a>
        
                                        <small>{!! Str::limit($tampil['t']->isi, 100, '...') !!} 
                                            <a href="{{url('/topik/'.$tampil['t']->id)}}">Selengkapnya</a>
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
            @endforeach
            {{-- @endforeach --}}
    
    <nav aria-label="Pagination">
        <hr class="my-0" />
        <ul class="pagination justify-content-center my-4">
            {{ $tampil['topik']->links()}}
            {{-- {{ $$tampil['kf']->links()}} --}}
        </ul>
    </nav>
</div>
</div>
</div>

</body>

<footer>
    @include('template2/footer')
</footer>

</html>