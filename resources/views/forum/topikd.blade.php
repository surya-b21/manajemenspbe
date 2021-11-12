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

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3"> {{ $topik->judul }} </h1>
                
                    {{-- <p>By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> 
                        in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p> --}}
                        <p>By: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> 
                        in <a href="posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
    
                    <article class="my-3 fs-5"> 
                    {!! $post->body !!} 
                    </article>
                    {{-- <a href="/posts" class="d-block mt-3 btn btn-primary">Back to Posts</a> //button e panjang -> d-block  --}}
                    <a href="/posts" class="mt-3 btn btn-primary">Back to Posts</a>            
            </div>
        </div>
    </div>


    <div class="container mt-6 shadow-sm p-3 mb-5 bg-body rounded">
        <!-- <div class=" card mb-3">
            <div class="card-body"> -->
        <h2 class="entry-title">
            @foreach ($topik as $t)
            <h2 class="lead">
                <h2>{{$t->judul}}</h2>
            </h2>
        </h2>
        <div class="mx-auto">
            <figure class="figure">
                <img src="{{asset('storage/'.$t->foto_url)}}" class="figure-img rounded" alt="<?= $t->foto_url ?>" width="200" height="200">
                <!-- <figcaption class="figure-caption">A caption for the above image.</figcaption> -->
            </figure>
        </div>

        <!-- <h5 class="card-title">Card title</h5> -->
        <p class="lead"> {{$t->isi}}</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <a href="/forum"><button type="button" class="btn btn-dark">Kembali ke Forum</button>
    </div>
    @endforeach
    </div>
    </div>

</body>
<footer>
    @include('template2/footer')
</footer>

</html>