<x-ladmin-form-group name="nama" label="Nama Developer *">
    <x-slot name="prepend">
        {!! ladmin()->icon('user') !!}
    </x-slot>

    <input type="text" placeholder="Nama Developer" class="form-control" name="nama_dev" id="nama_dev" value="{{ old('nama_dev', $developer->nama_dev) }}">

</x-ladmin-form-group>

<x-ladmin-form-group name="alamat" label="Alamat Developer *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-map-marker-alt') !!}
    </x-slot>

    <textarea type="text" placeholder="Alamat Developer" class="form-control" name="alamat_dev" id="alamat_dev">{{ old('alamat_dev', $developer->alamat_dev) }}</textarea>
</x-ladmin-form-group>

<x-ladmin-form-group name="npwp" label="NPWP Developer *">
    <x-slot name="prepend">
        {!! ladmin()->icon('far fa-id-card') !!}
    </x-slot>

    <input type="text" placeholder="NPWP Developer" class="form-control" name="npwp_dev" id="npwp_dev" value="{{ old('npwp_dev', $developer->npwp_dev) }}">

</x-ladmin-form-group>

<x-ladmin-form-group name="telepon" label="No. Telepon Developer *">
    <x-slot name="prepend">
        {!! ladmin()->icon('phone') !!}
    </x-slot>

    <input type="text" placeholder="Nomor Telepon Developer" class="form-control" name="telepon_dev" id="telepon_dev" value="{{ old('telepon_dev', $developer->telepon_dev) }}">

</x-ladmin-form-group>

<x-ladmin-form-group name="foto" label="Foto Developer *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-portrait') !!}
    </x-slot>

    <input type="file" placeholder="Foto Developer" class="form-control" name="foto_dev_path" id="foto_dev_path" value="{{ old('foto_dev_path', $developer->foto_dev_path) }}">

</x-ladmin-form-group>
