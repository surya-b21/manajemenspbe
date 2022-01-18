<x-ladmin-layout>
    <x-slot name="title">Detail Data Developer</x-slot>
    <x-ladmin-card>
        <div class="table-responsive">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td><strong>Nama</strong></td>
                        <td>{{$developer->nama_dev}}</td>
                    </tr>
                    <tr>
                        <td><strong>Alamat</strong></td>
                        <td>{{$developer->alamat_dev}}</td>
                    </tr>
                    <tr>
                        <td><strong>NPWP</strong></td>
                        <td>{{$developer->npwp_dev}}</td>
                    </tr>
                    <tr>
                        <td><strong>Telepon</strong></td>
                        <td>{{$developer->telepon_dev}}</td>
                    </tr>
                    <tr>
                        <td><strong>Foto</strong></td>
                        <td><img src="{{Storage::url($developer->foto_dev_path)}}" alt="foto {{$developer->nama_dev}}" width="50%" height="50%"></td>
                    </tr>
                    <tr>
                        <td><strong>Aplikasi</strong></td>
                        <td>
                            <?php foreach ($versi as $versi) {
                                if ($versi->id_dev == $id) {

                            ?>

                                    <?php for ($i = 0; $i < count($inovasi); $i++) {
                                        if ($versi->id_inovasi == $inovasi[$i]->id) {
                                    ?>
                                            {{$inovasi[$i]->nama}} ->
                                    <?php }
                                    } ?>
                                    {{$versi->nama}}
                                    <br />

                            <?php
                                }
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-ladmin-card>
</x-ladmin-layout>