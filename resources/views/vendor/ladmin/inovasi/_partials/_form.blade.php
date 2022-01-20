<x-ladmin-form-group name="nama" label="Nama *">
    <x-slot name="prepend">
        {!! ladmin()->icon('user') !!}
    </x-slot>

    <input type="text" placeholder="Nama" class="form-control" name="nama" id="nama" value="{{ old('nama', $inovasi->nama) }}">
</x-ladmin-form-group>

<x-ladmin-form-group name="deskripsi" label="Deskripsi *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-file-alt') !!}
    </x-slot>

    <textarea type="text" placeholder="Deskripsi" class="form-control" name="deskripsi" id="deskripsi">{{ old('deskripsi', $inovasi->deskripsi) }}</textarea>
</x-ladmin-form-group>

<x-ladmin-form-group name="layanan_spbe" label="Layanan SPBE *">
    <x-slot name="prepend">
        {!! ladmin()->icon('cog') !!}
    </x-slot>

    <select name="layanan_spbe" id="layanan_spbe" class="form-control border-0">
        <option value="Layanan Administrasi" {{old('layanan_spbe',$inovasi->layanan_spbe) == "Layanan Administrasi" ? "selected" : ""}}>Layanan Administrasi</option>
        <option value="Layanan Publik" {{old('layanan_spbe',$inovasi->layanan_spbe) == "Layanan Publik" ? "selected" : ""}}>Layanan Publik</option>
    </select>
</x-ladmin-form-group>

<x-ladmin-form-group name="tgl_launching" label="Tanggal Launching *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-calendar-alt') !!}
    </x-slot>

    <input type="date" placeholder="Tanggal Launching" class="form-control" name="tgl_launching" id="tgl_launching" value="{{ old('tgl_launching', date('d/m/Y',strtotime($inovasi->tgl_launching))) }}">
</x-ladmin-form-group>

<x-ladmin-form-group name="tgl_upload" label="Tanggal Upload *">
    <x-slot name="prepend">
        {!! ladmin()->icon('fas fa-upload') !!}
    </x-slot>

    <input type="date" placeholder="Tanggal Upload" class="form-control" name="tgl_upload" id="tgl_upload" value="{{ old('tgl_upload', date('d/m/Y',strtotime($inovasi->tgl_launching))) }}">
</x-ladmin-form-group>

<x-ladmin-form-group name="poster_path" label="Poster *">
    <x-slot name="prepend">
        {!! ladmin()->icon('far fa-file-image') !!}
    </x-slot>

    <input type="file" placeholder="Poster" class="form-control" name="poster_path" id="poster_path" value="{{ old('poster_path', $inovasi->poster_path) }}">
</x-ladmin-form-group>


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

@if (isset($opd))
<x-ladmin-form-group name="id_ku" label="OPD *">
    <x-slot name="prepend">
        {!! ladmin()->icon('user-group') !!}
    </x-slot>

    <select name="id_opd" id="id_opd" class="form-control border-0">
        @foreach ($opd as $data )
        <option value="{{$data->id}}" {{isset($inovasi->id_opd) ? 'selected' : ''}}>{{$data->nama_opd}}</option>
        @endforeach
    </select>
</x-ladmin-form-group>
@endif
