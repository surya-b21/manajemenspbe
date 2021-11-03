<x-ladmin-layout>
    <x-slot name="title">Edit Kategori Umum</x-slot>

    <form action="{{route('administrator.kelola.kategori-umum.update', $kategori->id)}}" method="POST">
        @csrf
        @method('PUT')

        @include('vendor.ladmin.kategori-umum._partials._form', ['kategori' => $kategori])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Update Kategori Umum
            </button>
          </div>
    </form>
</x-ladmin-layout>
