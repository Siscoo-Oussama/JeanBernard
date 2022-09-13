
@extends('layouts.app')

@section('content')

@if(session()->has('success'))
<div class="alert alert-success" class="text-center">
    {{ session()->get('success') }}
</div>
@endif

@if(session()->has('error'))
<div class="alert alert-danger" class="text-center">
{{ session()->get('error') }}
</div>
@endif
<div class="content">
<header class="container">


    <section class="presentation first">
        <div class="product-presentation">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-pack1">

                    </div>
                </div>
                <div class="col-md-6 description-hotel">
                    <h2 class="">Sofitel Palais Imperial</h2>
                    <p>Located in the heart of Hivernage district, within walking distance from the Jamaa el Fna square and the city's main attractions. The Sofitel Palais Imperial is a beautiful Moorish property set amongst manicured gardens and fountains, offering comfortable rooms and spacious suites, with beautiful views of either the city, the pool, or the gardens. The interior design has succeeded in combining French elegance with a dash of Moroccan Art de Vivre.
					</p>
                </div>

            </div>

</header>

<br>


<div class="container description-hotel">
    <h3 class="">Deluxe room</h3>
    <p style="text-align: left;">30 m²/322 sq ft, traditional decor, Sofitel MyBed, shower, Atelier Cologne bath products, free WiFi, 48" TV, minibar, BOSE sound system, Tchaba teas, hair dryer, safe, air conditioning.
    </p>
</div>

<br>

<div class="container description-hotel">
    <h3 class="">Junior suite</h3>
    <p style="text-align: left;">44 m²/473 sq ft, traditional decor, Sofitel MyBed, lounge area, bathtub and shower, Hermès bath products, free WiFi, 48" TV, BOSE sound system, Nespresso coffee, minibar, hair dryer, safe, air conditioning.
    </p>
</div>

<br>

<div class="container ">
    <h3 class="">Prestige suite</h3>
    <p style="text-align: left;">68 m²/732 sq ft, traditional decor, Sofitel MyBed, separate lounge, bathtub and shower, Hermès bath products, free WiFi, 48" TV, BOSE sound system, Nespresso coffee, minibar, hair dryer, safe, air conditioning.
    </p>
</div>

<br><br>


<form  id="validate" action="process" method="post">
    @csrf

    <div class="container choice-pack ">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="radio-buttons">
                                <h4 class="qts-title">Room Name ?</h4>

                                <label class="custom-radio">
                                    <input type="radio" class="form_check_input" name="roomtype" value="Deluxe room" />
                                    <span class="radio-btn">
                                        <i class="las la-check"></i>

                                      <div class="hobbies-icon">
                                        <img src="{{asset('images/SofitelDeluxeroom.jpg')}}" alt="">
                                        <h3>Deluxe room </h3>


                                      </div>
                                    </span>
                                  </label>
                              <label class="custom-radio">
                                <input type="radio" class="form_check_input" name="roomtype" value="Junior suite" />
                                <span class="radio-btn">
                                    <i class="las la-check"></i>
                                  <div class="hobbies-icon">
                                    <img src="{{asset('images/SofitelJuniorsuite.jpg')}}" alt="">
                                    <h3>Junior suite</h3>
                                  </div>
                                </span>
                              </label>
                              <label class="custom-radio">
                                <input type="radio" class="form_check_input" name="roomtype" value="Prestige suite" />
                                <span class="radio-btn">
                                    <i class="las la-check"></i>
                                  <div class="hobbies-icon">
                                    <img src="{{asset('images/SofitelPrestigesuite.jpg')}}" alt="">
                                    <h3>Prestige suite</h3>
                                  </div>
                                </span>
                              </label>
                            </div>

                            <hr class="mt-5">


                            <div class="col-md-4">
                                <div class="room-title">
                                    <h5 class="qts-title">Are You ?</h5>
                                </div>
                            </div>


                              <div class="col-md-4">
                                <div class="form-check">
                                <input class="form_check_input2" type="radio" name="coupleorsingle" id="couple" value="Per Couple">
                                <label class="form-check-label" for="Deluxe_room">
                                    a couple
                                </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-check">
                                <input class="form_check_input2" type="radio" name="coupleorsingle" id="single" value="Single Traveller" >
                                <label class="form-check-label" for="Deluxe_room">
                                    a single
                                </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container card-shop" style="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="fullname" required>
                                    <label for="floatingInput">Full Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" mb-3">
                                    <input type="text" style="height: 55px" class="form-control" id="" name="partnername" placeholder="Partner Full Name">
                                    {{-- <label for="floatingInput">Partner Name (Only for couple type)</label> --}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="nationality" required>
                                    <label for="floatingInput">Nationality</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder=" " name="email" required>
                                    <label for="floatingInput">Email Adress</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="tel" required>
                                    <label for="floatingInput">Phone</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="country" required>
                                    <label for="floatingInput">Country</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="adress" required>
                                    <label for="floatingInput">Address</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="notes" >
                                    <label for="floatingInput">Special Note (dietary requirements, allergies, medical condition, bedding preference…)</label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container payment-submit mb-3 mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-check2">
                                  <input class="form-check-input" type="radio" name="terms" id="" value="" required>
                                  <label class="form-check-label" for="">
                                    I agreed to the <a href="http://hbsmorocco2023.com/wp-content/uploads/2022/09/Morocco-Terms-Conditions-HBS-Alumni-trip-April-2023.pdf" target="_black" > Terms and Conditions</a>
                                  </label>
                                </div>
                             </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container payment-submit">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <h1 class="total">Total: </h1>
                            </div>
                            <div class="col-md-8">
                                <input type="hidden" class="pricerequest" name="price">
                                <input type="hidden" name="cmd" value="<?php echo substr(md5(mt_rand()), 0, 7); ?>">

                                <h4 class="price"> MAD</h4>
                                <h4 class="priceUSD">(~ approx  USD )</h4>
                            </div>
                        </div>
                        <hr>

                        <div class="button-group">


                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <img src={{asset('images/visaicon.png')}} alt="" class="image-payment">
                                    <button class="form-control btn btn-submit" type="submit" >
                                        Complete Payment Transaction
                                    </button>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <img src={{asset('images/amex.png')}} alt="" class="image-payment">
                                    <button class="form-control btn btn-submit"  formaction="/processwithamex" type="submit" >
                                        Submit Payment Request
                                    </button>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-12">
                            <p style="font-size: 10px;">NB: Please note that your credit card will be debited in MAD and the exchange rate will be the one of your credit card company at the time of the booking</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>


@endsection
