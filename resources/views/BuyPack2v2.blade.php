
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


  <section id="pack1">
    <header class="container">


        <section class="presentation first">
            <form  id="validate" action="submit" method="post">
                @csrf
            <div class="product-presentation">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner-pack2">
    
                        </div>
                    </div>
                    <div class="col-md-6 description-hotel">
                        <h2 class="">Royal Mansour Marrakech</h2>
                        <p>One of the best, if not the best property in Marrakech, considered by some among the top 5 in the world, ideally situated within the walls of the medina and just a short walk from the Jamaa el Fna square. The Royal Mansour Marrakech showcases stunning Moroccan architecture and authentic artcrafts. With its individual riads featuring elengant design and beautifully appointed bedrooms, every riad has its own plunge pool on an exclusive roof terrace with magnificent views of the city or Atlas Mountains, the Royal Mansour Marrakech offers its guests a unique experience of luxury hospitality						
                        </p>
                    </div>
    
                </div>
    </header>

    <div class="container room-types">
        <div class="row">
            <div class="col-md-5 " style="float:none;margin:auto;">
                <div class="card">
                    <h2 class="text-center">Premuim Riad</h2>
                    <div class="card-header">
                        <img src="{{asset('images/RMMRiadPremiefirst.jpg')}}" alt="">
                    </div>
                    <div class="card-body">
                        <p class="mb-2">140 m²/1500 sq ft split into 3 floors
                        </p>
                        <li>Ground floor has the open-air courtyard with fountain, and living room.</li>
                        <li>1st floor has the bededroom with king-sized bed, dressing area, and modern bathroom including shower and bathtub.</li> 
                        <li>Rooftop has the terrace with plunge pool and sun-deck.</li> 
                        <li>flat-screen TV, minibar, hair dryer, safe, air conditioning. free WiFi.</li>
                    </div>
                    <div class="card-footer">
                        <input class="form_check_input" type="radio" name="roomtype" value="Premier Riad"/>
                    </div>
                </div>
            </div>
            <div class="col-md-5 "style="float:none;margin:auto;">
                <div class="card">
                    <h2 class="text-center">Superior Riad</h2>
                    <div class="card-header">
                        <img src="{{asset('images/RMMRiadSuperier.jpg')}}" alt="">
                    </div>
                    <div class="card-body">
                        <p class="mb-2">175 m²/1884 sq ft split into 3 floors</p>
                        <li>Ground floor has the open-air courtyard with fountain, and living room.</li>
                        <li>1st floor has the bededroom with king-sized bed, dressing area, and modern bathroom including shower and bathtub.</li>
                        <li>Rooftop has the terrace with plunge pool and sun-deck.</li>
                        <li>flat-screen TV, minibar, hair dryer, safe, air conditioning. free WiFi.</li>
                    </div>
                    <div class="card-footer">
                        <input class="form_check_input" type="radio" name="roomtype" value="Superior Riad" />
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="qts-title">Are You ?</h5>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                            <input class="form_check_input2" type="radio" name="coupleorsingle" id="couple" value="Per Couple">
                            <label class="form-check-label" for="couple">
                              a couple
                            </label>
                        </div>

                        <div class="col-md-6">
                            <input class="form_check_input2" type="radio" name="coupleorsingle" id="single" value="Single Traveller" >
                            <label class="form-check-label" for="single">
                             a single
                            </label>
                        </div>
                      </div>
                    </div>
                 </div> 
            </div>
             
        </div>
    </div>


    <div class="container">
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
            <div class="col-md-12">
                <div class="card">
                    <div class="form-check2" style="height: 50px">
                        <input class="form-check-input" type="radio" name="terms" id="" value="" required style="margin-top:15px">
                        <label class="form-check-label" for="" style="margin-top:10px">
                          I agreed to the <a href="http://hbsmorocco2023.com/wp-content/uploads/2022/09/Morocco-Terms-Conditions-HBS-Alumni-trip-April-2023.pdf" target="_black" > Terms and Conditions</a>
                        </label>
                      </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
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
                                <div class="col-md-12 col-sm-12">
                                    <button class="form-control btn btn-submit"type="submit" >
                                        Submit Payment Request
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    </form>
  </section>


@endsection
