@extends('layouts.app')


@section('content')


<header>


    <section class="presentation first">
        <div class="product-presentation">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-pack3">
                                   
                    </div>
                </div>
                <div class="col-md-6 description-hotel">
                    <div class="container">
                    <h2 class="">SOFITEL PALAIS IMPERIAL</h2>
                        <p class="">Located in the heart of Hivernage district, within walking distance from the Jamaa el Fna square and the city's main attractions. The Sofitel Palais Imperial is a beautiful Moorish property set amongst manicured gardens and fountains, offering comfortable rooms and spacious suites, with beautiful views of either the city, the pool, or the gardens. The interior design has succeeded in combining French elegance with a dash of Moroccan Art de Vivre.  	 						
                        </p>
                    </div>
                </div>
                
            </div>
</header>

<form  id="validate" action="process" method="post">
    @csrf

    <div class="container choice-pack">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row ">

                           <div class="radio-buttons">
                            <h4 class="qts-title">Room Type ?</h4>
                            <label class="custom-radio">
                                <input type="radio" name="roomtype" value="Superior Room" />
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
                            <input class="form-check-input" type="radio" name="coupleorsingle" id="Deluxe_room" value="Per Couple">
                            <label class="form-check-label" for="Deluxe_room">
                                a couple
                            </label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="coupleorsingle" id="Deluxe_room" value="Single Traveller" >
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
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="fullname" required>
                                    <label for="floatingInput">Full Name</label>
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
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="terms" id="" value="" required>
                                  <label class="form-check-label" for="">
                                    I agreed to the <a href="#"> Terms and Conditions</a>
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
                                <input type="hidden" name="price" value="1" >
                                <input type="hidden" name="cmd" value="<?php echo substr(md5(mt_rand()), 0, 7); ?>">
                                <h4 class="price">2000 MAD  <span> ~ approximately 200 $</span></h4>
                            </div>
                        </div>
                        <hr>

                        <div class="button-group">


                            <button class="col-md-7 btn btn-submit" type="submit" >Book Trip
                            </button>


                        </div>
                        <div class="col-md-12">
                            <h6 class="text-center mt-3">Secure Payment .</h6>
                            <p style="font-size: 10px;">NB: Please note that your credit card will be debited in MAD and the exchange rate will be the one of your credit card company at the time of the booking												</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>


@endsection
