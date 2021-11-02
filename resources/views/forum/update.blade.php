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
<br /><br />
<br /><br />
<br /><br />
<br /><br />
<div class="container mt-5">
    <div class="container">
        <h3>Topik</h3>

        <form name="newtopik" method="post" action="{{url('topik/update/'.$topik->id)}}" enctype="multipart/form-data">
            @csrf
            <h1>
                <?php
                // echo $topik->id_topik 
                ?>
            </h1>
            <div class="mb-3">
                <label name="judul" class="form-label">Edit Topik</label>

                <input name="judul" type="text" class="form-control" placeholder="Judul Topik : <?= $topik->judul ?>">
                <input name="isi" type="text" class="form-control" placeholder="Isi : <?= $topik->isi ?>">
                <input name="foto_url" type="file" class="form-control" placeholder="foto : <?= $topik->foto_url ?>">
                <input name="id" type="hidden" class="form-control" value="<?= $topik->id ?>">
                <input name="id_user" type="hidden" class="form-control" value=1>
                <!--sementara value ku isi 1-->

                <input name="id_kf" type="hidden" class="form-control" value="<?= $topik->id_kf ?>">
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
            <a href="/forum"><button type="button" class="btn btn-dark">Kembali</button>
        </form>
    </div>
</div>
<div class="container mt-5">
    <div class="container">

    </div>
</div>

</body>
<br /><br />
<br /><br />
<footer>
    @include('template2/footer')
</footer>

</html>