<x-ladmin-layout>
    <x-slot name="title">Edit Inovasi</x-slot>

    <form action="{{route('administrator.kelola.inovasi.update', $inovasi->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('vendor.ladmin.inovasi._partials._form', ['inovasi' => $inovasi])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Update Data Inovasi
            </button>
          </div>
    </form>
</x-ladmin-layout>
