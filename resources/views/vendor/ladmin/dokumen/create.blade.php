<x-ladmin-layout>
    <x-slot name="title">Tambah Dokumen</x-slot>

    <form action="{{route('administrator.kelola.dokumen.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('vendor.ladmin.dokumen._partials._form', ['dokumen' => (new App\Models\Dokumen)])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Submit
            </button>
        </div>

    </form>
</x-ladmin-layout>
