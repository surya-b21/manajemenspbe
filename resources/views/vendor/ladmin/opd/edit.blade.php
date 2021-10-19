<x-ladmin-layout>
    <x-slot name="title">Edit Data OPD</x-slot>

    <form action="{{route('administrator.account.opd.update', $opd->id)}}" method="POST">
        @csrf
        @method('PUT')

        @include('vendor.ladmin.opd._partials._form', ['opd' => $opd])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Update Data OPD
            </button>
          </div>
    </form>
</x-ladmin-layout>
