<x-ladmin-layout>
    <x-slot name="title">Tambah Developer</x-slot>

    <form action="{{route('administrator.kelola.developer.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('vendor.ladmin.developer._partials._form', ['developer' => (new App\Models\Developer)])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Submit
            </button>
        </div>

    </form>
</x-ladmin-layout>
