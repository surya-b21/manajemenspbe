<x-ladmin-layout>
    <x-slot name="title_page">Versi</x-slot>
    <x-slot name="title">Verifikasi Versi</x-slot>
    <x-slot name="styles">
            <link
              rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
            />
    </x-slot>

    <x-ladmin-card>
        <div class="table-responsive">
            <table class="table" id="versi">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <tbody>
                    </tbody>
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
                    ajax: "{{route('administrator.verifikasi.versi.get')}}",
                    columns: [
                        {data : "DT_RowIndex", name : "DT_RowIndex", orderable : false, class: 'text-center'},
                        {data : "nama", name : "nama"},
                        {data : "status", name : "status", class: 'text-center'},
                        {data : 'aksi', name : 'aksi', class: 'text-center'},
                    ],
                    columnDefs: [{
                        "defaultContent": "-",
                        "targets": "_all"
                    }],
                });
            })

            @if ($pesan = Session::get('sukses'))
            Swal.fire({
                icon: 'success',
                title: '{{$pesan}}'
            })
            @endif

            batal('#batal-verif')
            function batal(data) {
                $(document).on('click',data,function () {
                    var url = $(this).data('url')

                    Swal.fire({
                        icon: 'warning',
                        title: 'Apakah anda yakin ingin membatalkan verifikasi ?',
                        showCancelButton: true,
                        confirmButtonText: 'Ya',
                        confirmButtonColor: '#5CB85C',
                        cancelButtonText: 'Batal',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    }).then((result) => {
                        if(result.isConfirmed) {
                            window.location.replace(url)
                        }
                    })
                })
            }
        </script>
    </x-slot>
</x-ladmin-layout>
