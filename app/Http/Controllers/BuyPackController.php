<?php

namespace App\Http\Controllers;

use App\Mail\BookingRequest;
use App\Mail\BookingRequestDetails;
use App\Mail\Order;
use App\Mail\OrderDetails;
use App\Mail\Payment;
use App\Mail\PaymentRequest;
use App\Mail\PaymentRequestDetails;
use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Models\Participation;
use CMI\CmiClient;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;


class BuyPackController extends Controller
{
    public function index1()
    {
        return view('BuyPack1');
    }

    public function changeprice(Request $request)
    {
        $value1=$request->val1;
        $value2=$request->val2;
        $data=Hotel::select('priceInMad','priceInUsd')
        ->join('roomtypes','roomtypes.id','=','hotels.roomtype_id')
        ->join('grouptypes','grouptypes.id','=','roomtypes.grouptype_id')
        ->where('roomtypes.name',$value1)
        ->where('grouptypes.name',$value2)
        ->first();

        // return response()->json($value1);
        return response()->json(['data'=>$data]);
       // return view("BuyPack1",["data"=>$data]);
        //return view('BuyPack1');
    }


    public function index2()
    {
        return view('BuyPack2');
    }

    public function index3()
    {
        return view('BuyPack3');
    }



    public function okFail(Request $request)
    {
        // return redirect('failed')
        //     ->with(['status' => 'Paiement échoué']);

        dd($request->all());

    }

    public function callback(Request $request)
    {
        dd($request->all());
    }


