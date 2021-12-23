<x-ladmin-layout>
    <x-slot name="title_page">Topik Forum</x-slot>
    <x-slot name="title">Tambah Topik Forum</x-slot>

    <form action="{{route('administrator.kelola.topik-forum.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('vendor.ladmin.topik-forum._partials._form', ['topik' => (new App\Models\TopikForum)])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Submit
            </button>
        </div>

    </form>
</x-ladmin-layout>
