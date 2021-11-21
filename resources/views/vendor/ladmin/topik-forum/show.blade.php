<x-ladmin-layout>
    <x-slot name="title_page">Topik Forum</x-slot>
    <x-slot name="title">Detail Data Topik Forum</x-slot>
    <x-ladmin-card>
        <div class="table-responsive">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td><strong>Judul</strong></td>
                        <td>{{$topik->judul}}</td>
                    </tr>
                    {{-- <tr>
                        <td><strong>Deskripsi</strong></td>
                        <td class="text-justify">{{$topik->deskripsi}}</td>
                    </tr> --}}
                    <tr>
                        <td><strong>Layanan SPBE</strong></td>
                        <td>{{$topik->layanan_spbe}}</td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal Launching</strong></td>
                        <td>{{date('d-m-Y',strtotime($topik->tgl_launching))}}</td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal Upload</strong></td>
                        <td>{{date('d-m-Y',strtotime($topik->tgl_upload))}}</td>
                    </tr>
                    <tr>
                        <td><strong>Kategori Umum</strong></td>
                        <td>
                            @php
                                $kategori_umum = DB::table('kategori_umum')->select('kategori')->where('id',$topik->id_ku)->first();
                                echo $kategori_umum->kategori;
                            @endphp
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Elemen Smart</strong></td>
                        <td>
                            @php
                                foreach($esmart as $data) {
                                    $elemen = DB::table('elemen_smart')->select('element')->where('id',$data->id_esmart)->first();
                                    echo '<span class="badge bg-info">'.$elemen->element.'</span> ';
                                }
                            @endphp
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Status</strong></td>
                        <td>{!! $topik->status == 1 ? '<span class="badge bg-success">Diverifikasi</span>' : '<span class="badge bg-warning">Belum Diverifikasi</span>' !!}</td>
                    </tr>
                    <tr>
                        <td><strong>Poster</strong></td>
                        <td><img src="{{Storage::url($topik->poster_path)}}" alt="poster {{$topik->nama}}" width="50%" height="50%"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-ladmin-card>
</x-ladmin-layout>
