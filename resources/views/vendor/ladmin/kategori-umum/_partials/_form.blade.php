<x-ladmin-form-group name="kategori" label="Kategori *">
    <x-slot name="prepend">
        {!! ladmin()->icon('desktop-computer') !!}
    </x-slot>

    <input type="text" placeholder="Nama Kategori" class="form-control" name="kategori" id="kategori" value="{{ old('kategori', $kategori->kategori) }}">
    @if (isset($kategori_umum))
    <x-ladmin-form-group name="id_ku" label="Kategori *">
        <x-slot name="prepend">
            {!! ladmin()->icon('fas fa-list') !!}
        </x-slot>

        <select name="id_ku" id="id_ku" class="form-control border-0">
            @foreach ($kategori_umum as $data )
            <option value="{{$data->id}}" {{isset($inovasi->id_ku) ? 'selected' : ''}}>{{$data->kategori}}</option>
            @endforeach
        </select>
    </x-ladmin-form-group>
    @endif
</x-ladmin-form-group>