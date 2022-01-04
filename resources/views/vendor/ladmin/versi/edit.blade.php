<x-ladmin-layout>
    <x-slot name="title">Edit Versi</x-slot>

    <form action="{{route('administrator.kelola.inovasi.versi.update', $versi->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('vendor.ladmin.versi._partials._form', ['versi' => $versi])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Update Data Versi
            </button>
          </div>
    </form>
</x-ladmin-layout>
