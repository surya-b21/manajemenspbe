<x-ladmin-layout>
    <x-slot name="title">Tambah Data OPD</x-slot>

    <form action="{{route('administrator.account.opd.store')}}" method="POST">
        @csrf

        @include('vendor.ladmin.opd._partials._form', ['opd' => (new App\Models\Opd)])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Submit
            </button>
        </div>

    </form>
</x-ladmin-layout>
