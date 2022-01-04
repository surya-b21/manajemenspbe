<x-ladmin-layout>
    <x-slot name="title_page">Dokumen</x-slot>
    <x-slot name="title">Tambah Dokumen</x-slot>

    <form action="{{route('administrator.kelola.inovasi.dokumen.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div id="form-field">
            @include('vendor.ladmin.dokumen._partials._form', ['dokumen' => (new App\Models\Dokumen)])
        </div>

        <div class="text-right">
            <button type="button" class="btn btn-warning" id="tambah">
                Tambah File
            </button>
            <button type="submit" class="btn btn-primary">
              Submit
            </button>
        </div>

    </form>

    <x-slot name="scripts">
        <script>
            var string = '<div id="wrapper"><div class="text-right"><button class="btn btn-danger" id="kurang"><i class="fas fa-times-circle"></i></button></div><br><div class="form-group row ladmin-form-group"><label for="judul" class="col-md-4 col-form-label font-weight-bold">Judul *</label> <div class="col-md-8"><div class="input-group border rounded"><div class="input-group-prepend"><span class="input-group-text bg-white border-0"><svg class="svg-inline--fa fa-pencil-alt fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pencil-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M497.9 142.1l-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8L21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z"></path></svg><!-- <i class="fas fa-pencil-alt"></i> Font Awesome fontawesome.com --></span></div> <input type="text" placeholder="Judul" name="judul[]" id="judul" value="" class="form-control"></div></div></div> <div class="form-group row ladmin-form-group"><label for="file_path" class="col-md-4 col-form-label font-weight-bold">File *</label> <div class="col-md-8"><div class="input-group border rounded"><div class="input-group-prepend"><span class="input-group-text bg-white border-0"><svg class="svg-inline--fa fa-file fa-w-12" aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z"></path></svg><!-- <i class="far fa-file"></i> Font Awesome fontawesome.com --></span></div> <input type="file" placeholder="File" name="file_path[]" id="file_path" class="form-control"></div></div></div></div>';
            $(function() {
                $('#tambah').click(function(e) {
                    e.preventDefault();
                    $('#form-field').append(string)
                })
            })

            kurang('#kurang')
            function kurang(data) {
                $(document).on('click',data,function(e) {
                    e.preventDefault();
                    $('#wrapper').remove()
                })
            }
        </script>
    </x-slot>
</x-ladmin-layout>
