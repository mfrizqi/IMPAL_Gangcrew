@extends('layouts.reser')

@section('title', 'Coral - Luxurious hotel')

@section("content")
<div style="background-color: #dedfe4">
    <div style="background-color: #ff6138">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="py-5" style="color: white">Reservation room</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section mt-0" style="padding: 5em 0 3em 0 !important;">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8 ftco-animate makereservation pt-5 px-5 bg-light" style="border-left: 4px solid #ff6138">
            <form action="#">
              <h2 class="mb-4">Contact Details</h2>
              <div class="row mb-5">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" placeholder="First Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="Your Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" placeholder="Phone">
                  </div>
                </div>
                <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                           I am the guest
                          </label>
                        </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="guestname">Name</label>
                        <input type="text" class="form-control" placeholder="Guest Name">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>

<section class="ftco-section mt-0" style="padding: 3em 0 5em 0 !important">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-8 ftco-animate makereservation p-5 bg-light" style="border-left: 4px solid #ff6138">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mb-4">Price Details</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="row justify-content-between">
                            <div class="col-md-8">
                                <p style="font-weight: 800; color:#404044">Nama Kamar hotel</p>
                            </div>
                            <div class="col-md-4">
                                <p style="font-weight: 800; color:#404044" class="text-right">Harga hotel Rp12909102</p>
                            </div>
                            <div class="col-md-8">
                                <p style="font-weight: 800; color:#404044">Taxes</p>
                              </div>
                              <div class="col-md-4">
                                  <p style="font-weight: 800; color:#404044" class="text-right">Rp12909102</p>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <button class="btn btn-primary mt-5">Continue to Payment</button>
                    </div>
                </div>
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
