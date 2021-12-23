<x-ladmin-layout>
    <x-slot name="title_page">Dashboard</x-slot>
    <x-slot name="title">Dashboard</x-slot>
    <div class="row">
        <div class="col-md-6 col-12">
            <x-ladmin-card>
                <x-slot name="header"><h4 class="card-title text-center">Total User</h4></x-slot>
                <h2 class="text-center">{{$user}}</h2>
            </x-ladmin-card>
        </div>
        <div class="col-md-6 col-12">
            <x-ladmin-card>
                <x-slot name="header"><h4 class="card-title text-center">Total OPD</h4></x-slot>
                <h2 class="text-center">{{$opd}}</h2>
            </x-ladmin-card>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12">
            <x-ladmin-card>
                <x-slot name="header"><h4 class="card-title text-center">Total Kategori Umum</h4></x-slot>
                <h2 class="text-center">{{$ku}}</h2>
            </x-ladmin-card>
        </div>
        <div class="col-md-6 col-12">
            <x-ladmin-card>
                <x-slot name="header"><h4 class="card-title text-center">Total Elemen Smart</h4></x-slot>
                <h2 class="text-center">{{$esmart}}</h2>
            </x-ladmin-card>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12 mt-3">
            <x-ladmin-card>
                <x-slot name="header"><h4 class="card-title text-center">Total Inovasi</h4></x-slot>
                <h2 class="text-center">{{$inovasi}}</h2>
            </x-ladmin-card>
        </div>
        <div class="col-md-6 col-12 mt-3">
            <x-ladmin-card>
                <x-slot name="header"><h4 class="card-title text-center">Total Dokumen</h4></x-slot>
                <h2 class="text-center">{{$dokumen}}</h2>
            </x-ladmin-card>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12 mt-3">
            <x-ladmin-card>
                <x-slot name="header"><h4 class="card-title text-center">Total Developer</h4></x-slot>
                <h2 class="text-center">{{$developer}}</h2>
            </x-ladmin-card>
        </div>
        <div class="col-md-6 col-12 mt-3">
            <x-ladmin-card>
                <x-slot name="header"><h4 class="card-title text-center">Total Versi</h4></x-slot>
                <h2 class="text-center">{{$versi}}</h2>
            </x-ladmin-card>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12 mt-3">
            <x-ladmin-card>
                <x-slot name="header"><h4 class="card-title text-center">Total Kategori Forum</h4></x-slot>
                <h2 class="text-center">{{$kf}}</h2>
            </x-ladmin-card>
        </div>
        <div class="col-md-6 col-12 mt-3">
            <x-ladmin-card>
                <x-slot name="header"><h4 class="card-title text-center">Total Topik Forum</h4></x-slot>
                <h2 class="text-center">{{$topik}}</h2>
            </x-ladmin-card>
        </div>
    </div>
</x-ladmin-layout>
