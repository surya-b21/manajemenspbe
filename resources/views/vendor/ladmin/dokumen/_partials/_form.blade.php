<x-ladmin-form-group name="judul" label="Judul *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-pencil-alt') !!}
    </x-slot>

    <input type="text" placeholder="Judul" class="form-control" name="judul" id="judul" value="{{ old('judul', $dokumen->judul) }}">

</x-ladmin-form-group>

<x-ladmin-form-group name="file" label="File *">
    <x-slot name="prepend">
        {!! ladmin()->icon('far fa-file') !!}
    </x-slot>

    <input type="file" placeholder="File" class="form-control" name="file_url" id="file_url" value="{{ old('file_url', $dokumen->file_url) }}">

</x-ladmin-form-group>
