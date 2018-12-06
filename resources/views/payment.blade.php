@extends('layouts.reser')

@section('title', 'Coral - Luxurious hotel')

@section("content")
<div style="background-color: #dedfe4">
    <div style="background-color: #ff6138">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="py-5" style="color: white">Payment</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section mt-0" style="padding: 5em 0 !important;">
        <div class="container">
            <div class="card mb-5">
                <div class="card-header">
                    <p class="card-title mb-0" style="font-size: 1.4rem; font-weight: 600">All payments</p>
                </div>
                <div class="card-body">
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
                                    </div>
                                </div>  
                            </div>
                        @endforeach
                    @endif 
                    </div>
                </div>
                <div class="card-footer bg-primary text-white">
                    <p class="card-title">Total Bills: {{$bills}}</p>
                </div>
            </div>
            
            
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 ftco-animate makereservation pt-5 px-5 bg-light" style="border-left: 4px solid #ff6138">
                    <form action="#">
                        <h2 class="mb-4">Payment Details</h2>
                        <div class="row mb-5">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Card Type</label>
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Visa</option>
                                            <option value="">Master Card</option>
                                            <option value="">Credit Card</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Card No</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Name on Card</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mr-4">
                                    <label for="">Expiration Date</label>
                                    <input type="text" class="form-control" id="expiration_date" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12 pt-4">
                                <button class="btn btn-primary">Confirm payment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</section>
</div>
@endsection

<!-- <div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Card Type</label>
            <div class="select-wrap one-third">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="" id="" class="form-control">
                    <option value="">Visa</option>
                    <option value="">Master Card</option>
                    <option value="">Credit Card</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="name">Card No</label>
            <input type="text" class="form-control" placeholder="">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="name">Name on Card</label>
            <input type="text" class="form-control" placeholder="">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mr-4">
            <label for="">Expiration Date</label>
            <input type="text" class="form-control" id="expiration_date" placeholder="">
        </div>
    </div>
</div> -->
