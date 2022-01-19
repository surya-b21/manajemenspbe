<x-ladmin-form-group name="kategori" label="Kategori *">
    <x-slot name="prepend">
        {!! ladmin()->icon('desktop-computer') !!}
    </x-slot>

    <input type="text" placeholder="Nama Kategori" class="form-control" name="kategori" id="kategori" value="{{ old('kategori', $kategori->kategori) }}">

</x-ladmin-form-group>

<x-ladmin-form-group name="jenis_urusan" label="Jenis Urusan *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-briefcase') !!}
    </x-slot>

    <select name="jenis_urusan" id="jenis_urusan" class="form-control border-0">
        <option value="Urusan Wajib yang Berkaitan Pelayanan Dasar" {{old('jenis_urusan',$kategori->jenis_urusan) == "Urusan Wajib yang Berkaitan Pelayanan Dasar" ? "selected" : ""}}>Urusan Wajib yang Berkaitan Pelayanan Dasar</option>
        <option value="Urusan Wajib yang Tidak Berkaitan Pelayanan Dasar" {{old('jenis_urusan',$kategori->jenis_urusan) == "Urusan Wajib yang Tidak Berkaitan Pelayanan Dasar" ? "selected" : ""}}>Urusan Wajib yang Tidak Berkaitan Pelayanan Dasar</option>
        <option value="Urusan Pilihan" {{old('jenis_urusan',$kategori->jenis_urusan) == "Urusan Pilihan" ? "selected" : ""}}>Urusan Pilihan</option>
        <option value="Unsur Penunjang Urusan Pemerintahan" {{old('jenis_urusan',$kategori->jenis_urusan) == "Unsur Penunjang Urusan Pemerintahan" ? "selected" : ""}}>Unsur Penunjang Urusan Pemerintahan</option>
    </select>

</x-ladmin-form-group>

@if ($esmart)
<x-ladmin-form-group name="elemen_smart" label="Elemen Smart *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-brain') !!}
    </x-slot>

    <select name="jenis_jurusan" id="jenis_jurusan" class="form-control border-0">
        @foreach ($esmart as $data)
            <option value="{{$data->id}}" {{isset($kategori->id_smart) ? 'selected' : ''}}>{{$data->element}}</option>
        @endforeach
    </select>

</x-ladmin-form-group>
@endif

