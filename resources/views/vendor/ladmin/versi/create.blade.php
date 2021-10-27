<x-ladmin-layout>
    <x-slot name="title_page">Versi</x-slot>
    <x-slot name="title">Tambah Data Versi</x-slot>

    <form action="{{route('administrator.kelola.versi.store')}}" method="POST">
        @csrf

        @include('vendor.ladmin.versi._partials._form', ['versi' => (new App\Models\Versi)])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Submit
            </button>
        </div>

    </form>
</x-ladmin-layout>