    public function process(Request $request)
    {
        $participation= new Participation;


        if($request->price == null){
            return back()->with('error', 'Please select a room type');
        }


        if($request->roomtype == 'Deluxe room'){

            if (($request->coupleorsingle == 'Per Couple') || ($request->coupleorsingle == 'Single Traveller'))  {

                $participationsdeluxeroom = Participation::where('status', '=','paid')
                ->where('deluxeroom', '=','1')
                ->get();

                $countdeluxeroom = $participationsdeluxeroom->count();

                //dd($countdeluxeroom);

                if($countdeluxeroom >= 20){
                    return back()->with('error', 'No place available for Deluxe Room');
                }else{

                    $participation->price = $request->price;
                    $participation->fullname = $request->fullname;
                    $participation->country = $request->country;
                    $participation->email = $request->email;
                    $participation->nationality = $request->nationality;
                    $participation->tel = $request->tel;
                    $participation->adress = $request->adress;
                    $participation->partnername = $request->partnername;
                    $participation->notes = $request->notes;

                    $participation->deluxeroom = 1;

                    if ($request->coupleorsingle == 'Per Couple')  {
                        $participation->couple = 1;
                    }if ($request->coupleorsingle == 'Single Traveller')  {
                        $participation->single = 1;
                    }

                    $participation->save();

                    $base_url= config('app.url');
                    $client = new CmiClient([
                        'storekey' => 'HBSevent23', // STOREKEY Icecube99??
                        'clientid' => '600003367', // CLIENTID 600001399
                        'oid' => $request->cmd, // COMMAND ID IT MUST BE UNIQUE
                        'shopurl' => $base_url, // SHOP URL FOR REDIRECTION
                        'okUrl' => $base_url.'/okSuccess', // REDIRECTION AFTER SUCCEFFUL PAYMENT
                        'failUrl' => $base_url.'/okFail', // REDIRECTION AFTER FAILED PAYMENT
                        'email' => $request->email, // YOUR EMAIL APPEAR IN CMI PLATEFORM
                        'BillToName' => $request->fullname, // YOUR NAME APPEAR IN CMI PLATEFORM
                        'BillToStreet12' => $request->adress, // YOUR ADDRESS APPEAR IN CMI PLATEFORM NOT REQUIRED
                        'BillToCity' => $request->country, // YOUR CITY APPEAR IN CMI PLATEFORM NOT REQUIRED
                        'BillToStateProv' => $request->adress, // YOUR STATE APPEAR IN CMI PLATEFORM NOT REQUIRED
                        'lang' => 'en',
                        'BillToCountry' => '200', // YOUR COUNTRY APPEAR IN CMI PLATEFORM NOT REQUIRED (504=MA)
                        'tel' => $request->tel, // YOUR PHONE APPEAR IN CMI PLATEFORM NOT REQUIRED
                        'amount' => $request->price, // RETRIEVE AMOUNT WITH METHOD POST
                        'payment_id' => $participation->id,
                        'CallbackURL' => $base_url.'/callback', // CALLBACK


                    ]);

                    //dd($payment->id);

                    $client->redirect_post();
                }

            }else{
                return back()->with('error', 'Please select a Room Name');
            }




        }elseif ($request->roomtype == 'Junior suite'){

            if (($request->coupleorsingle == 'Per Couple') || ($request->coupleorsingle == 'Single Traveller'))  {

                $participationsjuniorsuite = Participation::where('status', '=','paid')
                ->where('juniorsuite', '=','1')
                ->get();

                $countjuniorsuite = $participationsjuniorsuite->count();

                //dd($countjuniorsuite);

                if($countjuniorsuite >= 25){
                    return back()->with('error', 'No place available for Junior suite');
                }else{
                    $participation->price = $request->price;
                    $participation->fullname = $request->fullname;
                    $participation->country = $request->country;
                    $participation->email = $request->email;
                    $participation->nationality = $request->nationality;
                    $participation->tel = $request->tel;
                    $participation->adress = $request->adress;
                    $participation->partnername = $request->partnername;
                    $participation->notes = $request->notes;



                    $participation->juniorsuite = 1;

                    if ($request->coupleorsingle == 'Per Couple')  {
                        $participation->couple = 1;
                    }if ($request->coupleorsingle == 'Single Traveller')  {
                        $participation->single = 1;
                    }

                    $participation->save();

                    $base_url= config('app.url');
                    $client = new CmiClient([
                        'storekey' => 'HBSevent23', // STOREKEY Icecube99??
                        'clientid' => '600003367', // CLIENTID 600001399
                        'oid' => $request->cmd, // COMMAND ID IT MUST BE UNIQUE
                        'shopurl' => $base_url, // SHOP URL FOR REDIRECTION
                        'okUrl' => $base_url.'/okSuccess', // REDIRECTION AFTER SUCCEFFUL PAYMENT
                        'failUrl' => $base_url.'/okFail', // REDIRECTION AFTER FAILED PAYMENT
                        'email' => $request->email, // YOUR EMAIL APPEAR IN CMI PLATEFORM
                        'BillToName' => $request->fullname, // YOUR NAME APPEAR IN CMI PLATEFORM
                        'BillToStreet12' => $request->adress, // YOUR ADDRESS APPEAR IN CMI PLATEFORM NOT REQUIRED
                        'BillToCity' => $request->country, // YOUR CITY APPEAR IN CMI PLATEFORM NOT REQUIRED
                        'BillToStateProv' => $request->adress, // YOUR STATE APPEAR IN CMI PLATEFORM NOT REQUIRED
                        'lang' => 'en',
                        'BillToCountry' => '200', // YOUR COUNTRY APPEAR IN CMI PLATEFORM NOT REQUIRED (504=MA)
                        'tel' => $request->tel, // YOUR PHONE APPEAR IN CMI PLATEFORM NOT REQUIRED
                        'amount' => $request->price, // RETRIEVE AMOUNT WITH METHOD POST
                        'payment_id' => $participation->id,
                        'CallbackURL' => $base_url.'/callback', // CALLBACK
                    ]);

                    //dd($payment->id);

                    $client->redirect_post();
                }

            }else{
                return back()->with('error', 'Please select a Room Name');
            }



        }elseif ($request->roomtype == 'Prestige suite'){

            if (($request->coupleorsingle == 'Per Couple') || ($request->coupleorsingle == 'Single Traveller'))  {

                $participationsprestigesuite = Participation::where('status', '=','paid')
                ->where('prestigesuite', '=','1')
                ->get();

                $countprestigesuite = $participationsprestigesuite->count();

                //dd($countprestigesuite);

                if($countprestigesuite >= 5){
                    return back()->with('error', 'No place available for Prestige suite');
                }else{

                    $participation->price = $request->price;
                    $participation->fullname = $request->fullname;
                    $participation->country = $request->country;
                    $participation->email = $request->email;
                    $participation->nationality = $request->nationality;
                    $participation->tel = $request->tel;
                    $participation->adress = $request->adress;
                    $participation->partnername = $request->partnername;
                    $participation->notes = $request->notes;



                    $participation->prestigesuite = 1;

                    if ($request->coupleorsingle == 'Per Couple')  {
                        $participation->couple = 1;
                    }if ($request->coupleorsingle == 'Single Traveller')  {
                        $participation->single = 1;
                    }

                    $participation->save();

                    $base_url= config('app.url');
                    $client = new CmiClient([
                        'storekey' => 'HBSevent23', // STOREKEY Icecube99??
                        'clientid' => '600003367', // CLIENTID 600001399
                        'oid' => $request->cmd, // COMMAND ID IT MUST BE UNIQUE
                        'shopurl' => $base_url, // SHOP URL FOR REDIRECTION
                        'okUrl' => $base_url.'/okSuccess', // REDIRECTION AFTER SUCCEFFUL PAYMENT
                        'failUrl' => $base_url.'/okFail', // REDIRECTION AFTER FAILED PAYMENT
                        'email' => $request->email, // YOUR EMAIL APPEAR IN CMI PLATEFORM
                        'BillToName' => $request->fullname, // YOUR NAME APPEAR IN CMI PLATEFORM
                        'BillToStreet12' => $request->adress, // YOUR ADDRESS APPEAR IN CMI PLATEFORM NOT REQUIRED
                        'BillToCity' => $request->country, // YOUR CITY APPEAR IN CMI PLATEFORM NOT REQUIRED
                        'BillToStateProv' => $request->adress, // YOUR STATE APPEAR IN CMI PLATEFORM NOT REQUIRED
                        'lang' => 'en',
                        'BillToCountry' => '200', // YOUR COUNTRY APPEAR IN CMI PLATEFORM NOT REQUIRED (504=MA)
                        'tel' => $request->tel, // YOUR PHONE APPEAR IN CMI PLATEFORM NOT REQUIRED
                        'amount' => $request->price, // RETRIEVE AMOUNT WITH METHOD POST
                        'payment_id' => $participation->id,
                        'CallbackURL' => $base_url.'/callback', // CALLBACK
                    ]);

                    //dd($payment->id);

                    $client->redirect_post();
                }

            }else{
                return back()->with('error', 'Please select a Room Name');
            }



        }elseif ($request->roomtype == 'Superior Room'){

            if (($request->coupleorsingle == 'Per Couple') || ($request->coupleorsingle == 'Single Traveller'))  {
                $participationsroh = Participation::where('status', '=','paid')
                ->where('roh', '=','1')
                ->get();

                $countroh = $participationsroh->count();

                //dd($countroh);

                if($countroh >= 10){
                    return back()->with('error', 'No place available for Superior Room');
                }else{

                    $participation->price = $request->price;
                    $participation->fullname = $request->fullname;
                    $participation->country = $request->country;
                    $participation->email = $request->email;
                    $participation->nationality = $request->nationality;
                    $participation->tel = $request->tel;
                    $participation->adress = $request->adress;
                    $participation->partnername = $request->partnername;
                    $participation->notes = $request->notes;



                    $participation->roh = 1;

                    if ($request->coupleorsingle == 'Per Couple')  {
                        $participation->couple = 1;
                    }if ($request->coupleorsingle == 'Single Traveller')  {
                        $participation->single = 1;
                    }

                    $participation->save();

                    $base_url= config('app.url');
                    $client = new CmiClient([
                        'storekey' => 'HBSevent23', // STOREKEY Icecube99??
                        'clientid' => '600003367', // CLIENTID 600001399
                        'oid' => $request->cmd, // COMMAND ID IT MUST BE UNIQUE
                        'shopurl' => $base_url, // SHOP URL FOR REDIRECTION
                        'okUrl' => $base_url.'/okSuccess', // REDIRECTION AFTER SUCCEFFUL PAYMENT
                        'failUrl' => $base_url.'/okFail', // REDIRECTION AFTER FAILED PAYMENT
                        'email' => $request->email, // YOUR EMAIL APPEAR IN CMI PLATEFORM
                        'BillToName' => $request->fullname, // YOUR NAME APPEAR IN CMI PLATEFORM
                        'BillToStreet12' => $request->adress, // YOUR ADDRESS APPEAR IN CMI PLATEFORM NOT REQUIRED
                        'BillToCity' => $request->country, // YOUR CITY APPEAR IN CMI PLATEFORM NOT REQUIRED
                        'BillToStateProv' => $request->adress, // YOUR STATE APPEAR IN CMI PLATEFORM NOT REQUIRED
                        'lang' => 'en',
                        'BillToCountry' => '200', // YOUR COUNTRY APPEAR IN CMI PLATEFORM NOT REQUIRED (504=MA)
                        'tel' => $request->tel, // YOUR PHONE APPEAR IN CMI PLATEFORM NOT REQUIRED
                        'amount' => $request->price, // RETRIEVE AMOUNT WITH METHOD POST
                        'payment_id' => $participation->id,
                        'CallbackURL' => $base_url.'/callback', // CALLBACK
                    ]);

                    //dd($payment->id);

                    $client->redirect_post();
                }

            }else{
                return back()->with('error', 'Please select a Room Name');
            }


        }else{
            return back()->with('error', 'Please select a Room Name');
        }

    }

