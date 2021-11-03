<x-ladmin-form-group name="nama_opd" label="Nama OPD *">
    <x-slot name="prepend">
        {!! ladmin()->icon('user-group') !!}
    </x-slot>

    <input type="text" placeholder="Nama OPD" class="form-control" name="nama_opd" id="nama_opd" value="{{ old('nama_opd', $opd->nama_opd) }}">
</x-ladmin-form-group>

<x-ladmin-form-group name="email" label="Email *">
    <x-slot name="prepend">
        {!! ladmin()->icon('mail') !!}
    </x-slot>

    <input type="text" placeholder="Email" class="form-control" name="email" id="email" value="{{ old('email', $opd->email) }}">
</x-ladmin-form-group>

<x-ladmin-form-group name="telepon" label="Telepon *">
    <x-slot name="prepend">
        {!! ladmin()->icon('phone') !!}
    </x-slot>

    <input type="text" placeholder="Telepon" class="form-control" name="telepon" id="telepon" value="{{ old('telepon', $opd->telepon) }}">
</x-ladmin-form-group>

<x-ladmin-form-group name="alamat" label="Alamat *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-map-marker-alt') !!}
    </x-slot>

    <textarea placeholder="Alamat" class="form-control" name="alamat" id="alamat">{{ old('alamat', $opd->alamat) }}</textarea>
</x-ladmin-form-group>
