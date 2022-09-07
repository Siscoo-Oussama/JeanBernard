

@extends('layouts.app')
<head>


    <title>HBS OPM30 Morocco 2023</title>


</head>

@section('content')

 @if(session()->has('success'))
    <div class="alert alert-success" class="text-center">
        {{ session()->get('success') }}
    </div>
@endif

<h4 class="title">ROYAL MANSOUR MARRAKECH</h4>
<form  id="validate" action="submit" method="post">
    @csrf

    <div class="container card-terms">
        <div class="row">
            <div class="col-md-12">

                        <div class="row">
                            <div class="banner-pack1">

                            </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container card-description">
        <div class="row">
            <p>One of the best, if not the best property in Marrakech, considered by some among the top 5 in the world, ideally situated within the walls of the medina and just a short walk from the Jamaa el Fna square. The Royal Mansour Marrakech showcases stunning Moroccan architecture and authentic artcrafts. With its individual riads featuring elengant design and beautifully appointed bedrooms, every riad has its own plunge pool on an exclusive roof terrace with magnificent views of the city or Atlas Mountains, the Royal Mansour Marrakech offers its guests a unique experience of luxury hospitality
			</p>
        </div>
    </div>

    <div class="container choice-pack">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                           <div class="radio-buttons">
                              <h4 class="qts-title">Room Type ?</h4>
                             <label class="custom-radio">
                                <input type="radio" name="roomtype" value="Premuim Riad"/>
                                <span class="radio-btn">
                                    <i class="las la-check"></i>
                                  <div class="hobbies-icon">
                                    <img src="{{asset('images/RMMRiadPremie3.jpg')}}" alt="">
                                    <h3>Premuim Riad</h3>
                                  </div>
                                </span>
                               </label>
                              <label class="custom-radio">
                              <input type="radio" name="roomtype" value="Superior Riad" />
                               <span class="radio-btn">
                                <i class="las la-check"></i>
                              <div class="hobbies-icon">
                                <img src="{{asset('images/RMMRiadSuperier.jpg')}}" alt="">
                                <h3>Superior Riad</h3>
                              </div>
                              </span>
                              </label>
                            </div>


                          <hr class="mt-3">
                          <h4 class="qts-title">Are You ?</h4>
                            <div class="col-md-6">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="coupleorsingle" id="Deluxe_room" value="Per Couple">
                                <label class="form-check-label" for="Deluxe_room">
                                    a Couple
                                </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="coupleorsingle" id="Deluxe_room" value="Single Traveller" >
                                <label class="form-check-label" for="Deluxe_room">
                                    a Single
                                </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container card-shop2 mb-3">
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

                        <div class="button-group">


                            <button class="col-md-7 btn btn-submit" type="submit" >Submit
                            </button>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</form>


@endsection
