<div style="background-color: #F2F3F5;">
    <div class="text-center">
        <h3 class="pt-5">Input Proyek</h3>
    </div>
    <div class="container pt-5 pb-5">
        <div class="card p-5">
            <div class="card-body">
                <form wire:submit.prevent="store">
                    <div class="form-group">
                        <label>Gambar Proyek</label>
                        <div class="custom-file">
                            <input wire:model="image" type="file" class="form-control" id="customFile">
                            <label for="customFile" class="custom-file-label">Choose Image</label>
                            @error('image') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        @if($image)
                        <label class="mt-3">Image Preview</label>
                        <img src="{{$image->temporaryUrl()}}" height="30" class="img-fluid" alt="Preview Image">
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Judul Proyek</label>
                        <input wire:model="judul_proyek" type="text" class="form-control">
                        @error('judul_proyek') <small class="text-danger">{{$message}}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label>Tahun</label>
                        <input wire:model="tahun" type="text" class="form-control">
                        @error('tahun') <small class="text-danger">{{$message}}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Proyek</label>
                        <textarea wire:model="deskripsi_proyek" class="form-control"></textarea>
                        @error('deskripsi_proyek') <small class="text-danger">{{$message}}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label>Jenis Proyek</label>
                        <input wire:model="jenis_proyek" type="text" class="form-control">
                        @error('jenis_proyek') <small class="text-danger">{{$message}}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select wire:model="id_kategori" class="form-control">
                            @foreach($kategori as $value)
                            <option value="{{$value->id}}">{{$value->nama_kategori}}</option>
                            @endforeach
                        </select>
                        @error('kategori') <small class="text-danger">{{$message}}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label>Pembimbing</label>
                        <input wire:model="id_dosen" type="text" class="form-control">
                        @error('id_dosen') <small class="text-danger">{{$message}}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label>Link Proyek</label>
                        <input wire:model="link_proyek" type="text" class="form-control">
                        @error('link_proyek') <small class="text-danger">{{$message}}</small>@enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <h2>{{ $image }}</h2>
    <h2>{{ $judul_proyek }}</h2>

    <div class="container pt-5 pb-5">
        <div class="card p-5">
            @foreach($proyek as $index=>$proyek)
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <!-- <img src="{{asset('storage/images/', $proyek->image)}}" height="300" width="200" alt="gambar proyek" loading="lazy"> -->
                    </div>
                    <div class="col-md-9">
                        <table class="table-lg">
                            <tbody>
                                <tr>
                                    <td>Judul Proyek</td>
                                    <td>:</td>
                                    <td>{{$proyek->judul_proyek}}</td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>:</td>
                                    <td>{{$proyek->deskripsi_proyek}}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Proyek</td>
                                    <td>:</td>
                                    <td>{{$proyek->jenis_proyek}}</td>
                                </tr>
                                <tr>
                                    <td>Kategori</td>
                                    <td>:</td>
                                    <td>{{$proyek->id_kategori}}</td>
                                </tr>
                                <tr>
                                    <td>Pembimbing</td>
                                    <td>:</td>
                                    <td>{{$proyek->id_dosen}}</td>
                                </tr>
                                <tr>
                                    <td>Anggota Proyek</td>
                                    <td>:</td>
                                    <td>{{$proyek->id_anggota}}</td>
                                </tr>
                                <tr>
                                    <td>Link Proyek</td>
                                    <td>:</td>
                                    <td>{{$proyek->link_proyek}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script>

    </script>