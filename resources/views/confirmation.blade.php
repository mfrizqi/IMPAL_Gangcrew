@extends('layouts.app')

@section('title', 'Confirmation')

@section("content")
<div style="background-image: url('image/bg_2.jpg');background-size: cover; height: 100vh;">
    <div class="container" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%)">
        <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-6 col-sm-12 ftco-animate text-center">
                <h1 class="mb-4 mt-3 text-center" style="color: white">Confirmation</h1>
                <button class="btn btn-primary btn-outline-white px-4 py-3 mt-5" onclick="scDown()" style="transform: rotate(90deg); border: 2px solid white !important; border-radius: 50px"><span
                        class="ion-ios-arrow-forward ml-3 mr-3"></span></button>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section room-section bg-light">
    <div class="container">
        <div class="row">
            @if($tagihan->first())
                @foreach($tagihan as $t)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <p class="card-title mb-0">Bill</p>
                            </div>
                            <div class="card-body">
                                <p class="card-title">Room type: {{$t->kamar()->first()->jenis_kamar}} Room</p>
                                <p class="card-text">Name: {{$t->user()->first()->name}}</p>
                                <p class="card-text">Bill: Rp. {{$t->kamar()->first()->harga_kamar}}</p>
                                <form action="{{route('confirm')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="memesan_id" value="{{$t->id}}">
                                    <button type="submit" class="btn btn-success">Confirm payment</button>
                                </form>
                            </div>
                        </div>  
                    </div>
                @endforeach
            @endif 
        </div>
    </div>
</section>
@endsection
