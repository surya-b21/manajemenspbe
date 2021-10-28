<x-ladmin-layout>
    <x-slot name="title">Edit Dokumen</x-slot>

    <form action="{{route('administrator.kelola.dokumen.update', $dokumen->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('vendor.ladmin.dokumen._partials._form', ['dokumen' => $dokumen])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Update Data Dokumen
            </button>
          </div>
    </form>
</x-ladmin-layout>
