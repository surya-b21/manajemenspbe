<x-app-layout>
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
                        <img src="{{ Storage::url('user/'. $user->foto_path) }}" alt="<?= $user->username ?>"
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
                <button class="btn btn-primary">Edit Profil</button>
            </div>
        </div>
    </div>
</x-app-layout>
