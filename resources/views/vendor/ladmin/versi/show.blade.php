<x-ladmin-layout>
    <x-slot name="title_page">Versi</x-slot>
    <x-slot name="title">Detail Data Versi</x-slot>
    <x-ladmin-card>
        <div class="table-responsive">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td><strong>Nama</strong></td>
                        <td>{{$versi->nama}}</td>
                    </tr>
                    <tr>
                        <td><strong>Deskripsi</strong></td>
                        <td>{{$versi->deskripsi}}</td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal Launching</strong></td>
                        <td>{{date('d-m-Y', strtotime($versi->tgl_versi))}}</td>
                    </tr>
                    <tr>
                        <td><strong>Status</strong></td>
                        {!!$versi->status == 0 ? '<td><span class="badge bg-warning text-dark">Belum Diverifikasi</span></td>' : '<td><span class="badge bg-success text-dark">Diverifikasi</span></td>' !!}
                    </tr>
                </tbody>
            </table>
        </div>
    </x-ladmin-card>
</x-ladmin-layout>