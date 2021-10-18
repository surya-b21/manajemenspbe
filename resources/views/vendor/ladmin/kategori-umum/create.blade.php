<x-ladmin-layout>
    <x-slot name="title">Tambah Kategori Umum</x-slot>

    <form action="{{route('administrator.konten.kategori-umum.store')}}" method="POST">
        @csrf

        @include('vendor.ladmin.kategori-umum._partials._form', ['kategori' => (new App\Models\KategoriUmum)])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Submit
            </button>
        </div>

    </form>
</x-ladmin-layout>
