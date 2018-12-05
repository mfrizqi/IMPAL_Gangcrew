@extends('layouts.app')

@section('title', 'Admin')

@section('content')
<div style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.3)), url('image/bg_3.jpg');background-size: cover;">
    <section class="ftco-section mt-0">
        <div class="container">
            <h1 class="text-white mt-5 mb-5 text-center">Pusat kelola admin</h1>
            <div class="row">
                <div class="col-md-8 text-center">
                    <div class="card-group">
                        <div class="card">
                            <div class="card-body">
                                <i class="far fa-building" style="font-size: 5rem"></i>
                                <p class="card-text mt-3 mb-0" style="font-size: 1.7rem; font-weight: 600">{{$ck}}</p>
                                <p class="card-text" style="font-size: 1.2rem">Kamar</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-user-tie" style="font-size: 5rem"></i>
                                <p class="card-text mt-3 mb-0" style="font-size: 1.7rem; font-weight: 600">{{$cp}}</p>
                                <p class="card-text" style="font-size: 1.2rem">Pegawai</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-users" style="font-size: 5rem"></i>
                                <p class="card-text mt-3 mb-0" style="font-size: 1.7rem; font-weight: 600">{{$ct}}</p>
                                <p class="card-text" style="font-size: 1.2rem">Tamu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-chart-line" style="font-size: 5rem"></i>
                            <p class="card-text mb-4" style="font-size: 1.2rem">Statistik</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#statistik">Lihat
                                detail</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills d-flex justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#kamar"><i class="far fa-building"></i>
                                Kamar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#pegawai"><i class="fas fa-user-tie"></i>
                                Pegawai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#tamu"><i class="fas fa-users"></i> Tamu</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane container active pt-4" id="kamar">
                            <div class="row">
                                @foreach($kamars as $k)
                                <div class="col-md-4 ftco-animate">
                                    <div class="room-wrap">
                                        <a href="#" class="room-img" style="background-image: url(image/kamar/{{$k->foto_kamar}});"></a>
                                        <div class="text p-4">
                                            <div class="d-flex mb-1">
                                                <div class="one-third">
                                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                                            class="icon-star"></span><span class="icon-star"></span><span
                                                            class="icon-star-half-full"></span></p>
                                                    <h3><a href="#">{{$k->jenis_kamar}} Room</a></h3>
                                                </div>
                                                <div class="one-forth text-center">
                                                    <p class="price">Rp. {{$k->harga_kamar}} <br><span>/night</span></p>
                                                </div>
                                            </div>
                                            <p class="features">
                                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for
                                                    traveling couples</span>
                                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast
                                                    included</span>
                                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double
                                                    beds</span>
                                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting
                                                    facilities</span>
                                                <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                                            </p>
                                            <p><a href="#kelola{{$k->id}}" class="btn btn-primary" data-toggle="modal">Kelola
                                                    kamar</a></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- The Modal -->
                                <div class="modal" id="kelola{{$k->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Kelola kamar</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <!-- Nav pills -->
                                                <ul class="nav nav-pills">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="pill" href="#perbaruiKamar">Perbarui</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="pill" href="#hapusKamar">Hapus</a>
                                                    </li>
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane container active" id="perbaruiKamar">
                                                        <br>
                                                        <form action="{{route('kamar.update', $k->id)}}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PATCH')
                                                            <div class="form-group">
                                                                <select name="jenis" id="jenis" class="form-control">
                                                                    <option value="Bronze">Bronze</option>
                                                                    <option value="Silver">Silver</option>
                                                                    <option value="Gold">Gold</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="foto">Unggah foto kamar: </label>
                                                                <input type="file" name="foto_kamar" id="foto" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="number" name="harga" class="form-control"
                                                                    placeholder="Harga" value="{{$k->harga_kamar}}">
                                                            </div>
                                                            <button type="submit" class="btn btn-success">Rekam data</button>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane container fade" id="hapusKamar">
                                                        <br>
                                                        <form action="{{route('kamar.destroy', $k->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <p>Apakah anda yakin ?</p>
                                                            <button type="submit" class="btn btn-danger">Ya</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane container fade pt-4" id="pegawai">
                            <div class="row">
                                @foreach($pegawai as $p)
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="https://gravatar.com/avatar/{{encrypt($p->email)}}" alt="avatar"
                                                    style="width: 100px; height: 100px; border-radius: 50%">
                                                <p class="card-text mt-3 mb-0" style="font-size: 2rem">{{$p->name}}</p>
                                                <p class="card-text" style="font-size: 1.5rem">{{$p->email}}</p>
                                                <p><a href="#kelolaPegawai{{$p->id}}" class="btn btn-primary" data-toggle="modal">Kelola
                                                        pegawai</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- The Modal -->
                                <div class="modal" id="kelolaPegawai{{$p->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Kelola pegawai</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <!-- Nav pills -->
                                                <ul class="nav nav-pills">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="pill" href="#perbaruiPegawai">Perbarui</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="pill" href="#hapusPegawai">Hapus</a>
                                                    </li>
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane container active" id="perbaruiPegawai">
                                                        <br>
                                                        <form action="{{route('user.update', $p->id)}}" method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            <div class="form-group">
                                                                <input type="text" name="nama" class="form-control"
                                                                    placeholder="Nama" value="{{$p->name}}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" name="email_user" class="form-control"
                                                                    placeholder="Alamat surel" value="{{$p->email}}"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea name="almt" id="alamat" cols="30" rows="10"
                                                                    class="form-control" value="{{$p->alamat}}"
                                                                    required>Alamat</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="number" name="umr" class="form-control"
                                                                    placeholder="Umur" value="{{$p->umur}}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="number" name="tlp" class="form-control"
                                                                    placeholder="No. Telpon" value="{{$p->no_tlp}}"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="number" name="gji" class="form-control"
                                                                    placeholder="Gaji" value="{{$p->gaji}}" required>
                                                            </div>
                                                            <button type="submit" class="btn btn-success">Perbarui data</button>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane container fade" id="hapusPegawai">
                                                        <br>
                                                        <form action="{{route('user.destroy', $p->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <p>Apakah anda yakin ?</p>
                                                            <button type="submit" class="btn btn-danger">Ya</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane container fade pt-4" id="tamu">
                            @foreach($tamu as $p)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="https://gravatar.com/avatar/{{encrypt($p->email)}}" alt="avatar"
                                                style="width: 100px; height: 100px; border-radius: 50%">
                                            <p class="card-text mt-3 mb-0" style="font-size: 2rem">{{$p->name}}</p>
                                            <p class="card-text" style="font-size: 1.5rem">{{$p->email}}</p>
                                            <p><a href="#kelolaTamu{{$p->id}}" class="btn btn-primary" data-toggle="modal">Kelola
                                                    tamu</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- The Modal -->
                            <div class="modal" id="kelolaTamu{{$p->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Kelola tamu</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <!-- Nav pills -->
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="pill" href="#perbaruiTamu">Perbarui</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#hapusTamu">Hapus</a>
                                                </li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane container active" id="perbaruiTamu">
                                                    <br>
                                                    <form action="{{route('user.update', $p->id)}}" method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="form-group">
                                                            <input type="text" name="nama" class="form-control"
                                                                placeholder="Nama" value="{{$p->name}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" name="email_user" class="form-control"
                                                                placeholder="Alamat surel" value="{{$p->email}}"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea name="almt" id="alamat" cols="30" rows="10" class="form-control"
                                                                value="{{$p->alamat}}" required>Alamat</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="number" name="umr" class="form-control"
                                                                placeholder="Umur" value="{{$p->umur}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="number" name="tlp" class="form-control"
                                                                placeholder="No. Telpon" value="{{$p->no_tlp}}"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="number" name="gji" class="form-control"
                                                                placeholder="Gaji" value="{{$p->gaji}}" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-success">Perbarui data</button>
                                                    </form>
                                                </div>
                                                <div class="tab-pane container fade" id="hapusTamu">
                                                    <br>
                                                    <form action="{{route('user.destroy', $p->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <p>Apakah anda yakin ?</p>
                                                        <button type="submit" class="btn btn-danger">Ya</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#input" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000">
    <i class="fas fa-plus"></i> Tambah data