    public function processwithamex(Request $request)
    {
        $participation= new Participation;

        if($request->price == null){
            return back()->with('error', 'Please select a room type');
        }

        if($request->roomtype == 'Deluxe room'){

            if (($request->coupleorsingle == 'Per Couple') || ($request->coupleorsingle == 'Single Traveller'))  {

                $participationsdeluxeroom = Participation::where('status', '=','paid')
                ->where('deluxeroom', '=','1')
                ->orWhere('status', '=','requested')
                ->get();

                $countdeluxeroom = $participationsdeluxeroom->count();

                //dd($countdeluxeroom);

                if($countdeluxeroom >= 20){
                    return back()->with('error', 'No place available for Deluxe Room');
                }else{

                    $participation->price = $request->price;
                    $participation->fullname = $request->fullname;
                    $participation->country = $request->country;
                    $participation->email = $request->email;
                    $participation->nationality = $request->nationality;
                    $participation->tel = $request->tel;
                    $participation->adress = $request->adress;
                    $participation->partnername = $request->partnername;
                    $participation->notes = $request->notes;

                    $participation->deluxeroom = 1;

                    if ($request->coupleorsingle == 'Per Couple')  {
                        $participation->couple = 1;
                    }if ($request->coupleorsingle == 'Single Traveller')  {
                        $participation->single = 1;
                    }

                    $participation->save();

                    //oussama

                    return redirect('paymentrequest')->with(['id_part' => $participation->id]);
                    //return view('')->with(compact('id_part',$participation->id));

                }

            }else{
                return back()->with('error', 'Please select a Room Name');
            }




        }elseif ($request->roomtype == 'Junior suite'){

            if (($request->coupleorsingle == 'Per Couple') || ($request->coupleorsingle == 'Single Traveller'))  {

                $participationsjuniorsuite = Participation::where('status', '=','paid')
                ->where('juniorsuite', '=','1')
                ->orWhere('status', '=','requested')
                ->get();

                $countjuniorsuite = $participationsjuniorsuite->count();

                //dd($countjuniorsuite);

                if($countjuniorsuite >= 25){
                    return back()->with('error', 'No place available for Junior suite');
                }else{
                    $participation->price = $request->price;
                    $participation->fullname = $request->fullname;
                    $participation->country = $request->country;
                    $participation->email = $request->email;
                    $participation->nationality = $request->nationality;
                    $participation->tel = $request->tel;
                    $participation->adress = $request->adress;
                    $participation->partnername = $request->partnername;
                    $participation->notes = $request->notes;



                    $participation->juniorsuite = 1;

                    if ($request->coupleorsingle == 'Per Couple')  {
                        $participation->couple = 1;
                    }if ($request->coupleorsingle == 'Single Traveller')  {
                        $participation->single = 1;
                    }

                    $participation->save();

                    //dd($payment->id);
                    return redirect('paymentrequest')->with(['id_part' => $participation->id]);


                }

            }else{
                return back()->with('error', 'Please select a Room Name');
            }



        }elseif ($request->roomtype == 'Prestige suite'){

            if (($request->coupleorsingle == 'Per Couple') || ($request->coupleorsingle == 'Single Traveller'))  {

                $participationsprestigesuite = Participation::where('status', '=','paid')
                ->where('prestigesuite', '=','1')
                ->orWhere('status', '=','requested')
                ->get();

                $countprestigesuite = $participationsprestigesuite->count();

                //dd($countprestigesuite);

                if($countprestigesuite >= 5){
                    return back()->with('error', 'No place available for Prestige suite');
                }else{

                    $participation->price = $request->price;
                    $participation->fullname = $request->fullname;
                    $participation->country = $request->country;
                    $participation->email = $request->email;
                    $participation->nationality = $request->nationality;
                    $participation->tel = $request->tel;
                    $participation->adress = $request->adress;
                    $participation->partnername = $request->partnername;
                    $participation->notes = $request->notes;



                    $participation->prestigesuite = 1;

                    if ($request->coupleorsingle == 'Per Couple')  {
                        $participation->couple = 1;
                    }if ($request->coupleorsingle == 'Single Traveller')  {
                        $participation->single = 1;
                    }

                    $participation->save();
                    return redirect('paymentrequest')->with(['id_part' => $participation->id]);



                }

            }else{
                return back()->with('error', 'Please select a Room Name');
            }



        }elseif ($request->roomtype == 'Superior Room'){

            if (($request->coupleorsingle == 'Per Couple') || ($request->coupleorsingle == 'Single Traveller'))  {
                $participationsroh = Participation::where('status', '=','paid')
                ->where('roh', '=','1')
                ->orWhere('status', '=','requested')
                ->get();

                $countroh = $participationsroh->count();

                //dd($countroh);

                if($countroh >= 10){
                    return back()->with('success', 'No place available for Superior Room');
                }else{

                    $participation->price = $request->price;
                    $participation->fullname = $request->fullname;
                    $participation->country = $request->country;
                    $participation->email = $request->email;
                    $participation->nationality = $request->nationality;
                    $participation->tel = $request->tel;
                    $participation->adress = $request->adress;
                    $participation->partnername = $request->partnername;
                    $participation->notes = $request->notes;



                    $participation->roh = 1;

                    if ($request->coupleorsingle == 'Per Couple')  {
                        $participation->couple = 1;
                    }if ($request->coupleorsingle == 'Single Traveller')  {
                        $participation->single = 1;
                    }

                    $participation->save();

                    return redirect('paymentrequest')->with(['id_part' => $participation->id]);




                }

            }else{
                return back()->with('error', 'Please select a Room Name');
            }


        }else{
            return back()->with('error', 'Please select a Room Name');
        }

    }

