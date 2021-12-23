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
<br>
<br>
<div class="container">
    <h1 class="mb-5 text-center">{{ $title }}</h1>
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

    @if ($topiks->count())

    <div class="row">
        {{-- <div class="col-md-9"> --}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Judul Topik</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tanggal</th>
                    {{-- <th scope="col">Aksi</th> --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($topiks as $topik)
                    <td>
                        <a href="/topik/{{ $topik->id }}">{{ $topik->judul }}</a>
                    </td>
                    <td>
                        <a href="/forum/{{ $topik->kategori->id }}">{{ $topik->kategori->kategori }}</a>
                    </td>
                    <td>
                        <p class="text-dark">{{ $topik->created_at->isoFormat('DD MMMM YYYY') }}</p>
                    </td>
                    {{-- <td>
                                <a href="<?= url('/topik/delete/') ?>"><i class="fas fa-trash"></i></a>
                                <a href="<?= url('/topik/update/') ?>"><i class="fas fa-pen"></i></a>
                            </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@else
<p class="text-center fs-3">No topic found.</p>
@endif
</div>

<div class="d-flex justify-content-center mt-4">
    {{ $topiks->links() }}
    <a href=""></a>
</div>
</body>

<footer>
    @include('template2/footer')
</footer>

</html>