<x-ladmin-layout>
    <x-slot name="title">Edit Topik Forum</x-slot>

    <form action="{{route('administrator.kelola.topik-forum.update', $topik->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('vendor.ladmin.topik-forum._partials._form', ['topik' => $topik])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Update Data Topik Forum
            </button>
          </div>
    </form>
</x-ladmin-layout>
