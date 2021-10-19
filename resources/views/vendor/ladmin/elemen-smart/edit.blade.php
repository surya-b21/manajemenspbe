<x-ladmin-layout>
    <x-slot name="title">Edit Elemen Smart</x-slot>

    <form action="{{route('administrator.konten.elemen-smart.update', $esmart->id)}}" method="POST">
        @csrf
        @method('PUT')

        @include('vendor.ladmin.elemen-smart._partials._form', ['esmart' => $esmart])

        <div class="text-right">
            <button type="submit" class="btn btn-primary">
              Update Elemen Smart
            </button>
          </div>
    </form>
</x-ladmin-layout>
