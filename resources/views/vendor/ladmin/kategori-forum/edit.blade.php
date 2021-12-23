<x-ladmin-layout>
    <x-slot name="title">Edit Kategori Forum</x-slot>

    <form action="{{route('administrator.kelola.kategori-forum.update', $kategori->id)}}" method="POST">
        @csrf
        @method('PUT')

        @include('vendor.ladmin.kategori-forum._partials._form', ['kategori' => $kategori])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Update Kategori Forum
            </button>
          </div>
    </form>
</x-ladmin-layout>
