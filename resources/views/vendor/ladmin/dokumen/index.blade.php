<x-ladmin-layout>
    <x-slot name="title_page">Dokumen</x-slot>
    <x-slot name="title">Kelola Dokumen</x-slot>
    <x-slot name="buttons">
        <a href="{{ route('administrator.kelola.inovasi.dokumen.create', ['back' => request()->fullUrl(), 'id' => $id]) }}" class="btn btn-sm btn-primary">Tambah Dokumen</a>
    </x-slot>
    <x-ladmin-card>
        <div class="table-responsive">
            <table class="table" id="dokumen">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </x-ladmin-card>
    <x-slot name="scripts">
        <script>
            $(function() {
                $('#dokumen').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{route('administrator.kelola.inovasi.dokumen.get', $id)}}",
                    columns: [
                        {data: "DT_RowIndex", name: "DT_RowIndex", orderable : false, class: 'text-center'},
                        {data: "judul", name: "judul"},
                        {data: "aksi", name: "aksi", orderable : false, class: 'text-center'}
                    ]
                })
            })
        </script>
    </x-slot>
</x-ladmin-layout>
