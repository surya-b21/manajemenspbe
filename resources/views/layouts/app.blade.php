<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            color: #444444;
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>{{ config('app.name') }}</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('template2/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('template2/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/assets/css/templatemo-digimedia-v3.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/assets/css/animated.css') }}">
    <link rel=" stylesheet" href="{{ asset('template2/assets/css/owl.css') }}">

    {!! $head ?? null !!}
    <!--  TemplateMo 568 DigiMedia https://templatemo.com/tm-568-digimedia -->
</head>

<body>
    <x-header/>
    <div class="container" style="padding-bottom:30px; padding-top:150px;">
        {{$slot}}
    </div>
    <footer class="bottom" style="position:static; bottom:0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p> DISKOMINFO SP SURAKARTA 2021
                        <!-- <br>Link: <a href="/home" target="_parent" title="free css templates">Masukkan Link Anda</a> -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
<!-- Scripts -->
<script src="{{ asset('template2/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('template2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('template2/assets/js/owl-carousel.js') }}"></script>
<script src="{{ asset('template2/assets/js/animation.js') }}"></script>
<script src="{{ asset('template2/assets/js/imagesloaded.js') }}"></script>
<script src="{{ asset('template2/assets/js/custom.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{!! $scripts ?? null !!}

</html>
