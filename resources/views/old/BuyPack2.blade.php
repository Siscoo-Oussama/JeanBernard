@extends('layouts.app')

@section('content')

@if(session()->has('success'))
    <div class="alert alert-success" class="text-center">
        {{ session()->get('success') }}
    </div>
@endif

<h2 class="text-center">Booking Form</h2>

<form  id="validate" action="submit" method="post">
    @csrf

    <div class="container choice-pack">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="roomtype" id="premuimriad" value="Premuim Riad">
                                <label class="form-check-label" for="Deluxe_room">
                                    Premuim Riad
                                </label>
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="roomtype" id="superiorriad" value="Superior Riad">
                                <label class="form-check-label" for="Junior_suite">
                                    Superior Riad
                                </label>
                              </div>
                           </div>


                          <hr class="mt-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="coupleorsingle" id="Deluxe_room" value="Per Couple">
                                <label class="form-check-label" for="Deluxe_room">
                                    Per Couple
                                </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="coupleorsingle" id="Deluxe_room" value="Single Traveller" >
                                <label class="form-check-label" for="Deluxe_room">
                                    Single Traveller
                                </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container card-shop mb-3">
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

    <div class="container card-shop mb-3">
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
