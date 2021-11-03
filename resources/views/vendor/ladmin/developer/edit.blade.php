<x-ladmin-layout>
    <x-slot name="title">Edit Developer</x-slot>

    <form action="{{route('administrator.kelola.developer.update', $developer->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('vendor.ladmin.developer._partials._form', ['developer' => $developer])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Update Data Developer
            </button>
          </div>
    </form>
</x-ladmin-layout>
