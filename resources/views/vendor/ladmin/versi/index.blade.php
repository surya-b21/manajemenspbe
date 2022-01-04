<x-ladmin-layout>
    <x-slot name="title_page">Versi</x-slot>
    <x-slot name="title">Kelola Versi</x-slot>
    <x-slot name="buttons">
        <a href="{{ route('administrator.kelola.inovasi.versi.create', ['back' => request()->fullUrl(), 'id' => $id]) }}" class="btn btn-sm btn-primary">Tambah Versi</a>
    </x-slot>
    <x-ladmin-card>
        <div class="table-responsive">
            <table class="table" id="versi">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Versi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </x-ladmin-card>
    <x-slot name="scripts">
        <script>
            $(function() {
                $('#versi').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{route('administrator.kelola.inovasi.versi.get', $id)}}",
                    columns: [
                        {data: "DT_RowIndex", name: "DT_RowIndex", orderable : false, class: 'text-center'},
                        {data: "nama", name: "nama"},
                        {data: "aksi", name: "aksi", orderable : false, class: 'text-center', searchable: false}
                    ]
                })
            })
        </script>
    </x-slot>
</x-ladmin-layout>
