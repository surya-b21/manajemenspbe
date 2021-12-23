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
        <div class="col-md-7">
        <form name="newtopik" method="post" action="{{url('komentar/update/' . $komentar->id)}}">
            @csrf
            <div class=" mb-3">
                <label for="exampleInputEmail1" class="form-label">Edit Komentar</label><br />
                <label for="exampleInputEmail1" class="form-label">
                    Topik : 
                    @php
                        $topik_forum = DB::table('topik_forum')->select('judul')->where('id',$komentar->id_topik)->first();
                        echo $topik_forum->judul;
                    @endphp
                </label>
                <input type="text" name="isi" class="form-control" placeholder="Komentar : <?= $komentar->isi ?>" value="{{ old('isi', $komentar->isi) }}">
                <input name="id_topik" type="hidden" class="form-control" value="<?= $komentar->id_topik ?>">
            </div>

            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
        </div>
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