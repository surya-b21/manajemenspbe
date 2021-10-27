<x-ladmin-layout>
    <x-slot name="title_page">Inovasi</x-slot>
    <x-slot name="title">Tambah Inovasi</x-slot>

    <form action="{{route('administrator.kelola.inovasi.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('vendor.ladmin.inovasi._partials._form', ['inovasi' => (new App\Models\Inovasi)])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Submit
            </button>
        </div>

    </form>
</x-ladmin-layout>
