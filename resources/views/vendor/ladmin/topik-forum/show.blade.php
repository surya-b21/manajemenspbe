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
                        <td><strong>Isi</strong></td>
                        <td>{!! $topik->isi !!}</td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal Pembuatan</strong></td>
                        <td>{{date('d-m-Y',strtotime($topik->created_at))}}</td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal Update</strong></td>
                        <td>{{date('d-m-Y',strtotime($topik->updated_at))}}</td>
                    </tr>
                    <tr>
                        <td><strong>Kategori Forum</strong></td>
                        <td>
                            @php
                            $kategori_forum = DB::table('kategori_forum')->select('kategori')->where('id',$topik->id_kf)->first();
                            echo $kategori_forum->kategori;
                            @endphp
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Foto</strong></td>
                        <td>
                            <img src="{{Storage::url($topik->foto_path)}}" alt="foto {{$topik->judul}}" width="50%" height="50%">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-ladmin-card>
</x-ladmin-layout>