<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
            <?php
            $h = auth()->user();
            ?>
        </h2>
        <nav class="navbar navbar-light bg-white">
            <form class="container-fluid justify-content-start">
                <div class="button">
                    <ul class="right">
                        <a href="http://127.0.0.1:8000">Home</a>
                        <a href="http://127.0.0.1:8000/administrator">Kelola</a>
                        <a href="http://127.0.0.1:8000/inov">Inovasi</a>
                        <a href="http://127.0.0.1:8000/forum">Forum</a>
                        <style media="screen">
                            .right {
                                float: right;
                                display: block;
                            }

                            .button ul a {
                                padding: 5px;
                                background: #0d6efd;
                                color: white;
                            }
                        </style>
                    </ul>
                </div>

            </form>
        </nav>
    </x-slot>
    <br />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!

                </div>
            </div>
        </div>
    </div>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="{{asset('css2/dashboard.css')}}" rel=" stylesheet">

    <div class="container emp-profile">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="{{Storage::url('user/'.$h->foto_path)}}" alt="<?= $h['foto_path'] ?>" class="img-thumbnail">
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h3>
                        Profile
                    </h3>
                    <h6>
                    </h6>
                    <p class="proile-rating"><span></span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tentang Saya</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nama</label>
                            </div>
                            <div class="col-md-6">
                                <p>: <?= $h['name'] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Username</label>
                            </div>
                            <div class="col-md-6">
                                <p>: <?= $h['username'] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>: <?= $h['email'] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Alamat</label>
                            </div>
                            <div class="col-md-6">
                                <p>: <?= $h['alamat'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="mb-3">
                    <form name="foto" method="post" action="{{url('profil/update/'.$h['id'])}}">
                        @csrf
                        <label for="formFile" class="form-label">Masukkan Foto Profil</label>
                        <input class="form-control" type="file" id="foto"><br />
                        <button type="submit" value="Submit" class="btn btn-primary btn-sm">Kirim</button>

                    </form>
                </div> -->

                <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

                <script>
                    $(document).ready(function() {
                        // Select2 Multiple
                        $('#coba').select2({
                            placeholder: 'Cari...',
                            allowClear: false
                        });

                    });
                </script>
                <!-- <ul class="right mr-3">
                    <a href="{{url('/profil/halamanupdate/'.$h['id'])}}">Edit Profil</a>

                </ul> -->

            </div>
        </div>
    </div>
    <div class="container ml-15">
        <!-- <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="email" class="form-control" id="nama" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form> -->
    </div>
    <br />
    <br />
</x-app-layout>
