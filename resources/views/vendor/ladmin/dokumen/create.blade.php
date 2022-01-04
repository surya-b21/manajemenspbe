<x-ladmin-layout>
    <x-slot name="title_page">Dokumen</x-slot>
    <x-slot name="title">Tambah Dokumen</x-slot>

    <form action="{{route('administrator.kelola.inovasi.dokumen.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('vendor.ladmin.dokumen._partials._form', ['dokumen' => (new App\Models\Dokumen), 'id' => $id])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Submit
            </button>
        </div>

    </form>
</x-ladmin-layout>
