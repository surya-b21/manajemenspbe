<x-ladmin-form-group name="nama" label="Nama *">
    <x-slot name="prepend">
        {!! ladmin()->icon('user') !!}
    </x-slot>

    <input type="text" placeholder="Judul" class="form-control" name="judul" id="judul" value="{{ old('judul', $topik->judul) }}">
</x-ladmin-form-group>

<x-ladmin-form-group name="isi" label="Isi *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-file-alt') !!}
    </x-slot>

    <textarea type="text" rows="25" placeholder="Isi" class="form-control" name="isi" id="isi">{{ old('isi', $topik->isi) }}</textarea>
</x-ladmin-form-group>

<x-ladmin-form-group name="created_by" label="Tanggal Pembuatan *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-calendar-alt') !!}
    </x-slot>

    <input type="date" placeholder="Tanggal Pembuatan" class="form-control" name="created_by" id="created_by" value="{{ old('created_by', date('d/m/Y',strtotime($topik->created_by))) }}">
</x-ladmin-form-group>

<x-ladmin-form-group name="update_by" label="Tanggal Update *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-upload') !!}
    </x-slot>

    <input type="date" placeholder="Tanggal Upload" class="form-control" name="update_by" id="update_by" value="{{ old('update_by', date('d/m/Y',strtotime($topik->update_by))) }}">
</x-ladmin-form-group>

<x-ladmin-form-group name="foto_path" label="Foto *">
    <x-slot name="prepend">
        {!! ladmin()->icon('far fa-file-image') !!}
    </x-slot>

    <input type="file" placeholder="Foto" class="form-control" name="foto_path" id="foto_path" value="{{ old('foto_path', $topik->foto_path) }}">
</x-ladmin-form-group>

@if (isset($kategori_forum))
<x-ladmin-form-group name="id_kf" label="Kategori *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-list') !!}
    </x-slot>

    <select name="id_kf" id="id_kf" class="form-control border-0">
        @foreach ($kategori_forum as $data )
            <option value="{{$data->id}}" {{isset($topik->id_kf) ? 'selected' : ''}}>{{$data->kategori}}</option>
        @endforeach
    </select>
</x-ladmin-form-group>
@endif

{{-- NTAR dibuat otomatis dengan auth --}}
@if (isset($user))
<x-ladmin-form-group name="id_user" label="User *">
    <x-slot name="prepend">
        {!! ladmin()->icon('user-group') !!}
    </x-slot>

    <select name="id_user" id="id_user" class="form-control border-0">
        @foreach ($user as $data )
            <option value="{{$data->id}}" {{isset($topik->id_user) ? 'selected' : ''}}>{{$data->name}}</option>
        @endforeach
    </select>
</x-ladmin-form-group>
@endif
