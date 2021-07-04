<div>
    @if ($statusUpdate)
    <livewire:proyek-update></livewire:proyek-update>
    @endif

    @foreach ($proyek as $index => $proyek)
        <div class="container pt-5 pb-4">
            <div class="card">
                <div class="container">
                    <div class="row">
                        <div class="col align-self-end text-right">
                            <div class="dropdown">
                                <button type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <button wire:click="destroy({{ $proyek->id}})" class="dropdown-item" style="color: red" href="#">Delete</button>
                                    <button wire:click="getProyek({{ $proyek->id}})" class="dropdown-item" href="#">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pb-5 pl-5 pr-5">
                    <div class="row">
                        <div class="col-md-3">
                            <div>
                                <img src="{{ url('storage/images/', $proyek->image) }}" height="300" width="200"
                                    alt="gambar proyek" loading="lazy">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="align-middle">
                                <table class="table-lg" style="height: 300px">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h5>Judul Proyek</h5>
                                            </td>
                                            <td class="pr-5 pl-5">
                                                <h5>:</h5>
                                            </td>
                                            <td>
                                                <h5>{{ $proyek->judul_proyek }}</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5>Deskripsi</h5>
                                            </td>
                                            <td class="pr-5 pl-5">
                                                <h5>:</h5>
                                            </td>
                                            <td>
                                                <h5>{{ $proyek->deskripsi_proyek }}</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5>Jenis Proyek</h5>
                                            </td>
                                            <td class="pr-5 pl-5">
                                                <h5>:</h5>
                                            </td>
                                            <td>
                                                <h5>{{ $proyek->jenis_proyek }}</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5>Kategori</h5>
                                            </td>
                                            <td class="pr-5 pl-5">
                                                <h5>:</h5>
                                            </td>
                                            <td>
                                                <h5>{{ $proyek->id_kategori }} </h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5>Pembimbing</h5>
                                            </td>
                                            <td class="pr-5 pl-5">
                                                <h5>:</h5>
                                            </td>
                                            <td>
                                                @foreach ($anggota as $value)
                                                <h5>{{ $value->id_dosen }}</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5>Anggota Proyek</h5>
                                            </td>
                                            <td class="pr-5 pl-5">
                                                <h5>:</h5>
                                            </td>
                                            <td>
                                                <h5>{{ $value->id_mahasiswa }}</h5>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5>Link Proyek</h5>
                                            </td>
                                            <td class="pr-5 pl-5">
                                                <h5>:</h5>
                                            </td>
                                            <td>
                                                <h5>{{ $proyek->link_proyek }}</h5>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
