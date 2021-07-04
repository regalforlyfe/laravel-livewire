<div class="pt-5" style="background-color: #f8fafc;">
    <div class="text-center">
        <img src="{{ asset('asset/ellipse.png') }}" height="150" alt="logo" loading="lazy">
        <h2 class="pt-5">Mahasiswa</h2>
    </div>

    <ul class="nav nav-tabs justify-content-center pt-5" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="listproyek-tab" data-toggle="tab" href="#listproyek" role="tab"
                aria-controls="listproyek" aria-selected="true">
                <h3>List Proyek</h3>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tentang-tab" data-toggle="tab" href="#tentang" role="tab" aria-controls="tentang"
                aria-selected="false" style="color:black">
                <h3>Tentang</h3>
            </a>
        </li>
    </ul>

    <div style="background-color: #F2F3F5;">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="listproyek" role="tabpanel" aria-labelledby="listproyek-tab">
                <livewire:proyek></livewire:proyek>
            </div>
            <div class="tab-pane fade" id="tentang" role="tabpanel" aria-labelledby="tentang-tab">
                <div class="container pt-5 pb-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 p-5">
                                    <table class="table-lg">
                                        <tbody>
                                            <tr>
                                                <td class="pb-4">
                                                    <h5>Nama Lengkap</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pb-4">
                                                    <h5>NIM</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pb-4">
                                                    <h5>Prodi</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pb-5">
                                                    <h5>Alamat</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pb-4">
                                                    <h5>Email</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pb-4">
                                                    <h5>Social Media</h5>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-md-1">
                                    <img src="{{ asset('asset/line 2.png') }}" height="500" alt="logo" loading="lazy">
                                </div>

                                <div class="col-md-6 p-5">
                                    <table class="table-lg">
                                        <tbody>
                                            @foreach ($user->where('id', Auth::user()->id) as $index => $user)
                                                <tr>
                                                    <td class="pb-4">
                                                        <h5>{{ $user->nama }}</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pb-4">
                                                        <h5>{{ $user->id_card }}</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pb-4">
                                                        <h5>{{ $user->prodi }}</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pb-5">
                                                        <h5>{{ $user->alamat }}</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pb-4">
                                                        <h5>{{ $user->email }}</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pb-4">
                                                        <h5>{{ $user->social_media }}</h5>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
