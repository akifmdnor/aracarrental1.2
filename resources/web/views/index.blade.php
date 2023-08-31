<!DOCTYPE html>
<html>

@include('includes.head')

<body>
    <section class="d-flex flex-column" id="hero">
        <form method="get" action="{{ route('web.listing') }}" enctype="multipart/form-data" id="search_form">
            <div>
                <nav class="navbar navbar-light navbar-expand-md">
                    <div class="container-fluid"><a class="navbar-brand" href="{{ url('/') }}"><img
                                src="assets/img/Icon%20ARA.svg"></a><button data-toggle="collapse"
                            class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle
                                navigation</span><span class="navbar-toggler-icon"
                                style="background-image: url(&quot;assets/img/Icon%20Menu.svg&quot;);"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item" role="presentation"><a class="nav-link text-center"
                                        href="{{ url('/about') }}">About</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="d-flex flex-column mx-auto" id="HeroForm">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-center d-xl-flex justify-content-xl-center heading-1">Grab Your Car
                                Anywhere<br></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h1 class="text-center d-xl-flex justify-content-xl-center heading-2">ARA Car Rental,
                                Door-To-Door Delivery Service<br></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"><input type="text" required class="hero-input input-location"
                                style="background-image: url(&quot;assets/img/Icon%20Location.svg&quot;);"
                                id="pickup_location" autocomplete="on" name="pickup_location"></div>
                        <input type="hidden" name="pickup_latitude" id="pickup_latitude" />
                        <input type="hidden" name="pickup_longitude" id="pickup_longitude" />
                    </div>
                    <div class="row">
                        <div class="col"><label class="input-label">Start Date&nbsp; &nbsp;&nbsp;</label><input
                                type="text" id="InputStartDate" class="hero-input input-date" name="pickup_date"
                                onfocus="blur();" /></div>
                        <div class="col"><label class="input-label">Start Time&nbsp; &nbsp;&nbsp;</label>

                            <select type="text" id="InputStartTime" class="hero-input input-time custom-select"
                                placeholder="Start Time" name="pickup_time" value="" autocomplete="off"
                                required="">
                                <option value="9:00 AM" @if (app('request')->input('pickup_time') == '9:00 AM') selected @endif>9:00
                                    AM</option>
                                <option value="9:30 AM" @if (app('request')->input('pickup_time') == '9:30 AM') selected @endif>9:30 AM
                                </option>
                                <option value="10:00 AM" @if (app('request')->input('pickup_time') == '10:00 AM') selected @endif>10:00 AM
                                </option>
                                <option value="10:30 AM" @if (app('request')->input('pickup_time') == '10:30 AM') selected @endif>10:30 AM
                                </option>
                                <option value="11:00 AM" @if (app('request')->input('pickup_time') == '11:00 AM') selected @endif>11:00 AM
                                </option>
                                <option value="11:30 AM" @if (app('request')->input('pickup_time') == '11:30 AM') selected @endif>11:30 AM
                                </option>
                                <option value="12:00 PM" @if (app('request')->input('pickup_time') == '12:00 PM') selected @endif>12:00 PM
                                </option>
                                <option value="12:30 PM" @if (app('request')->input('pickup_time') == '12:30 PM') selected @endif>12:30 PM
                                </option>
                                <option value="1:00 PM" @if (app('request')->input('pickup_time') == '1:00 PM') selected @endif>1:00 PM
                                </option>
                                <option value="1:30 PM" @if (app('request')->input('pickup_time') == '1:30 PM') selected @endif>1:30 PM
                                </option>
                                <option value="2:00 PM" @if (app('request')->input('pickup_time') == '2:00 PM') selected @endif>2:00 PM
                                </option>
                                <option value="2:30 PM" @if (app('request')->input('pickup_time') == '2:30 PM') selected @endif>2:30 PM
                                </option>
                                <option value="3:00 PM" @if (app('request')->input('pickup_time') == '3:00 PM') selected @endif>3:00 PM
                                </option>
                                <option value="3:30 PM" @if (app('request')->input('pickup_time') == '3:30 PM') selected @endif>3:30 PM
                                </option>
                                <option value="4:00 PM" @if (app('request')->input('pickup_time') == '4:00 PM') selected @endif>4:00 PM
                                </option>
                                <option value="4:30 PM" @if (app('request')->input('pickup_time') == '4:30 PM') selected @endif>4:30 PM
                                </option>
                                <option value="5:00 PM" @if (app('request')->input('pickup_time') == '5:00 PM') selected @endif>5:00 PM
                                </option>
                                <option value="5:30 PM" @if (app('request')->input('pickup_time') == '5:30 PM') selected @endif>5:30 PM
                                </option>
                                <option value="6:00 PM" @if (app('request')->input('pickup_time') == '6:00 PM') selected @endif>6:00 PM
                                </option>
                                <option value="6:30 PM" @if (app('request')->input('pickup_time') == '6:30 PM') selected @endif>6:30 PM
                                </option>
                                <option value="7:00 PM" @if (app('request')->input('pickup_time') == '7:00 PM') selected @endif>7:00 PM
                                </option>
                                <option value="7:30 PM" @if (app('request')->input('pickup_time') == '7:30 PM') selected @endif>7:30 PM
                                </option>
                                <option value="8:00 PM" @if (app('request')->input('pickup_time') == '8:00 PM') selected @endif>8:00 PM
                                </option>
                                <option value="8:30 PM" @if (app('request')->input('pickup_time') == '8:30 PM') selected @endif>8:30 PM
                                </option>
                                <option value="9:00 PM" @if (app('request')->input('pickup_time') == '9:00 PM') selected @endif>9:00 PM
                                </option>
                                <option value="9:30 PM" @if (app('request')->input('pickup_time') == '9:30 PM') selected @endif>9:30 PM
                                </option>
                                <option value="10:00 PM" @if (app('request')->input('pickup_time') == '10:00 PM') selected @endif>10:00 PM
                                </option>
                                <option value="10:30 PM" @if (app('request')->input('pickup_time') == '10:30 PM') selected @endif>10:30 PM
                                </option>
                                <option value="11:00 PM" @if (app('request')->input('pickup_time') == '11:00 PM') selected @endif>11:00 PM
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col checkbox-col">
                            <div class="custom-control custom-checkbox"><input class="custom-control-input checkbox-box"
                                    type="checkbox" id="LocationOpt"><label class="custom-control-label checkbox-label"
                                    for="LocationOpt">Return car at
                                    different location</label></div>
                        </div>
                    </div>
                    <div class="row" id="ReturnLocation">
                        <div class="col"><input type="text" class="hero-input input-location form-control"
                                id="return_location_2" autocomplete="on" name="return_location">
                            <input type="hidden" name="return_latitude" id="return_latitude" />
                            <input type="hidden" name="return_longitude" id="return_longitude" />
                        </div>
                        <div class="col tolong-jangan-delete"></div>
                    </div>
                    <div class="row">
                        <div class="col"><label class="input-label">Return Date</label><input type="text"
                                id="InputReturnDate" class="dateselect hero-input input-date" onfocus="blur();"
                                name="return_date" /></div>
                        <div class="col"><label class="input-label">Return Time</label>

                            <select type="text" id="InputReturnTime" class="hero-input input-time custom-select"
                                placeholder="Return Time" name="return_time" value="" autocomplete="off"
                                required="">
                                <option value="9:00 AM" @if (app('request')->input('return_time') == '9:00 AM') selected @endif>
                                    9:00 AM</option>
                                <option value="9:30 AM" @if (app('request')->input('return_time') == '9:30 AM') selected @endif>9:30 AM
                                </option>
                                <option value="10:00 AM" @if (app('request')->input('return_time') == '10:00 AM') selected @endif>10:00 AM
                                </option>
                                <option value="10:30 AM" @if (app('request')->input('return_time') == '10:30 AM') selected @endif>10:30 AM
                                </option>
                                <option value="11:00 AM" @if (app('request')->input('return_time') == '11:00 AM') selected @endif>11:00 AM
                                </option>
                                <option value="11:30 AM" @if (app('request')->input('return_time') == '11:30 AM') selected @endif>11:30 AM
                                </option>
                                <option value="12:00 PM" @if (app('request')->input('return_time') == '12:00 PM') selected @endif>12:00 PM
                                </option>
                                <option value="12:30 PM" @if (app('request')->input('return_time') == '12:30 PM') selected @endif>12:30 PM
                                </option>
                                <option value="1:00 PM" @if (app('request')->input('return_time') == '1:00 PM') selected @endif>1:00 PM
                                </option>
                                <option value="1:30 PM" @if (app('request')->input('return_time') == '1:30 PM') selected @endif>1:30 PM
                                </option>
                                <option value="2:00 PM" @if (app('request')->input('return_time') == '2:00 PM') selected @endif>2:00 PM
                                </option>
                                <option value="2:30 PM" @if (app('request')->input('return_time') == '2:30 PM') selected @endif>2:30 PM
                                </option>
                                <option value="3:00 PM" @if (app('request')->input('return_time') == '3:00 PM') selected @endif>3:00 PM
                                </option>
                                <option value="3:30 PM" @if (app('request')->input('return_time') == '3:30 PM') selected @endif>3:30 PM
                                </option>
                                <option value="4:00 PM" @if (app('request')->input('return_time') == '4:00 PM') selected @endif>4:00 PM
                                </option>
                                <option value="4:30 PM" @if (app('request')->input('return_time') == '4:30 PM') selected @endif>4:30 PM
                                </option>
                                <option value="5:00 PM" @if (app('request')->input('return_time') == '5:00 PM') selected @endif>5:00 PM
                                </option>
                                <option value="5:30 PM" @if (app('request')->input('return_time') == '5:30 PM') selected @endif>5:30 PM
                                </option>
                                <option value="6:00 PM" @if (app('request')->input('return_time') == '6:00 PM') selected @endif>6:00 PM
                                </option>
                                <option value="6:30 PM" @if (app('request')->input('return_time') == '6:30 PM') selected @endif>6:30 PM
                                </option>
                                <option value="7:00 PM" @if (app('request')->input('return_time') == '7:00 PM') selected @endif>7:00 PM
                                </option>
                                <option value="7:30 PM" @if (app('request')->input('return_time') == '7:30 PM') selected @endif>7:30 PM
                                </option>
                                <option value="8:00 PM" @if (app('request')->input('return_time') == '8:00 PM') selected @endif>8:00 PM
                                </option>
                                <option value="8:30 PM" @if (app('request')->input('return_time') == '8:30 PM') selected @endif>8:30 PM
                                </option>
                                <option value="9:00 PM" @if (app('request')->input('return_time') == '9:00 PM') selected @endif>9:00 PM
                                </option>
                                <option value="9:30 PM" @if (app('request')->input('return_time') == '9:30 PM') selected @endif>9:30 PM
                                </option>
                                <option value="10:00 PM" @if (app('request')->input('return_time') == '10:00 PM') selected @endif>10:00 PM
                                </option>
                                <option value="10:30 PM" @if (app('request')->input('return_time') == '10:30 PM') selected @endif>10:30 PM
                                </option>
                                <option value="11:00 PM" @if (app('request')->input('return_time') == '11:00 PM') selected @endif>11:00 PM
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 offset-xl-0 d-xl-flex justify-content-xl-center align-items-xl-center">
                            <button
                                class="btn btn-primary d-xl-flex justify-content-xl-center align-items-xl-center btn-orange-big"
                                role="submit">Search</button>
                        </div>
                    </div>
                </div>
        </form>
    </section>
    <section>
        <h1 class="title-section">Popular Customer's Choice</h1>
        <div class="carousel-section">
            <div class="car-carousel-slick">
                <div>
                    <div class="card d-flex carousel-bg">
                        <div class="card-body text-center"><img class="d-flex d-xl-flex mx-auto carousel-img"
                                src="assets/img/PopularCar1.png">
                            <h4 class="card-title carousel-text-1">Honda Accord 9th Gen<br></h4>
                            <h6 class="text-muted card-subtitle carousel-text-2">Starting from</h6>
                            <h5 class="carousel-text-3">RM385 / day<br></h5>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card carousel-bg">
                        <div class="card-body text-center"><img class="d-flex mx-auto carousel-img"
                                src="assets/img/PopularCar2.png">
                            <h4 class="card-title carousel-text-1">Honda City GM6<br></h4>
                            <h6 class="text-muted card-subtitle carousel-text-2">Starting from</h6>
                            <h5 class="carousel-text-3">RM230 / day<br></h5>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card carousel-bg">
                        <div class="card-body text-center"><img class="d-flex mx-auto carousel-img"
                                src="assets/img/PopularCar3.png">
                            <h4 class="card-title carousel-text-1">Honda CR-V 1.5(A) 5th Gen<br></h4>
                            <h6 class="text-muted card-subtitle carousel-text-2">Starting from</h6>
                            <h5 class="carousel-text-3">RM510 / day<br></h5>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card carousel-bg">
                        <div class="card-body text-center"><img class="d-flex mx-auto carousel-img"
                                src="assets/img/PopularCar4.png">
                            <h4 class="card-title carousel-text-1">Hyundai Starex Royale 2.5D<br></h4>
                            <h6 class="text-muted card-subtitle carousel-text-2">Starting from</h6>
                            <h5 class="carousel-text-3">RM500 / day<br></h5>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card carousel-bg">
                        <div class="card-body text-center"><img class="d-flex mx-auto carousel-img"
                                src="assets/img/PopularCar5.png">
                            <h4 class="card-title carousel-text-1">Toyota Innova Crysta<br></h4>
                            <h6 class="text-muted card-subtitle carousel-text-2">Starting from</h6>
                            <h5 class="carousel-text-3">RM400 / day<br></h5>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card carousel-bg">
                        <div class="card-body text-center"><img class="d-flex mx-auto carousel-img"
                                src="assets/img/PopularCar6.png">
                            <h4 class="card-title carousel-text-1">Perodua Aruz<br></h4>
                            <h6 class="text-muted card-subtitle carousel-text-2">Starting from</h6>
                            <h5 class="carousel-text-3">RM285 / day<br></h5>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card carousel-bg">
                        <div class="card-body text-center"><img class="d-flex mx-auto carousel-img"
                                src="assets/img/PopularCar7.png">
                            <h4 class="card-title carousel-text-1">Perodua Bezza Premium X<br></h4>
                            <h6 class="text-muted card-subtitle carousel-text-2">Starting from</h6>
                            <h5 class="carousel-text-3">RM150 / day<br></h5>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card carousel-bg">
                        <div class="card-body text-center"><img class="d-flex mx-auto carousel-img"
                                src="assets/img/PopularCar8.png">
                            <h4 class="card-title carousel-text-1">New Perodua Myvi<br></h4>
                            <h6 class="text-muted card-subtitle carousel-text-2">Starting from</h6>
                            <h5 class="carousel-text-3">RM160 / day<br></h5>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card carousel-bg">
                        <div class="card-body text-center"><img class="d-flex mx-auto carousel-img"
                                src="assets/img/PopularCar9.png">
                            <h4 class="card-title carousel-text-1">New Toyota Alphard<br></h4>
                            <h6 class="text-muted card-subtitle carousel-text-2">Starting from</h6>
                            <h5 class="carousel-text-3">RM1200 / day<br></h5>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card carousel-bg">
                        <div class="card-body text-center"><img class="d-flex mx-auto carousel-img"
                                src="assets/img/PopularCar10.png">
                            <h4 class="card-title carousel-text-1">Toyota Camry Hybrid<br></h4>
                            <h6 class="text-muted card-subtitle carousel-text-2">Starting from</h6>
                            <h5 class="carousel-text-3">RM580 / day<br></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="carousel-note">*Rate shown differs based on your start location<br></h1>
    </section>
    <section>
        <h1 class="title-section">What Our Happy Customers Say</h1>
        <div class="row d-flex flex-row mx-auto testimoni-all">
            <div class="col-xl-4 offset-xl-0">
                <div class="row testimoni-bg">
                    <div class="col-12 offset-0 text-center"><img class="testimoni-img"
                            src="assets/img/Toyota%20Vellfire%20(AH20).png"></div>
                    <div class="col-xl-12 offset-xl-0">
                        <p class="text-center testimoni-name">Syahima Akmar Kamat<br></p>
                    </div>
                    <div class="col-xl-12 offset-xl-0">
                        <p class="text-center testimoni-address">(Taman Melawati, Kuala Lumpur)<br></p>
                    </div>
                    <div class="col-xl-12 offset-xl-0 text-center d-xl-flex justify-content-center"><img
                            class="testimoni-star-img" src="assets/img/Icon%20Star.svg"><img
                            class="testimoni-star-img" src="assets/img/Icon%20Star.svg"><img
                            class="testimoni-star-img" src="assets/img/Icon%20Star.svg"><img
                            class="testimoni-star-img" src="assets/img/Icon%20Star.svg">
                        <img class="testimoni-star-img" src="assets/img/Icon%20Star.svg">
                    </div>
                    <div class="col-12 offset-0 text-center">
                        <p class="text-center testimoni-review">Delivery and pick up of car was punctual. When the
                            vehicle needed a bit of fixing, they were quick to respond and have the car delivered back
                            to where I needed to be. Will highly recommend to friends and family.<br></p>
                    </div>
                    <div class="col-5 offset-1 text-center testimoni-car-bg"><img class="testimoni-car-img"
                            src="assets/img/Icon%20Car.svg">
                        <p class="text-center testimoni-car-text">Toyota Vellfire (AH20) 3.5V-L<br></p>
                    </div>
                    <div class="col-5 offset-0 text-center testimoni-branch-bg"><img class="testimoni-branch-img"
                            src="assets/img/Icon%20Branch.svg">
                        <p class="text-center testimoni-car-text">Setapak, Kuala Lumpur</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 offset-xl-0">
                <div class="row testimoni-bg">
                    <div class="col-12 offset-0 text-center"><img class="testimoni-img"
                            src="assets/img/Toyota%20Wish%20(AE20).png"></div>
                    <div class="col-xl-12 offset-xl-0">
                        <p class="text-center testimoni-name">Daniel L.<br></p>
                    </div>
                    <div class="col-xl-12 offset-xl-0">
                        <p class="text-center testimoni-address">(South Guildford, Australia)<br></p>
                    </div>
                    <div class="col-xl-12 offset-xl-0 text-center d-xl-flex justify-content-center"><img
                            class="testimoni-star-img" src="assets/img/Icon%20Star.svg"><img
                            class="testimoni-star-img" src="assets/img/Icon%20Star.svg"><img
                            class="testimoni-star-img" src="assets/img/Icon%20Star.svg"><img
                            class="testimoni-star-img" src="assets/img/Icon%20Star.svg">
                        <img class="testimoni-star-img" src="assets/img/Icon%20Star.svg">
                    </div>
                    <div class="col-12 offset-0 text-center">
                        <p class="text-center testimoni-review">This was my first time renting with ARA. Had a really
                            positive experience. Azri met me at arrival hall at KLIA and walked me to car park house
                            where he had car waiting. Also supplied token to exit car park. When it was time to
                            give car back Firdaus met me at my hotel in Sentral to collect. Wonderful service. Will
                            certainly recommend and use again.<br></p>
                    </div>
                    <div class="col-5 offset-1 text-center testimoni-car-bg"><img class="testimoni-car-img"
                            src="assets/img/Icon%20Car.svg">
                        <p class="text-center testimoni-car-text">Toyota Wish<br></p>
                    </div>
                    <div class="col-5 offset-0 text-center testimoni-branch-bg"><img class="testimoni-branch-img"
                            src="assets/img/Icon%20Branch.svg">
                        <p class="text-center testimoni-car-text">KLIA Sepang<br></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 offset-xl-0">
                <div class="row testimoni-bg">
                    <div class="col-12 offset-0 text-center"><img class="testimoni-img"
                            src="assets/img/Honda%20CR-V%20(5th%20Generation).png"></div>
                    <div class="col-xl-12 offset-xl-0">
                        <p class="text-center testimoni-name">Michael Ramirez<br></p>
                    </div>
                    <div class="col-xl-12 offset-xl-0">
                        <p class="text-center testimoni-address">(Bangkok, Thailand)<br></p>
                    </div>
                    <div class="col-xl-12 offset-xl-0 text-center d-xl-flex justify-content-center"><img
                            class="testimoni-star-img" src="assets/img/Icon%20Star.svg"><img
                            class="testimoni-star-img" src="assets/img/Icon%20Star.svg"><img
                            class="testimoni-star-img" src="assets/img/Icon%20Star.svg"><img
                            class="testimoni-star-img" src="assets/img/Icon%20Star.svg">
                        <img class="testimoni-star-img" src="assets/img/Icon%20Star.svg">
                    </div>
                    <div class="col-12 offset-0 text-center">
                        <p class="text-center testimoni-review">Terrific car and much larger interior than I expected.
                            Service was great and I would definitely rent this or a similar car from ARA again on my
                            next trip to Malaysia.<br></p>
                    </div>
                    <div class="col-5 offset-1 text-center testimoni-car-bg"><img class="testimoni-car-img"
                            src="assets/img/Icon%20Car.svg">
                        <p class="text-center testimoni-car-text">Honda CRV 1.5(A) 5th Gen<br></p>
                    </div>
                    <div class="col-5 offset-0 text-center testimoni-branch-bg"><img class="testimoni-branch-img"
                            src="assets/img/Icon%20Branch.svg">
                        <p class="text-center testimoni-car-text">Petaling Jaya, Selangor</p>
                    </div>
                </div>
            </div>
        </div><a
            class="text-center d-flex d-xl-flex justify-content-center justify-content-xl-center testimoni-view-all"
            href="#">View All Reviews</a>
    </section>
    <section>
        <h1 class="title-section">Choosing Rental Car Has Never Been So Easy<br></h1><iframe
            class="d-flex d-xl-flex mx-auto video" allowfullscreen="" frameborder="0"
            src="https://www.youtube.com/embed/bt0KlMAU17c" width="960px" height="540px"
            style="margin-bottom: 50px;"></iframe>
    </section>
    <section>
        <h1 class="title-section">Frequently Asked Questions<br></h1>
        <div role="tablist" class="d-flex flex-column mx-auto" id="accordion-1">
            <div class="card">
                <a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1"
                    href="#accordion-1 .item-1" style="color: #444444;">
                    <div role="tab" class="card-header">
                        <h5 class="faq-question">Why customers choose ARA Car Rental as their car rental choice in
                            Malaysia?</h5>
                    </div>
                </a>
                <div role="tabpanel" data-parent="#accordion-1" class="collapse item-1 faq-answer">
                    <div class="card-body">
                        <p class="card-text">ARA Car Rental provide our customers with the freedom / access of choosing
                            the most affordable vehicles with the ability to compare the best rates / reviews according
                            to their location at the ease of their fingertip.<br /></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-2"
                    href="#accordion-1 .item-2" style="color: #444444;">
                    <div role="tab" class="card-header">
                        <h5 class="faq-question">Will you be able to sent the car to my required location?<br /></h5>
                    </div>
                </a>
                <div role="tabpanel" data-parent="#accordion-1" class="collapse item-2 faq-answer">
                    <div class="card-body">
                        <p class="card-text">Yes! We&#39;re focusing with door-to-door delivery and pick up. Thus,
                            customers in need of a vehicle wouldn&#39;t have to undergo the hassle to find a vehicle to
                            get to our location in order to get their rented vehicle.<br /></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-3"
                    href="#accordion-1 .item-3" style="color: #444444;">
                    <div role="tab" class="card-header">
                        <h5 class="faq-question">Is a deposit required when making a reservation?<br /></h5>
                    </div>
                </a>
                <div role="tabpanel" data-parent="#accordion-1" class="collapse item-3 faq-answer">
                    <div class="card-body">
                        <p class="card-text">Yes. The deposit amount varies by car model. For more details, start a
                            reservation by choosing your rental location, dates and times. A refundable deposit will be
                            taken from the hirer for security purposes.<br /></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-4"
                    href="#accordion-1 .item-4" style="color: #444444;">
                    <div role="tab" class="card-header">
                        <h5 class="faq-question">Is there a fee for cancelling or changing a reservation?<br /></h5>
                    </div>
                </a>
                <div role="tabpanel" data-parent="#accordion-1" class="collapse item-4 faq-answer">
                    <div class="card-body">
                        <p class="card-text">ARA Car Rental has no cancellation fee when we are advised 72 hours prior
                            to the reserved rental start date. Cancellations less than 72 hours incur a non-refundable.
                            No Refund is made for a No Show or failure to produce the correct documentation
                            (voucher, driving licence/s, credit card etc.). ARA Car Rental does not refund any unused
                            days if the customer does not show up, shows up late or returns the vehicle
                            early.<br /><br />Once a booking is confirmed, you can modify or
                            cancel your booking by sending us an email with the reservation number or contacting us
                            directly. ARA Car Rental accept any amendment up to 72 hours prior to rental start date
                            only. Amendment less than 72 hours will not be entertained.<br /></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-5"
                    href="#accordion-1 .item-5" style="color: #444444;">
                    <div role="tab" class="card-header">
                        <h5 class="faq-question">How long will it take for ARA Car Rental to respond to my
                            booking?<br /></h5>
                    </div>
                </a>
                <div role="tabpanel" data-parent="#accordion-1" class="collapse item-5 faq-answer">
                    <div class="card-body">
                        <p class="card-text">We will process your booking within 24 hours. You will received a
                            confirmation email with the balance payment link, once we&#39;ve appointed a car unit and a
                            delivery staff (if any) for your order. If you did not receive any response within
                            24 hours, feel free to contact us.<br /></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-6"
                    href="#accordion-1 .item-6" style="color: #444444;">
                    <div role="tab" class="card-header">
                        <h5 class="faq-question">What if my arrival flight is delayed?<br /></h5>
                    </div>
                </a>
                <div role="tabpanel" data-parent="#accordion-1" class="collapse item-6 faq-answer">
                    <div class="card-body">
                        <p class="card-text">When booking your reservation, it is very important to include your flight
                            number. Providing us with your flight information allows us to serve you better. Only
                            reservation with provided flight number, will qualify for extra 12 hours validity
                            from the scheduled time of pick-up for delayed flights.<br /></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-7"
                    href="#accordion-1 .item-7" style="color: #444444;">
                    <div role="tab" class="card-header">
                        <h5 class="faq-question">Can I pick-up / drop-off the car very early in the morning / late
                            night?<br /></h5>
                    </div>
                </a>
                <div role="tabpanel" data-parent="#accordion-1" class="collapse item-7 faq-answer">
                    <div class="card-body">
                        <p class="card-text">Yes! You may request for early pick up / late return from 7:00am to 8:45am
                            and 11:15pm to 1:00am.<br />Our operational hours is from 9:00am to 11:00pm daily. <br />A
                            surcharge of MYR70 per way would be levied for pick up and returning
                            of vehicle after operational hours, for all locations nationwide.<br /></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-8"
                    href="#accordion-1 .item-8" style="color: #444444;">
                    <div role="tab" class="card-header">
                        <h5 class="faq-question">Is there rental car insurance?<br /></h5>
                    </div>
                </a>
                <div role="tabpanel" data-parent="#accordion-1" class="collapse item-8 faq-answer">
                    <div class="card-body">
                        <p class="card-text">All our vehicle is insured. However the renter is always liable for an
                            amount equivalent to the excess clause not exceed for each Group Model Category (Read more :
                            https://www.aracarrental.com.my/general-terms-conditions).<br />In order
                            to reduce / waive your excess liability, we offer an option of CDW or Super CDW. Damage
                            Waiver is not insurance. The purchase of DW (CDW or SCDW) is optional and not required in
                            order to rent a vehicle.<br />You may purchase optional
                            DW for an additional fee. If you purchase DW we agree, subject to the actions that
                            invalidate DW listed on the rental agreement, to contractually waive your responsibility for
                            all or part of the cost of excess liability to the vehicle.<br />The cost of Damage Waiver
                            varies by Group Model Category. You can find specific pricing by starting a reservation here
                            : https://www.aracarrental.com.my<br /></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h1 class="title-section">Our Nationwide Locations<br></h1>
        <div id="map-canvas-div" class="map-branch"></div>
    </section>
    @include('web.includes.scripts.main')
</body>
@include('web.includes.footer')
@include('web.includes.layout.modal')

</html>
