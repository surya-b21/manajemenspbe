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

<div class="container mt-5">
    {{-- <div class="container"> --}}
    {{-- kalo belum ada isi tabel, navbar nutup konten. semakin banyak jumlah baris tabel, semakin kebawah padding(?) --}}
    <div class="row mt-3">
        <div class="col">
            <form action="" method="post" enctype="multipart/form-data"> @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan keyword pencarian.." name="keyword">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Judul Topik</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tampil['kf'] as $tampil['kf'])
            @foreach ($tampil['topik'] as $tampil['t'])
            <tr>
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
                        <a href="<?= url('/topik/delete/' . $tampil['t']->id) ?>"><i class="fas fa-trash"></i></a>
                        <a href="<?= url('/topik/update/' . $tampil['t']->id) ?>"><i class="fas fa-pen"></i></a>
                    </td>
                    <br />
                <?php } else { ?>
                <?php } ?>
            </tr>
            @endforeach
            @endforeach
        </tbody>
    </table>
</div>
{{-- </div> --}}
</div>
<br>
<br>
{{-- Form tambah Topik --}}
<div class="container mb-5">
    <div class="container">
        <form name="newtopik" method="post" action="{{url('topik/add')}}" enctype="multipart/form-data">
            @csrf
            <?php
            // $ini = $tampil['id'];
            // echo $ini 
            ?>

            <div class="row">
                <div class="col-8">
                    {{-- <label name="judul" class="form-label">Buat Topik Baru?</label> --}}
                    <h3>Buat Topik Baru?</h3> <br>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Judul Topik</label>
                        <div class="col-sm-10">
                            <input name="judul" type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Isi</label>
                        <div class="col-sm-10">
                            {{-- <input name="isi" type="text" class="form-control" placeholder=""> --}}
                            <textarea name="isi" class="form-control" rows="7" id="textarea" placeholder=""></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input name="foto_url" id="foto_url" type="file" class="form-control" placeholder="">
                        </div>
                    </div>
                    <input name="id_user" type="hidden" class="form-control" value=1>
                    <input name="id_kf" type="hidden" class="form-control" value="<?= $tampil['id'] ?>">

                    <button type="submit" class="btn btn-primary">Kirim</button>
                    <a href="/forum"><button type="button" class="btn btn-dark">Kembali</button></a>
        </form>
    </div>
</div>
</div>
</div>
<div class="mt-4">
    {{-- {{ $topik->links() }} --}}
</div>
{{-- <div class="row">
  <div class="col-8">
{{ $topik->links() }}
</div>
</div> --}}

</body>

<footer>
    @include('template2/footer')
</footer>

</html>