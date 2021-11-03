<x-ladmin-form-group name="kategori" label="Kategori *">
    <x-slot name="prepend">
        {!! ladmin()->icon('desktop-computer') !!}
    </x-slot>

    <input type="text" placeholder="Nama Kategori" class="form-control" name="kategori" id="kategori" value="{{ old('kategori', $kategori->kategori) }}">
</x-ladmin-form-group>
