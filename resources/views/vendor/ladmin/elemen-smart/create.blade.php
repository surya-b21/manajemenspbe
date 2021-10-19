<x-ladmin-layout>
    <x-slot name="title">Tambah Elemen Smart</x-slot>

    <form action="{{route('administrator.konten.elemen-smart.store')}}" method="POST">
        @csrf

        @include('vendor.ladmin.elemen-smart._partials._form', ['esmart' => (new App\Models\ElemenSmart)])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Submit
            </button>
        </div>

    </form>
</x-ladmin-layout>
