<x-ladmin-layout>
    <x-slot name="title_page">Dokumen</x-slot>
    <x-slot name="title">Detail Data Dokumen</x-slot>
    <x-ladmin-card>
        <div class="table-responsive">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td><strong>Judul</strong></td>
                        <td>{{ $dokumen->judul }}</td>
                    </tr>
                    <tr>
                        <td><strong>File</strong></td>
                        <td><a href="{{ Storage::download($dokumen->file_path) }}">Download File</a></td>
                    </tr>
                    <tr>
                        <td><strong>Inovasi</strong></td>
                        <td>{{ $dokumen->inovasi->nama }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-ladmin-card>
</x-ladmin-layout>
