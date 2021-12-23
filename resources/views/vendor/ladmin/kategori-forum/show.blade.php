<x-ladmin-layout>
    <x-slot name="title_page">Kategori Forum</x-slot>
    <x-slot name="title">Detail Data Kategori Forum</x-slot>
    <x-ladmin-card>
        <div class="table-responsive">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td><strong>Kategori</strong></td>
                        <td>{{$kf->kategori}}</td>
                    </tr>
                    <tr>
                        <td><strong>Kategori Parent</strong></td>
                        <td>{!! $kf->parent !!}</td>                        
                    </tr>
                    <tr>
                        <td><strong>Level</strong></td>
                        <td>{!! $kf->level !!}</td>                        
                    </tr>

                </tbody>
            </table>
        </div>
    </x-ladmin-card>
</x-ladmin-layout>
