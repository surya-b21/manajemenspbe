<x-ladmin-layout>
    <x-slot name="title">Tambah Kategori Forum</x-slot>

    <form action="{{route('administrator.kelola.kategori-forum.store')}}" method="POST">
        @csrf

        @include('vendor.ladmin.kategori-forum._partials._form', ['kategori' => (new App\Models\KategoriForum)])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Submit
            </button>
        </div>

    </form>
</x-ladmin-layout>
