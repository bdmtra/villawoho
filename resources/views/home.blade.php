@extends('layouts.frontend')

@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('/frontend/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <h1 class="subheading">Welcome to Villa WoHo</h1>
                    <h2 class="mb-4">Book your stay at villa W o H o</h2>

                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-4">
                    <form action="{{ route('checkDefaultHotelAvailability') }}" class="appointment-form">
                        <h3 class="mb-3">Book your apartment</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                        <input type="text" class="form-control appointment_date-check-in" name="start_date" placeholder="Check-In">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                        <input type="text" class="form-control appointment_date-check-out" name="end_date" placeholder="Check-Out">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="hidden" name="adults" value="1">
                                    <input type="submit" value="Book Appartment Now" class="btn btn-primary py-3 px-4">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block services-wrap text-center">
                        <div class="img" style="background-image: url(/frontend/images/services-1.jpg);"></div>
                        <div class="media-body py-4 px-3">
                            <h3 class="heading">Proximity</h3>
                            <p>Stay with us, we offer private surroundings and still only 300 meters to the centre of Menton or 500 meters to the beach. Let us know in advance and we will be able to provide you with bicycles, even electric ones.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block services-wrap text-center">
                        <div class="img" style="background-image: url(/frontend/images/services-2.jpg);"></div>
                        <div class="media-body py-4 px-3">
                            <h3 class="heading">Hiking</h3>
                            <p>Do you want to walk the whole way, or take the bus to extraordinary hiking trails in the mountains just above Menton? Our Villa is perfectly situated for walking the whole way, and the bus station is just a 600 meters away.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                    <div class="d-block services-wrap text-center">
                        <div class="img" style="background-image: url(/frontend/images/services-3.jpg);"></div>
                        <div class="media-body py-4 px-3">
                            <h3 class="heading">Staying in</h3>
                            <p>There are ample room for relaxing without leaving the villa, chilling in the terrace, having a barbecue or any other food arrangements in the outdoor kitchen</p>
                            <p><a href="#" class="btn btn-primary">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container-fluid px-md-0">
            <div class="row no-gutters justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Apartments for rent</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img" style="background-image: url(/frontend/images/room-1.jpg);"></a>
                        <div class="half left-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>

                                <h3 class="mb-3"><a href="{{ route('rooms') }}">2 bedroom apartment</a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Size:</span> Max 4 adults, 70 m2</li>
                                    <li><span>Accommodation: </span> Kitchen, living room, Bathroom</li>
                                    <li><span>View:</span> Big balcony, panoramic Sea View</li>
                                    <li><span>Price range:</span> 70 / 130 / 190 € per night depending on low, mid or high season, 3 nights minimum</li>
                                </ul>
                                <p class="pt-1"><a href="{{ route('rooms') }}" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img" style="background-image: url(/frontend/images/room-2.jpg);"></a>
                        <div class="half left-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>

                                <h3 class="mb-3"><a href="{{ route('rooms') }}">2 bedroom apartment</a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Size:</span> Max 4 adults, 70 m2</li>
                                    <li><span>Accommodation:</span>Kitchen, living room, Bathroom</li>
                                    <li><span>View:</span>Panoramic Sea View from balcony</li>
                                    <li><span>Price range:</span>70 / 130 / 190 € per night depending on low, mid or high season, 3 nights minimum</li>
                                </ul>
                                <p class="pt-1"><a href="{{ route('rooms') }}" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img order-md-last" style="background-image: url(/frontend/images/room-3.jpg);"></a>
                        <div class="half right-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>

                                <h3 class="mb-3"><a href="{{ route('rooms') }}">Downtown apartment</a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Max:</span> 2 adults, 38 m2</li>
                                    <li><span> Accommodation:</span> Kitchen, living room, Bathroom</li>
                                    <li><span>View:</span> Garden View</li>
                                    <li><span>Price range:</span> 70 / 130 / 190 € per night depending on low, mid or high season, 3 nights minimum</li>
                                </ul>
                                <p class="pt-1"><a href="{{ route('rooms') }}" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img order-md-last" style="background-image: url(/frontend/images/room-4.jpg);"></a>
                        <div class="half right-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>

                                <h3 class="mb-3"><a href="{{ route('rooms') }}">Room + kitchenette</a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Max:</span> 1 adult 25 m2 </li>
                                    <li><span>Accommodation:</span> Kitchenette, Bathroom</li>
                                    <li><span>View:</span> Sea View</li>
                                    <li><span>Price range:</span> 50 / 100 / 150 € per night depending on low, mid or high season, 3 nights minimum</li>
                                </ul>
                                <p class="pt-1"><a href="{{ route('rooms') }}" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Testimonials</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(/frontend/images/person_1.jpg)">
                                </div>
                                <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                                    <p>Wonderful stay, everything was perfect </p>
                                    <p class="name">Nilofar</p>
                                    <span class="position">Sunseeker</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(/frontend/images/person_2.jpg)">
                                </div>
                                <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                                    <p>I can recommend staying with Claes and Stina to everyone, they are perfect hosts</p>
                                    <p class="name">Saga</p>
                                    <span class="position">Avid traveller</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(/frontend/images/person_3.jpg)">
                                </div>
                                <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                                    <p>Perfect location, close to everything</p>
                                    <p class="name">Carl</p>
                                    <span class="position">Student</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(/frontend/images/person_4.jpg)">
                                </div>
                                <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                                    <p>Perfect location, close to the beach and extraordinary hiking trails</p>
                                    <p class="name">Aja Westman</p>
                                    <span class="position">Businesswoman</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(/frontend/images/person_1.jpg)">
                                </div>
                                <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                                    <p>Close to the Beach, easy and short distance to take the train to Monaco</p>
                                    <p class="name">Tilde</p>
                                    <span class="position">Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 wrap-about">
                    <div class="img img-2 mb-4" style="background-image: url(/frontend/images/about.jpg);">
                    </div>
                    <h2>About villa W o H o</h2>
                    <p>Welcome to stay with us. We are inviting you into our home, this is far from a hotel experience. The villa WoHo is family owned, and we are also letting you rent our apartment downtown.<br> <br>WoHo stands for Work / Holiday since we believe that our Villa is perfect either if you want to spend your vacation in Menton or for long term rental for work (Contact us for competitive price for long term rental). <br> <br>The price is depending on season, high season is july and August (the highest price), mid season is May, June, September (mid season price is always the average between high and low season pricing), low season is October to April (the price is the lowest value stated above>)</p>
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class="heading-section">
                        <div class="pl-md-5">
                            <h2 class="mb-2">What we offer</h2>
                        </div>
                    </div>
                    <div class="pl-md-5">
                        <p>Here is a short introduction to what villa W o H o offer. Get in contact if you want to know more.</p>
                        <div class="row">
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-diet"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">panoramic view, the Mediterranean</h3>
                                    <p>Plenty of sofas, chairs and umbrellas on our different terraces</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-workout"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Breakfast</h3>
                                    <p>Breakfast can be provided, if ordered in advance.</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-diet-1"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Laundry</h3>
                                    <p>Laundry is easily handled in our washing machine</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-first"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Lunch or Dinner</h3>
                                    <p>Lunch or Dinner can be ordered, choose from a long list of restaurangs.</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-first"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Free Wifi</h3>
                                    <p>WiFi is available, just ask us for credentials</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-first"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Kitchen</h3>
                                    <p>In addition to your indoor kitchen, an outdoor kitchen is available</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-first"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Bicycles</h3>
                                    <p>Let us know in advance if you want to rent  bicyles, even electric ones are available</p>
                                </div>
                            </div>
                            <div class="services-2 col-lg-6 d-flex w-100">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-first"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">beach gear</h3>
                                    <p>A wide range of beach gear is available for you to use</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Unique aspects of Menton</h2>
                    <span class="subheading">News &amp; Blog</span>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="#" class="block-20 rounded" style="background-image: url('/frontend/images/image_1.jpg');">
                        </a>
                        <div class="text p-4 text-center">
                            <h3 class="heading"><a href="#">Lemons</a></h3>
                            <div class="meta mb-2">
                                <div><a href="#">January 30, 2022</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 0</a></div>
                            </div>
                            <p>Menton is famous for their lemons, there is a special kind of melons that only grow here in Menton and every year in february there is a lemon festival.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="#" class="block-20 rounded" style="background-image: url('/frontend/images/image_2.jpg');">
                        </a>
                        <div class="text p-4 text-center">
                            <h3 class="heading"><a href="#">Hiking Trails</a></h3>
                            <div class="meta mb-2">
                                <div><a href="#">January 24, 2022</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 0</a></div>
                            </div>
                            <p>We have a big inventory of good hiking trails, that are easily accessed. If you don´t like hiking we can provide you with scenic walking paths where no of-road hiking is needed. Scenic paths are available both in historic towns and along the coast of the Mediterranean</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="#" class="block-20 rounded" style="background-image: url('/frontend/images/image_3.jpg');">
                        </a>
                        <div class="text p-4 text-center">
                            <h3 class="heading"><a href="#">Menton, close to the Italian border</a></h3>
                            <div class="meta mb-2">
                                <div><a href="#">January 20, 2022</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 0</a></div>
                            </div>
                            <p>Situated close to the Italian border Menton is a perfect place to enjoy the best of French and Italian food</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
