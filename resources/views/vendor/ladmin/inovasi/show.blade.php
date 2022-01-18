<x-ladmin-layout>
    <x-slot name="title_page">Inovasi</x-slot>
    <x-slot name="title">Detail Data Inovasi</x-slot>
    <x-ladmin-card>
        <div class="table-responsive">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td><strong>Nama</strong></td>
                        <td>{{$inovasi->nama}}</td>
                    </tr>
                    <tr>
                        <td><strong>Deskripsi</strong></td>
                        <td class="text-justify">{{$inovasi->deskripsi}}</td>
                    </tr>
                    <tr>
                        <td><strong>Layanan SPBE</strong></td>
                        <td>{{$inovasi->layanan_spbe}}</td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal Launching</strong></td>
                        <td>{{date('d-m-Y',strtotime($inovasi->tgl_launching))}}</td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal Upload</strong></td>
                        <td>{{date('d-m-Y',strtotime($inovasi->tgl_upload))}}</td>
                    </tr>
                    <tr>
                        <td><strong>Elemen Smart</strong></td>
                        <td>
                            @php
                            $elemen = DB::table('elemen_smart_forum')->select('element')->where('id',$kategori->id_smart)->first();
                            echo '<span class="badge bg-info">'.$elemen->element.'</span> ';
                            @endphp
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Kategori Umum</strong></td>
                        <td>
                            @php
                            $kategori_umum = DB::table('kategori_umum')->select('kategori')->where('id',$inovasi->id_ku)->first();
                            echo '<span class="badge bg-success">'.$kategori_umum->kategori.'</span> ';
                            @endphp
                        </td>
                    </tr>
                    <tr>
                        <td><strong>OPD</strong></td>
                        <td>
                            @php
                            $elemen = DB::table('opd')->select('nama_opd')->where('id',$kategori->id_opd)->first();
                            echo '<span class="badge bg-success">'.$elemen->nama_opd.'</span> ';
                            @endphp
                        </td>
                    </tr>
                    <tr>

                    <tr>
                        <td><strong>Status</strong></td>
                        <td>{!! $inovasi->status == 1 ? '<span class="badge bg-success">Diverifikasi</span>' : '<span class="badge bg-warning">Belum Diverifikasi</span>' !!}</td>
                    </tr>
                    <tr>
                        <td><strong>Poster</strong></td>
                        <td><img src="{{Storage::url($inovasi->poster_path)}}" alt="poster {{$inovasi->nama}}" width="50%" height="50%"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-ladmin-card>
</x-ladmin-layout>