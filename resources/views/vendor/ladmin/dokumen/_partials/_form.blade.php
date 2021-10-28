<x-ladmin-form-group name="judul" label="Judul *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-pencil-alt') !!}
    </x-slot>

    <input type="text" placeholder="Judul" class="form-control" name="judul" id="judul" value="{{ old('judul', $dokumen->judul) }}">

</x-ladmin-form-group>

<x-ladmin-form-group name="file_path" label="File *">
    <x-slot name="prepend">
        {!! ladmin()->icon('far fa-file') !!}
    </x-slot>

    <input type="file" placeholder="File" class="form-control" name="file_path" id="file_path" value="{{ old('file_path', $dokumen->file_path) }}">

</x-ladmin-form-group>

@if (isset($inovasi))
<x-ladmin-form-group name="id_inovasi" label="Inovasi *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-list') !!}
    </x-slot>

    <select name="id_inovasi" id="id_inovasi" class="form-control border-0">
        @foreach ($inovasi as $data )
            <option value="{{$data->id}}" {{isset($dokumen->id_inovasi) ? 'selected' : ''}}>{{$data->nama}}</option>
        @endforeach
    </select>
</x-ladmin-form-group>
@endif