</button>


<!-- The Modal -->
<div class="modal" id="statistik">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Statistik</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <canvas id="performa"></canvas>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal" id="input">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <!-- Nav pills -->
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#inputKamar">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#inputPegawai">Pegawai</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="inputKamar">
                        <br>
                        <form action="{{route('kamar.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <select name="jenis" id="jenis" class="form-control">
                                    <option value="Bronze">Bronze</option>
                                    <option value="Silver">Silver</option>
                                    <option value="Gold">Gold</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="foto">Unggah foto kamar: </label>
                                <input type="file" name="foto_kamar" id="foto" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="number" name="harga" class="form-control" placeholder="Harga">
                            </div>
                            <button type="submit" class="btn btn-success">Rekam data</button>
                        </form>
                    </div>
                    <div class="tab-pane container fade" id="inputPegawai">
                        <br>
                        <form action="{{route('user.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email_user" class="form-control" placeholder="Alamat surel"
                                    required>
                            </div>
                            <div class="form-group">
                                <textarea name="almt" id="alamat" cols="30" rows="10" class="form-control" required>Alamat</textarea>
                            </div>
                            <div class="form-group">
                                <input type="number" name="umr" class="form-control" placeholder="Umur" required>
                            </div>
                            <div class="form-group">
                                <input type="number" name="tlp" class="form-control" placeholder="No. Telpon" required>
                            </div>
                            <div class="form-group">
                                <input type="number" name="gji" class="form-control" placeholder="Gaji" required>
                            </div>
                            <button type="submit" class="btn btn-success">Rekam data</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<script>
    var ctx = document.getElementById('performa').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "Booking",
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, 10, 5, 2, 20, 30, 45],
            }]
        },

        // Configuration options go here
        options: {}
    });

</script>
@endsection
