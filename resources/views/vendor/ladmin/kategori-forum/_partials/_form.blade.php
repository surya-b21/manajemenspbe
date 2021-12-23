<x-ladmin-form-group name="kategori" label="Kategori *">
    <x-slot name="prepend">
        {!! ladmin()->icon('desktop-computer') !!}
    </x-slot>

    <input type="text" placeholder="Nama Kategori" class="form-control" name="kategori" id="kategori" value="{{ old('kategori', $kategori->kategori) }}">
</x-ladmin-form-group>

{{-- <x-ladmin-form-group name="parent" label="Kategori Parent *">
    <x-slot name="prepend">
        {!! ladmin()->icon('far fa-list') !!}
    </x-slot>

    <?php if ($kf['parent'] >= 1) { ?>  
    <select name="parent" id="parent" class="form-control border-0">
        @foreach ($kf as $data )
            <option value="{{$data->id}}" {{isset($kf->parent) ? 'selected' : ''}}>{{$data->parent}}</option>
        @endforeach
    </select>
    <?php } ?>
</x-ladmin-form-group> --}}
