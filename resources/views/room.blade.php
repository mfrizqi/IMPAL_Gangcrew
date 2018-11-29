@extends('layouts.app')

@section('title', 'Rizgay')

@section("content")
<div style="background-image: url('image/bg_2.jpg');background-size: cover; height: 100vh;">
    <div class="container" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%)">
        <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-6 col-sm-12 ftco-animate text-center">
                <h1 class="mb-4 mt-3 text-center" style="color: white">Pick your sweetest room for you and your family</h1>
                <button class="btn btn-primary btn-outline-white px-4 py-3 mt-5" onclick="scDown()" style="transform: rotate(90deg); border: 2px solid white !important; border-radius: 50px"><span
                        class="ion-ios-arrow-forward ml-3 mr-3"></span></button>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section room-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate" id="listRoom">
                <span class="subheading">Our Rooms</span>
                <h2>Explore our rooms</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="room-wrap">
                    <a href="#" class="room-img" style="background-image: url(image/room-1.jpg);"></a>
                    <div class="text p-4">
                        <div class="d-flex mb-1">
                            <div class="one-third">
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                        class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                <h3><a href="#">Luxury Room</a></h3>
                            </div>
                            <div class="one-forth text-center">
                                <p class="price">$99 <br><span>/night</span></p>
                            </div>
                        </div>
                        <p class="features">
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                        </p>
                        <p><a href="#" class="btn btn-primary">Reserve a room</a></p>
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
                                        class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                <h3><a href="#">Family Room</a></h3>
                            </div>
                            <div class="one-forth text-center">
                                <p class="price">$99 <br><span>/night</span></p>
                            </div>
                        </div>
                        <p class="features">
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                        </p>
                        <p><a href="#" class="btn btn-primary">Reserve a room</a></p>
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
                                        class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                <h3><a href="#">Deluxe Room</a></h3>
                            </div>
                            <div class="one-forth text-center">
                                <p class="price">$99 <br><span>/night</span></p>
                            </div>
                        </div>
                        <p class="features">
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                        </p>
                        <p><a href="#" class="btn btn-primary">Reserve a room</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
