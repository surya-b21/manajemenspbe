@include('.../template2/main')

<body style="background-image:url('{{asset('template2/assets/images/slider-right-dec.jpg')}}')">
    <!-- Responsive navbar-->
    @extends('../template')
    @section('container')

    <!-- Page content-->
    <div class="container" >
        <!-- Page header with logo and tagline-->
        <div class="row " style="padding-bottom:50px;">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <!-- <h6>---</h6> -->
                        <h4><em>
                            <?php
                                $id_jenis = 1;
                                if ($jenis == "1"){
                                    foreach ($kategori as $kategori) {
                                        echo $kategori['kategori'];
                                        $id_jenis = $kategori['id'];
                                    }
                                }
                                else if ($jenis == "2"){
                                    foreach ($kategori as $kategori) {
                                        echo $kategori['element'];
                                        $id_jenis = $kategori['id'];
                                    }
                                }
                                else if ($jenis == "3"){
                                    echo $kategori;
                                    $id_jenis = $id_kategori;
                                }
                            ?>    
                        </em></h4>
                        <div class="line-dec m-auto"></div>
                    </div>
                </div>
        </div>
        <div class="row">
            @foreach ($inovasi as $data)
            <div class="col-lg-3">
                <div class="card mb-4" style="border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <a href="{{url('/inovasi/read/'.$jenis.'/'.$id_jenis.'/'.$data['id'])}}"><img class="card-img-top" src="{{$data['poster_url']}}" alt="..."  style="border-top-left-radius:15px; border-top-right-radius:15px;"/></a>
                    <div class="card-body">
                        <div class="small text-muted">{{$data['tgl_upload']}}</div>
                        <h2 class="card-title h4">{{ Str::limit($data['nama'], 10, '...') }}</h2>
                        <p class="card-text">
                            {{ Str::limit($data['deskripsi'], 80, '...') }}
                        </p>
                        <a class="btn btn-primary w-100 mt-2" href="{{url('/inovasi/read/'.$jenis.'/'.$id_jenis.'/'.$data['id'])}}">Selengkapnya →</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Pagination-->
        <nav aria-label="Pagination">
            <hr class="my-0" />
            <ul class="pagination justify-content-center my-4">
                {{ $inovasi->links()}}
            </ul>
        </nav>
    </div>
    <!-- Footer-->
    @endsection
</body>
</html>
