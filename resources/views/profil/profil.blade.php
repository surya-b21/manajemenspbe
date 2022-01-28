<x-app-layout>
    <x-slot name="head">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </x-slot>

    <div class="container emp-profile">
        <div class="row">
            <div class="profile-head text-center">
                <h1 class="display-1">
                    Profile
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="profile-img">
                    @if (isset($user->foto_path))
                        <img src="{{ Storage::url('user/' . $user->foto_path) }}" alt="<?= $user->username ?>"
                            class="img-thumbnail">
                    @else
                        <img src="{{ Storage::url('user/default.png') }}" alt="default.png" class="img-thumbnail">
                    @endif
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row my-3">
            <div class="col-md">
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md text-center">
                                <h1> <?= $user->name ?></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md text-center">
                                <h3><?= $user->username ?></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md text-center">
                                <h5><?= $user->email ?></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md text-center">
                                <p><?= $user->alamat ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md"></div>
        </div>
        <div class="row">
            <div class="col-md text-center">
                <button id="buttonEdit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                    data-username="{{ $user->username }}">Edit Profil</button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('profil.store', $user->username) }}" method="POST" id="formEdit">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea id="alamat" name="alamat" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Ganti foto profil</label>
                            <input class="form-control" type="file" id="formFile" name="foto_path">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="scripts">
        <script type="text/javascript">
            $(function() {
                $('#buttonEdit').click(function() {
                    const username = $(this).data('username');

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        method: "post",
                        url: "{{ route('profil.get') }}",
                        data: {
                            username: username
                        },
                        dataType: "json",
                        success: function(response) {
                            $('#name').val(response.name);
                            $('#username').val(response.username);
                            $('#email').val(response.email);
                            $('#alamat').val(response.alamat);
                        }
                    });
                })
            })
        </script>

        @if ($pesan = Session::get('sukses'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: '{{$pesan}}'
                })
            </script>
        @endif
    </x-slot>
</x-app-layout>
