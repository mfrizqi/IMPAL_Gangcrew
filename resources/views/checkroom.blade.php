@extends('layouts.app')

@section('title', 'Coral')

@section('content')

<div style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.3)), url('image/bg_6.jpg');background-size: cover; height: 100vh">
    <div class="container" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 col-sm-12 ftco-animate text-center">
                <h1 class="mb-4 mt-4 text-center" style="color: white">Choose your great time with your family</h1>
                <button class="btn btn-primary btn-outline-white px-4 py-3 mt-5" onclick="scDown()" style="transform: rotate(90deg); border: 2px solid white !important; border-radius: 50px"><span
                        class="ion-ios-arrow-forward ml-3 mr-3"></span></button>
            </div>
        </div>
    </div>
</div>
<div class="check-reserve" style="background-color: #ff6138">
    <div class="container mr-md-3 mr-0" style="color: #FFF">
        <div class="row justify-content-center mr-0">
            <div class="col-lg-12 col-md-12 p-md-5">
                <div class="block-17">
                    <form action="{{route('checkroom')}}" method="GET">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="book-date one-third">
                                    <label for="check-in">Check in:</label>
                                <input type="text" name="checkin" id="checkin_date" class="form-control" placeholder="M/D/YYYY" value="{{$r['checkin']}}"
                                        style="border-radius: 4px; border: 2px solid #ff6138">
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="book-date one-third">
                                    <label for="check-out">Check out:</label>
                                    <input type="text" name="checkout" id="checkout_date" class="form-control" placeholder="M/D/YYYY" value="{{$r['checkout']}}"
                                        style="border-radius: 4px; border: 2px solid #ff6138">
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputZip">Person</label>
                                <div class="select-wrap">
                                    <select name="person" id="person" class="form-control" style="border-radius: 4px; border: 2px solid #ff6138">
                                        <option value="1" {{$r['person'] == 1 ? 'selected' : ''}}>1</option>
                                        <option value="2" {{$r['person'] == 2 ? 'selected' : ''}}>2</option>
                                        <option value="3" {{$r['person'] == 3 ? 'selected' : ''}}>3</option>
                                        <option value="4" {{$r['person'] == 4 ? 'selected' : ''}}>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <!-- <label for="inputZip" style="opacity: 0;">Zip</label>
                              <button type="submit" class="btn btn-primary w-100">Check Availability</button> -->
                                <label for="inputZip" style="opacity: 0;">Zip</label>
                                <input type="submit" class="check-submit btn btn-outline-white" value="Check Availability">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="background-color: #f0f2f7 !important">
    <section class="ftco-section room-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate" id="downhere">
                    <span class="subheading">Our Rooms</span>
                    <h2>Room Availability</h2>
                </div>
            </div>
            
            @foreach($kamar as $km)
                <?php $i = 0 ?>
                    @foreach($memesan as $m)
                        @if($km->id == $m->id_kamar)
                            <?php $i = 1 ?>
                        @endif
                    @endforeach
                @if($i != 1) 
            <div class="row justify-content-center">
                <div class="col-md-8 ftco-animate" style="border: none">
                    <div class="room-wrap bg-light">
                        <a href="#" class="room-img" style="background-image: url(image/kamar/{{$km->foto_kamar}}); height: 30vh;"></a>
                        <div class="text p-4">
                            <div class="d-flex mb-1">
                                <div class="one-third">
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                            class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                    <h3><a href="#" style="cursor: default">{{$km->jenis_kamar}}</a></h3>
                                </div>
                                <div class="one-forth text-center">
                                    <p class="price">Rp.{{$km->harga_kamar}} <br><span>/night</span></p>
                                </div>
                            </div>
                            <!-- <p class="features">
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                </p> -->
                            <p><a href="{{route('reserve')}}" class="btn btn-primary">Reserve a room</a></p>
                        </div>
                    </div>
                </div>
            </div>
                @endif
            @endforeach
            <!-- <div class="row justify-content-center">
                <div class="col-md-8 ftco-animate" style="border: none">
                    <div class="room-wrap bg-light">
                        <a href="#" class="room-img" style="background-image: url(image/room-2.jpg); height: 30vh;"></a>
                        <div class="text p-4">
                            <div class="d-flex mb-1">
                                <div class="one-third">
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                            class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                    <h3><a href="#" style="cursor: default">Family Room - <span class="roomLeft"> 10
                                                Rooms Left!</span></a></h3>
                                </div>
                                <div class="one-forth text-center">
                                    <p class="price">$99 <br><span>/night</span></p>
                                </div>
                            </div> -->
                            <!-- <p class="features">
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                </p> -->
                            <!-- <p><a href="{{route('reserve')}}" class="btn btn-primary">Reserve a room</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
</div>

@endsection
