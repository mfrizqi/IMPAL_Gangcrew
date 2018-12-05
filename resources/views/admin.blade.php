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
                                <p class="card-text mt-3 mb-0" style="font-size: 1.7rem; font-weight: 600">12</p>
                                <p class="card-text" style="font-size: 1.2rem">Kamar</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-user-tie" style="font-size: 5rem"></i>
                                <p class="card-text mt-3 mb-0" style="font-size: 1.7rem; font-weight: 600">25</p>
                                <p class="card-text" style="font-size: 1.2rem">Pegawai</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-users" style="font-size: 5rem"></i>
                                <p class="card-text mt-3 mb-0" style="font-size: 1.7rem; font-weight: 600">10</p>
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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#statistik">Lihat detail</button>
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
                                <div class="col-md-4 ftco-animate">
                                    <div class="room-wrap">
                                        <a href="#" class="room-img" style="background-image: url(image/room-1.jpg);"></a>
                                        <div class="text p-4">
                                            <div class="d-flex mb-1">
                                                <div class="one-third">
                                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                                            class="icon-star"></span><span class="icon-star"></span><span
                                                            class="icon-star-half-full"></span></p>
                                                    <h3><a href="#">Luxury Room</a></h3>
                                                </div>
                                                <div class="one-forth text-center">
                                                    <p class="price">$99 <br><span>/night</span></p>
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
                                            <p><a href="#" class="btn btn-primary">Kelola kamar</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 ftco-animate">
                                    <div class="room-wrap">
                                        <a href="#" class="room-img" style="background-image: url(image/room-2.jpg);"></a>
                                        <div class="text p-4">
                                            <div class="d-flex mb-1">
                                                <div class="one-third">
                                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                                            class="icon-star"></span><span class="icon-star"></span><span
                                                            class="icon-star-half-full"></span></p>
                                                    <h3><a href="#">Family Room</a></h3>
                                                </div>
                                                <div class="one-forth text-center">
                                                    <p class="price">$99 <br><span>/night</span></p>
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
                                            <p><a href="#" class="btn btn-primary">Kelola kamar</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 ftco-animate">
                                    <div class="room-wrap">
                                        <a href="#" class="room-img" style="background-image: url(image/room-3.jpg);"></a>
                                        <div class="text p-4">
                                            <div class="d-flex mb-1">
                                                <div class="one-third">
                                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                                            class="icon-star"></span><span class="icon-star"></span><span
                                                            class="icon-star-half-full"></span></p>
                                                    <h3><a href="#">Deluxe Room</a></h3>
                                                </div>
                                                <div class="one-forth text-center">
                                                    <p class="price">$99 <br><span>/night</span></p>
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
                                            <p><a href="#" class="btn btn-primary">Kelola kamar</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade pt-4" id="pegawai">...</div>
                        <div class="tab-pane container fade pt-4" id="tamu">...</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

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
