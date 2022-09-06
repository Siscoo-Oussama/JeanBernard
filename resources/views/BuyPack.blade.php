@extends('layouts.app')

@section('content')


<div class="container choice-pack">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                       <div class="col-md-4">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="Deluxe_room" value="Deluxe room">
                            <label class="form-check-label" for="Deluxe_room">
                                Deluxe room
                            </label>
                          </div>
                       </div>

                       <div class="col-md-4">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="Junior_suite" value="Junior suite">
                            <label class="form-check-label" for="Junior_suite">
                                Junior suite
                            </label>
                          </div>
                       </div>

                      <div class="col-md-4">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="Prestige_suite" value="Prestige suite">
                          <label class="form-check-label" for="Prestige_suite">
                            Prestige suite
                          </label>
                        </div>
                      </div>

                      <hr class="mt-3">
                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault2" id="Deluxe_room" value="Deluxe room">
                          <label class="form-check-label" for="Deluxe_room">
                            Per coupl 
                          </label>
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault2" id="Deluxe_room" value="Deluxe room">
                          <label class="form-check-label" for="Deluxe_room">
                            Single traveller 
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
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Nom</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Prenom</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email Adress</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Telephone</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Ville</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
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

<div class="container payment-submit">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="total">Total</h1>
                        </div>
                        <div class="col-md-6">
                            <h1 class="price">$200</h1>
                        </div>
                    </div>
                    <hr>
         
                    <div class="button-group">
                        <a href="/" class="col-md-7 btn btn-submit">
                            Submit Secure Payment
                        </a>
                    </div>
                    <div class="col-md-12">
                        <p>Encrypted and Secure Payments</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