    public function submit(Request $request)
    {
        //dd($request->roomtype);

        if ($request->roomtype = 'Premium Riad'){
            if (($request->coupleorsingle == 'Per Couple') || ($request->coupleorsingle == 'Single Traveller')){

                $participation= new Participation;
                $participation->price = 0;
                $participation->fullname = $request->fullname;
                $participation->country = $request->country;
                $participation->status = "requested";
                $participation->email = $request->email;
                $participation->nationality = $request->nationality;
                $participation->tel = $request->tel;
                $participation->adress = $request->adress;
                $participation->partnername = $request->partnername;
                $participation->notes = $request->notes;


                $participation->premuimriad = 1;

                if ($request->coupleorsingle == 'Per Couple')  {
                    $participation->couple = 1;
                }if ($request->coupleorsingle == 'Single Traveller')  {
                    $participation->single = 1;
                }

                $participation->save();

                //return back()->with('success', 'Your request has been filed, one of our agents will get in touch with you shortly to carry on the process of registration and to confirm the availability of the chosen package');
                Mail::to('contact@hbsmorocco2023.com')->send(new BookingRequestDetails($participation));
                Mail::to($request->email)->send(new BookingRequest($participation));
                return view('successsubmit');


            }else{
                return back()->with('error', 'Please select a Room Name');
            }

        }elseif ($request->roomtype = 'Superior Riad'){
            if (($request->coupleorsingle == 'Per Couple') || ($request->coupleorsingle == 'Single Traveller')){

                $participation= new Participation;
                $participation->price = 0;
                $participation->fullname = $request->fullname;
                $participation->country = $request->country;
                $participation->status = "requested";
                $participation->email = $request->email;
                $participation->nationality = $request->nationality;
                $participation->tel = $request->tel;
                $participation->adress = $request->adress;
                $participation->partnername = $request->partnername;
                $participation->notes = $request->notes;


                $participation->superiorriad = 1;

                if ($request->coupleorsingle == 'Per Couple')  {
                    $participation->couple = 1;
                }if ($request->coupleorsingle == 'Single Traveller')  {
                    $participation->single = 1;
                }

                $participation->save();

                //return back()->with('success', 'Your request has been filed, one of our agents will get in touch with you shortly to carry on the process of registration and to confirm the availability of the chosen package');
                Mail::to('contact@hbsmorocco2023.com')->send(new BookingRequestDetails($participation));
                Mail::to($request->email)->send(new BookingRequest($participation));
                return view('successsubmit');

            }else{
                return back()->with('error', 'Please select a Room Name');
            }

        }else{
            return back()->with('error', 'Please select a Room Type');
        }

        //$participated = Participation::find('35');
        //Mail::to('oussama@gmail.com')->send(new \App\Mail\RegisteredUser($participated));

    }



    public function okSuccessAmex(Request $request)
    {
        $id = $request->id_part;
        $participation = Participation::find($id);
        $participation->status = "requested";
        $participation->cardholder = $request->cardholder;
        $participation->cardnumber = $request->cardnumber;
        $participation->month = $request->month;
        $participation->year = $request->year;

        //Mail::to($participation->email)->send(new \App\Mail\RegisteredUser($participation));
        $participation->update();

        Mail::to('contact@hbsmorocco2023.com')->send(new PaymentRequestDetails($participation));
        Mail::to($participation->email)->send(new PaymentRequest($participation));

        return view('success');


    }

    public function okSuccess(Request $request)
    {
        $id = $request->payment_id;
        $participation = Participation::find($id);
        $participation->status = "paid";
        //Mail::to($participation->email)->send(new \App\Mail\RegisteredUser($participation));
        $participation->update();

        Mail::to('contact@hbsmorocco2023.com')->send(new OrderDetails($participation));
        Mail::to($participation->email)->send(new Order($participation));

        return view('success');


    }


    public function paymentrequest(Request $request)
    {
        return view('PaymentRequest');
    }

}
