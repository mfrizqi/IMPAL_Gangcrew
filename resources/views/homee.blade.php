@extends('layouts.app')

@section('title', 'Coral')

@section('content')
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background:linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.3)), url('image/bg_1.jpg'); background-size: cover;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center justify-content-start">
                <div class="col-md-6 col-sm-12 ftco-animate">
                    <h1 class="mb-4">Welcome to Coral the paradize near the blue sea</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.3)), url('image/bg_2.jpg'); background-size: cover;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center justify-content-start">
                <div class="col-md-6 col-sm-12 ftco-animate">
                    <h1 class="mb-4">Book the perfect accomodations without breaking the bank</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.3)), url('image/bg_3.jpg'); background-size: cover;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center justify-content-start">
                <div class="col-md-6 col-sm-12 ftco-animate">
                    <h1 class="mb-4">Lets go to discovering</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END slider -->

<div class="ftco-section-reservation mr-md-3 mr-0">
    <div class="container mr-md-3 mr-0">
        <div class="row justify-content-end ftco-animate mr-md-3 mr-0">
            <div class="col-lg-4 col-md-5 reservation p-md-5">
                <div class="block-17">
                    <form action="{{route('checkroom')}}" method="GET" class="d-block">
                        <div class="fields d-block">

                            <div class="book-date one-third">
                                <label for="check-in">Check in:</label>
                                <input type="text" name="checkin" id="checkin_date" class="form-control" placeholder="M/D/YYYY" required>
                            </div>

                            <div class="book-date one-third">
                                <label for="check-out">Check out:</label>
                                <input type="text" name="checkout" id="checkout_date" class="form-control" placeholder="M/D/YYYY" required>
                            </div>

                            <div class="one-third">
                                <label for="Guest">Guest:</label>
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="person" id="person" class="form-control" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="search-submit btn btn-primary" value="Check Availability">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="services bg-light">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-4 ftco-animate py-5 nav-link-wrap aside-stretch">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link px-4 active" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-master"
                        role="tab" aria-controls="v-pills-master" aria-selected="true"><span class="mr-3 flaticon-bed"></span>
                        Master Bedrooms</a>

                    <a class="nav-link px-4" id="v-pills-buffet-tab" data-toggle="pill" href="#v-pills-buffet" role="tab"
                        aria-controls="v-pills-buffet" aria-selected="false"><span class="mr-3 flaticon-tray"></span>
                        Breakfast Buffet</a>

                    <a class="nav-link px-4" id="v-pills-fitness-tab" data-toggle="pill" href="#v-pills-fitness" role="tab"
                        aria-controls="v-pills-fitness" aria-selected="false"><span class="mr-3 flaticon-woman"></span>
                        Fitness Center</a>

                    <a class="nav-link px-4" id="v-pills-reception-tab" data-toggle="pill" href="#v-pills-reception"
                        role="tab" aria-controls="v-pills-reception" aria-selected="false"><span class="mr-3 flaticon-receptionist"></span>
                        24 Hour Reception</a>

                    <a class="nav-link px-4" id="v-pills-sea-tab" data-toggle="pill" href="#v-pills-sea" role="tab"
                        aria-controls="v-pills-sea" aria-selected="false"><span class="mr-3 flaticon-deck-chair"></span>
                        Sea View Balcony</a>

                    <a class="nav-link px-4" id="v-pills-spa-tab" data-toggle="pill" href="#v-pills-spa" role="tab"
                        aria-controls="v-pills-spa" aria-selected="false"><span class="mr-3 flaticon-spa"></span>
                        Pool &amp; Spa</a>

                    <a class="nav-link px-4" id="v-pills-wifi-tab" data-toggle="pill" href="#v-pills-wifi" role="tab"
                        aria-controls="v-pills-wifi" aria-selected="false"><span class="mr-3 flaticon-wifi-router"></span>
                        Free wifi</a>

                    <a class="nav-link px-4" id="v-pills-resto-tab" data-toggle="pill" href="#v-pills-resto" role="tab"
                        aria-controls="v-pills-resto" aria-selected="false"><span class="mr-3 flaticon-disco-ball"></span>
                        Resto bar</a>
                </div>
            </div>
            <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">

                <div class="tab-content pl-md-5" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-master" role="tabpanel" aria-labelledby="v-pills-master-tab">
                        <span class="icon mb-3 d-block flaticon-bed"></span>
                        <h2 class="mb-4">Master Bedrooms</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt
                            voluptate, quibusdam sunt iste dolores consequatur</p>
                        <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto
                            facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi
                            exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                    </div>

                    <div class="tab-pane fade" id="v-pills-buffet" role="tabpanel" aria-labelledby="v-pills-buffet-tab">
                        <span class="icon mb-3 d-block flaticon-tray"></span>
                        <h2 class="mb-4">Breakfast Buffet</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt
                            voluptate, quibusdam sunt iste dolores consequatur</p>
                        <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto
                            facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi
                            exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                    </div>

                    <div class="tab-pane fade" id="v-pills-fitness" role="tabpanel" aria-labelledby="v-pills-fitness-tab">
                        <span class="icon mb-3 d-block flaticon-woman"></span>
                        <h2 class="mb-4">Fitness Center</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt
                            voluptate, quibusdam sunt iste dolores consequatur</p>
                        <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto
                            facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi
                            exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                    </div>

                    <div class="tab-pane fade" id="v-pills-reception" role="tabpanel" aria-labelledby="v-pills-reception-tab">
                        <span class="icon mb-3 d-block flaticon-receptionist"></span>
                        <h2 class="mb-4">24 Hours Reception</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt
                            voluptate, quibusdam sunt iste dolores consequatur</p>
                        <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto
                            facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi
                            exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                    </div>

                    <div class="tab-pane fade" id="v-pills-sea" role="tabpanel" aria-labelledby="v-pills-sea-tab">
                        <span class="icon mb-3 d-block flaticon-deck-chair"></span>
                        <h2 class="mb-4">Sea view balcony</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt
                            voluptate, quibusdam sunt iste dolores consequatur</p>
                        <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto
                            facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi
                            exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                    </div>

                    <div class="tab-pane fade" id="v-pills-spa" role="tabpanel" aria-labelledby="v-pills-spa-tab">
                        <span class="icon mb-3 d-block flaticon-spa"></span>
                        <h2 class="mb-4">Pool &amp; Spa</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt
                            voluptate, quibusdam sunt iste dolores consequatur</p>
                        <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto
                            facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi
                            exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-wifi" role="tabpanel" aria-labelledby="v-pills-wifi-tab">
                        <span class="icon mb-3 d-block flaticon-wifi-router"></span>
                        <h2 class="mb-4">Free wifi coverage</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt
                            voluptate, quibusdam sunt iste dolores consequatur</p>
                        <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto
                            facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi
                            exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-resto" role="tabpanel" aria-labelledby="v-pills-resto-tab">
                        <span class="icon mb-3 d-block flaticon-disco-ball"></span>
                        <h2 class="mb-4">Restaurant &amp; Bar</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt
                            voluptate, quibusdam sunt iste dolores consequatur</p>
                        <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto
                            facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi
                            exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section room-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Our Rooms</span>
                <h2>Explore our rooms</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="carousel-room owl-carousel">
                    <div class="item">
                        <div class="room-wrap">
                            <a href="#" class="room-img" style="background-image: url(image/room-1.jpg);"></a>
                            <div class="text p-4">
                                <div class="d-flex mb-1">
                                    <div class="one-third">
                                        <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                                class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                        <h3><a href="#">Double Room</a></h3>
                                    </div>
                                    <div class="one-forth text-center">
                                        <p class="price">$99 <br><span>/night</span></p>
                                    </div>
                                </div>
                                <p class="features">
                                    <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for
                                        traveling couples</span>
                                    <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                                    <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                                    <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting
                                        facilities</span>
                                    <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                                </p>
                                <p><a href="{{route('checkroom')}}" class="btn btn-primary">Reserve a room</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
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
                                    <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for
                                        traveling couples</span>
                                    <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                                    <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                                    <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting
                                        facilities</span>
                                    <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                                </p>
                                <p><a href="{{route('checkroom')}}" class="btn btn-primary">Reserve a room</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
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
                                    <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for
                                        traveling couples</span>
                                    <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                                    <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                                    <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting
                                        facilities</span>
                                    <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                                </p>
                                <p><a href="{{route('checkroom')}}" class="btn btn-primary">Reserve a room</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-md-center align-items-sm-end" style="background-image: url('image/bg_4.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row desc d-flex justify-content-center">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Our Conference</span>
                    <h2 class="h1 font-weight-bold">Conference Centre</h2>
                    <p><a href="#" class="btn btn-primary btn-outline-white mt-3 py-3 px-4">View more details</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Our Menu</span>
                <h2>Restaurant &amp; Bar</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 dish-menu">

                <div class="nav nav-pills justify-content-center ftco-animate" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link py-3 px-4 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                        role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="flaticon-tray"></span>
                        Main</a>
                    <a class="nav-link py-3 px-4" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                        role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="flaticon-beer"></span>
                        Dessert</a>
                    <a class="nav-link py-3 px-4" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                        role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="flaticon-cheers"></span>
                        Drinks</a>
                </div>

                <div class="tab-content py-5" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dish-3.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Grilled Beef with potatoes</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dish-4.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Fruit Vanilla Ice Cream</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dish-5.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Asian Hoisin Pork</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dish-6.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Spicy Fried Rice &amp; Bacon</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dish-7.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Mango Chili Chutney</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dish-8.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Savory Watercress Chinese Pancakes</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dish-9.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Soup With Vegetables And Meat</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dish-10.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Udon Noodles With Vegetables</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dish-11.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Baked Lobster With A Garnish</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dish-8.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Octopus with Vegetables</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- END -->

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dessert-1.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Grilled Beef with potatoes</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dessert-2.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Grilled Beef with potatoes</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dessert-3.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Grilled Beef with potatoes</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dessert-4.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Grilled Beef with potatoes</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dessert-5.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Grilled Beef with potatoes</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dessert-6.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Tiramisu</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dessert-7.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Chocolate Cream</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dessert-8.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Pizza Pie</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dessert-9.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Sicilian Ricotta</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/dessert-10.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Mango FLoat</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- END -->

                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/drink-1.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Lemon Juice</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/drink-2.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Guava Juice</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/drink-3.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Sprite</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/drink-4.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Cola</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/drink-5.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Wine</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/drink-6.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Beer</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/drink-7.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Mango Juice</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/drink-8.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Apple Juice</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/drink-9.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Strawberry Juice</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="menus d-flex ftco-animate">
                                    <div class="menu-img" style="background-image: url(image/drink-10.jpg);"></div>
                                    <div class="text d-flex">
                                        <div class="one-half">
                                            <h3>Orange Juice</h3>
                                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">$29</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Guests Says</span>
                <h2>Our Satisfied Guests says</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel owl-carousel ftco-owl">
                    <div class="item text-center">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(image/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                        class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Dennis Green</p>
                                <span class="position">Guests from Italy</span>
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(image/person_2.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                        class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Dennis Green</p>
                                <span class="position">Guests from Italy</span>
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(image/person_3.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                        class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Dennis Green</p>
                                <span class="position">Guests from Italy</span>
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(image/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                        class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Dennis Green</p>
                                <span class="position">Guests from Italy</span>
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(image/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                        class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Dennis Green</p>
                                <span class="position">Guests from Italy</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection