<x-ladmin-form-group name="element" label="Elemen *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fab fa-elementor') !!}
    </x-slot>

    <input type="text" placeholder="Nama Elemen" class="form-control" name="element" id="element" value="{{ old('element', $esmart->element) }}">

</x-ladmin-form-group>

<x-ladmin-form-group name="deskripsi" label="Deskripsi *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-file') !!}
    </x-slot>

    <textarea type="text" placeholder="Deskripsi" class="form-control" name="deskripsi" id="deskripsi">{{ old('deskripsi', $esmart->deskripsi) }}</textarea>
</x-ladmin-form-group>
