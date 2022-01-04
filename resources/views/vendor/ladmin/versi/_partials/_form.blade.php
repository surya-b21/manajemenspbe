<x-ladmin-form-group name="nama" label="Nama *">
    <x-slot name="prepend">
        {!! ladmin()->icon('user') !!}
    </x-slot>

    <input type="text" placeholder="Nama" class="form-control" name="nama" id="nama" value="{{ old('nama', $versi->nama) }}">
</x-ladmin-form-group>

<x-ladmin-form-group name="deskripsi" label="Deskripsi *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-file-alt') !!}
    </x-slot>

    <textarea placeholder="Deskripsi" class="form-control" name="deskripsi" id="deskripsi">{{ old('deskripsi', $versi->deskripsi) }}</textarea>
</x-ladmin-form-group>

<x-ladmin-form-group name="tgl_versi" label="Tanggal Versi *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-calendar-alt') !!}
    </x-slot>

    <input type="date" placeholder="Tanggal Versi" class="form-control" name="tgl_versi" id="tgl_versi" value="{{ old('tgl_versi', $versi->tgl_versi) }}">
</x-ladmin-form-group>

@if (isset($developer))
<x-ladmin-form-group name="id_dev" label="Developer *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-list') !!}
    </x-slot>

    <select name="id_dev" id="id_dev" class="form-control border-0">
        @foreach ($developer as $data )
            <option value="{{$data->id}}" {{isset($versi->id_dev) ? 'selected' : ''}}>{{$data->nama_dev}}</option>
        @endforeach
    </select>
</x-ladmin-form-group>
@endif

<input type="hidden" name="id_inovasi" value="{{$id}}">
