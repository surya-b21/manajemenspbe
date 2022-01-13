<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            <?php
            $h = auth()->user();
            ?>
        </h2>
    </x-slot>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="{{asset('css2/dashboard.css')}}"rel=" stylesheet" >

                <div class="row">
                    <div class="col-md-4">
                        @if(session()->has('message'))
                        
                        <div class="test-green-600 mb-4">{{ session()->get('message') }}

                        @endif
                        <div class="profile-img">
                    </div>
                    </div>
                </div>

                <div class="container">
                    <h4>Ubah?</h2>
                        <form action= "{{ route('profile.update') }}" method="post">
                           @method("put")
                           @csrf
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nama</label>
                          <input type="" class="form-control" id="exampleInputPassword1" placeholder="Masukkan nama">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Username</label>
                          <input type="" class="form-control" id="exampleInputPassword1" placeholder="Masukkan username">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Alamat</label>
                          <input type="" class="form-control" id="exampleInputPassword1" placeholder="Masukkan alamat">
                        </div>
                        <div class="form-check">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
        
                </div>
                <br />
                <br />
            </x-app-layout>
