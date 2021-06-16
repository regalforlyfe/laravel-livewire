<div>
<div style="background-color: #F2F3F5;">
    <div class="text-center">
        <h3 class="pt-5">Input Proyek</h3>
    </div>
    <div class="container pt-5 pb-5">
        <div class="card p-5">
            <div class="card-body">
                <form wire:submit.prevent="store/{{$proyek->id}}">
                    <!-- <input type="text" value="{{$proyek->id}}" wire:model="id_proyek"> -->
                    
                    <div class="form-group">
                        <label>Anggota 1</label>
                        <select wire:model="id_mahasiswa1" class="form-control">
                            <option value="">Pilih salah satu</option>
                            @foreach($users as $value)
                            <option value="{{$value->id}}">{{$value->nama}}</option>
                            @endforeach
                        </select>
                        @error('$id_mahasiswa') <small class="text-danger">{{$message}}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label>Anggota 2</label>
                        <select wire:model="id_mahasiswa2" class="form-control">
                            <option value="">Pilih salah satu</option>
                            @foreach($users as $value)
                            <option value="{{$value->id}}">{{$value->nama}}</option>
                            @endforeach
                        </select>
                        @error('$id_mahasiswa') <small class="text-danger">{{$message}}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label>Anggota 3</label>
                        <select wire:model="id_mahasiswa3" class="form-control">
                            <option value="">Pilih salah satu</option>
                            @foreach($users as $value)
                            <option value="{{$value->id}}">{{$value->nama}}</option>
                            @endforeach
                        </select>
                        @error('$id_mahasiswa') <small class="text-danger">{{$message}}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label>Anggota 4</label>
                        <select wire:model="id_mahasiswa4" class="form-control">
                            <option value="">Pilih salah satu</option>
                            @foreach($users as $value)
                            <option value="{{$value->id}}">{{$value->nama}}</option>
                            @endforeach
                        </select>
                        @error('$id_mahasiswa') <small class="text-danger">{{$message}}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label>Anggota 5</label>
                        <select wire:model="id_mahasiswa5" class="form-control">
                            <option value="">Pilih salah satu</option>
                            @foreach($users as $value)
                            <option value="{{$value->id}}">{{$value->nama}}</option>
                            @endforeach
                        </select>
                        @error('$id_mahasiswa') <small class="text-danger">{{$message}}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label>Anggota 6</label>
                        <select wire:model="id_mahasiswa6" class="form-control">
                            <option value="">Pilih salah satu</option>
                            @foreach($users as $value)
                            <option value="{{$value->id}}">{{$value->nama}}</option>
                            @endforeach
                        </select>
                        @error('$id_mahasiswa') <small class="text-danger">{{$message}}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label>Anggota 7</label>
                        <select wire:model="id_mahasiswa7" class="form-control">
                            <option value="">Pilih salah satu</option>
                            @foreach($users as $value)
                            <option value="{{$value->id}}">{{$value->nama}}</option>
                            @endforeach
                        </select>
                        @error('$id_mahasiswa') <small class="text-danger">{{$message}}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label>Anggota 8</label>
                        <select wire:model="id_mahasiswa8" class="form-control">
                            <option value="">Pilih salah satu</option>
                            @foreach($users as $value)
                            <option value="{{$value->id}}">{{$value->nama}}</option>
                            @endforeach
                        </select>
                        @error('$id_mahasiswa') <small class="text-danger">{{$message}}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label>Anggota 9</label>
                        <select wire:model="id_mahasiswa9" class="form-control">
                            <option value="">Pilih salah satu</option>
                            @foreach($users as $value)
                            <option value="{{$value->id}}">{{$value->nama}}</option>
                            @endforeach
                        </select>
                        @error('$id_mahasiswa') <small class="text-danger">{{$message}}</small>@enderror
                    </div>

                    <div class="form-group">
                        <label>Anggota 10</label>
                        <select wire:model="id_mahasiswa10" class="form-control">
                            <option value="">Pilih salah satu</option>
                            @foreach($users as $value)
                            <option value="{{$value->id}}">{{$value->nama}}</option>
                            @endforeach
                        </select>
                        @error('$id_mahasiswa') <small class="text-danger">{{$message}}</small>@enderror
                    </div>

                                        
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
