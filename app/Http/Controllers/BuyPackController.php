<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Models\Participation;
use CMI\CmiClient;
use Illuminate\Support\Facades\Redirect;

class BuyPackController extends Controller
{

    public function index1()
    {
        return view('BuyPack1');
    }
    public function index(Request $request)
    {
        $value1=$request->val1;
        $value2=$request->val2; 
        $data=Hotel::select('price')
        ->join('roomtypes','roomtypes.id','=','hotels.id')
        ->join('grouptypes','grouptypes.id','=','roomtypes.group_type_id')
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
        return Redirect::to('http://hbsmorocco2023.com');
    }


    public function process(Request $request)
    {
        $participation= new Participation;
        $participation->price = $request->price;
        $participation->fullname = $request->fullname;
        $participation->country = $request->country;
        $participation->email = $request->email;
        $participation->nationality = $request->nationality;
        $participation->tel = $request->tel;
        $participation->adress = $request->adress;

        if($request->roomtype == 'Deluxe room'){
            $participation->deluxeroom = 1;
        }if ($request->roomtype == 'Junior suite')   {
            $participation->juniorsuite = 1;
        }if ($request->roomtype == 'Prestige suite')  {
            $participation->prestigesuite = 1;
        }if ($request->roomtype == 'ROH')  {
            $participation->roh = 1;
        }if ($request->roomtype == 'Premuim Riad')  {
            $participation->premuimriad = 1;
        }if ($request->roomtype == 'Superior Riad')  {
            $participation->superiorriad = 1;
        }if ($request->coupleorsingle == 'Per Couple')  {
            $participation->couple = 1;
        }if ($request->coupleorsingle == 'Single Traveller')  {
            $participation->single = 1;
        }


        $participation->save();


        $base_url= config('app.url');
        $client = new CmiClient([
            'storekey' => 'Myjood_Incite1.0', // STOREKEY Icecube99??
            'clientid' => '600001399', // CLIENTID 600001399
            'oid' => $request->cmd, // COMMAND ID IT MUST BE UNIQUE
            'shopurl' => $base_url, // SHOP URL FOR REDIRECTION
            'okUrl' => $base_url.'/okSuccess', // REDIRECTION AFTER SUCCEFFUL PAYMENT
            'failUrl' => $base_url.'/okFail', // REDIRECTION AFTER FAILED PAYMENT
            'email' => $request->email, // YOUR EMAIL APPEAR IN CMI PLATEFORM
            'BillToName' => 'Hbsmorocco2023', // YOUR NAME APPEAR IN CMI PLATEFORM
            'BillToStreet12' => $request->adresse, // YOUR ADDRESS APPEAR IN CMI PLATEFORM NOT REQUIRED
            'BillToCity' => $request->country, // YOUR CITY APPEAR IN CMI PLATEFORM NOT REQUIRED
            'BillToStateProv' => $request->adresse, // YOUR STATE APPEAR IN CMI PLATEFORM NOT REQUIRED
            'BillToCountry' => '504', // YOUR COUNTRY APPEAR IN CMI PLATEFORM NOT REQUIRED (504=MA)
            'tel' => $request->tel, // YOUR PHONE APPEAR IN CMI PLATEFORM NOT REQUIRED
            'amount' => $request->price, // RETRIEVE AMOUNT WITH METHOD POST
            'payment_id' => $participation->id,
            'CallbackURL' => $base_url.'/callback', // CALLBACK
        ]);

        //dd($payment->id);

        $client->redirect_post();
    }

    public function submit(Request $request)
    {
        $participation= new Participation;
        $participation->price = 0;
        $participation->fullname = $request->fullname;
        $participation->country = $request->country;
        $participation->email = $request->email;
        $participation->nationality = $request->nationality;
        $participation->tel = $request->tel;
        $participation->adress = $request->adress;

        if ($request->roomtype == 'Premuim Riad')  {
            $participation->premuimriad = 1;
        }if ($request->roomtype == 'Superior Riad')  {
            $participation->superiorriad = 1;
        }if ($request->coupleorsingle == 'Per Couple')  {
            $participation->couple = 1;
        }if ($request->coupleorsingle == 'Single Traveller')  {
            $participation->single = 1;
        }

        $participation->save();

        return back()->with('success', 'Data inserted Successfully');


    }

    public function okSuccess(Request $request)
    {
        $participation = new Participation;
        $id = $request->payment_id;
        $participation = Participation::find($id);
        $participation->status = "paid";
        $participation->update();

        return view('success');


    }

}
