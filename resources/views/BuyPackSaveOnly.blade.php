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
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="Deluxe_room" value="Deluxe room">
                          <label class="form-check-label" for="Deluxe_room">
                            Per coupl 
                          </label>
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="Deluxe_room" value="Deluxe room">
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

<div class="container card-shop">
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

<div class="container payment-submit mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="button-group">
                <a href="/" class="col-md-7 btn btn-submit">
                    Save Personal Informations
                </a>
            </div>
        </div>
    </div>
</div>
@endsection



