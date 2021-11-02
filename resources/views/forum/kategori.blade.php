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
<!-- ======= Breadcrumbs ======= -->

@if ($kategori->count())

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <!-- <h6>---</h6> -->
                    <h4>Bidang <em>Inovasi</em></h4>
                    <div class="line-dec"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <div style="margin-left: 5cm;">
        <?php for ($i = 0; $i < count($kategori); $i++) { ?>
            <header class="section-header">
                <h2> <?= $kategori[$i]['kategori']; ?></h2>
                <!-- <p>Veritatis et dolores facere numquam et praesentium</p> -->
            </header>
            <div class="row gy-4">
                <?php for ($j = 0; $j < count($kategori[$i]['children']); $j++) { ?>
                    <!-- <div class="row gy-4"> -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <h3>
                                <div class="col-lg-7">
                                    <div class="fill-form">
                                        <div class="row">
                                            <div class="col-lg-38">
                                                <!-- <div class="info-post"> -->
                                                <div class="icon">
                                                    <img src="{{asset('template2/assets/images/service-icon-03.png')}}" alt="">
                                                    <div>
                                                        <a href="{{url('/forum/'.$kategori[$i]['children'][$j]['id'])}}">
                                                            <?= $kategori[$i]['children'][$j]['kategori'];
                                                            ?>
                                                        </a>
                                                        <!-- </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </h3>
                        </div>
                    </div>

                    <!-- </div> -->
                <?php } ?>
            </div>
        <?php } ?>

    </div>
</div>
</div>

@else
    <p class="text-center fs-4">No post found.</p>
@endif

</body>
@include('template2/footer')

</html>