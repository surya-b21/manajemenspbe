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
<br>
<br>
<br>
<br>
{{-- @if ($tampil->count()) --}}

<div class="container mt-5">
    
    {{-- <h1 class="mb-3"> Topik tentang {{ $tampil->id }} </h1> --}}

    {{-- <div class="container"> --}}
    {{-- kalo belum ada isi tabel, navbar nutup konten. semakin banyak jumlah baris tabel, semakin kebawah padding(?) --}}
    <div class="row justify-content-center mb-3 mt-3">
        <div class="col-md-7">
            <form action="/topiks" method="" enctype="multipart/form-data"> @csrf
                {{-- @if (request('kategori'))
                    <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                @endif --}}
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan keyword pencarian.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit" name="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Judul Topik</th>
                {{-- <th scope="col">Aksi</th> --}}
                <th scope="col">Published</th>
            </tr>
        </thead>
        <tbody>
            <tr>
        @foreach ($tampil['kf'] as $tampil['kf'])
        @foreach ($tampil['topik'] as $tampil['t'])
                <?php if ($tampil['kf']->id == $tampil['t']->id_kf) { ?>
                    <td>
                        <a href="{{url('/topik/'.$tampil['t']->id)}}">
                            <div>
                                <h6> {{$tampil['t']->judul}}
                                    <input name="idtopik" type="hidden" class="form-control" value="<?= $tampil['t']['id'] ?>">
                                </h6>
                            </div>
                        </a>
                    </td>
                    <td>
                        {{-- <a href="<?= url('/topik/delete/' . $tampil['t']->id) ?>"><i class="fas fa-trash"></i></a>
                        <a href="<?= url('/topik/update/' . $tampil['t']->id) ?>"><i class="fas fa-pen"></i></a> --}}
                        <p class="text-dark">{{ $tampil['t']->created_at->toDateString() }}</p>
                    </td>
                    <br />
                <?php } else { ?>
                <?php } ?>
            </tr>
            @endforeach
            @endforeach
        </tbody>
    </table>
    <a href="/topik" class="btn btn-dark">Semua topik</a>
</div>
{{-- </div> --}}
</div>


{{-- @else
    <p class="text-center fs-4">No post found.</p>
@endif --}}

<br>
<br>

</div>
</div>

</body>

<footer>
    @include('template2/footer')
</footer>

</html>