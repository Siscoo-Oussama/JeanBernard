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


<header class="container">


    <section class= presentation first">
        <div class="product-presentation">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-pack3">

                    </div>
                </div>
                <div class="col-md-6 description-hotel">
                    <div class="container">
                    <h2 class="">Hivernage Hotel & SPA</h2>
                        <p>The Hivernage Hotel & Spa is also located at the heart of the Hivernage district - just across the street from Sofitel Palais Imperial, within a few minutes walk from the Jamâa el Fna square and the souks. The hotel features rooms and suites that combine comfort with the nobility of traditional design with views of the Koutoubia minaret and the city's ramparts. This hotel provides its guests with a great value-for-money.
						</p>
                    </div>
                </div>

            </div>
</header>

<div class="container description-hotel">
    <h3 class="">Superior Room</h3>
    <p style="text-align: left;">32 m²/344 sq ft, traditional and contemporary Moroccan design, king-sized bed, shower or bathtub, free WiFi, flat-screen TV, minibar, hair dryer, safe, air conditioning.</p>

</div>
<BR>

<form  id="validate" action="process" method="post">
    @csrf

    <div class="container choice-pack">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row ">

                           <div class="radio-buttons">
                            <h4 class="qts-title">Room Name ?</h4>
                            <label class="custom-radio">
                                <input type="radio" class="form_check_input" name="roomtype" value="Superior Room" />
                                <span class="radio-btn">
                                    <i class="las la-check"></i>
                                  <div class="hobbies-icon">
                                    <img src="{{asset('images/Hivernageroom.jpg')}}" alt="">
                                    <h3>Superior Room</h3>
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

    <div class="container card-shop3 mb-3">
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
                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="notes">
                                    <label for="floatingInput">Special Note (dietary requirements, allergies, medical condition, bedding preference…)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container payment-type">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="Dollar" value="Dollar">
                                <label class="form-check-label" for="Dollar">
                                    Dollar ($US)
                                </label>
                              </div>
                           </div>

                           <div class="col-md-4">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="Euro" value="Euro">
                                <label class="form-check-label" for="Euro">
                                    Euro (€)
                                </label>
                              </div>
                           </div>

                          <div class="col-md-4">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault1" id="MAD" value="MAD">
                              <label class="form-check-label" for="Dirham_marocain">
                                DHM (MAD)
                              </label>
                            </div>
                          </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container payment-submit mb-3">
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
                            <div class="col-md-6">
                                <h1 class="total">Total:</h1>
                            </div>
                            <div class="col-md-6">
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
                            <p style="font-size: 10px;">NB: Please note that your credit card will be debited in MAD and the exchange rate will be the one of your credit card company at the time of the booking												</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>


@endsection
