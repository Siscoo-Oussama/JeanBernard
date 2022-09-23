<?php

namespace App\Http\Controllers;

use App\Models\Participation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $participationsdeluxeroom = Participation::where(function ($query) {
            $query->where('status', '=', 'requested')
                  ->orWhere('status', '=', 'paid');
        })->where(function ($query) {
            $query->where('deluxeroom', '=', '1');
        })->get();

        $countdeluxeroom = $participationsdeluxeroom->count();

        $participationsjuniorsuite = Participation::where(function ($query) {
            $query->where('status', '=', 'requested')
                  ->orWhere('status', '=', 'paid');
        })->where(function ($query) {
            $query->where('juniorsuite', '=', '1');
        })->get();
        $countjuniorsuite = $participationsjuniorsuite->count();

        $participationsprestigesuite = Participation::where(function ($query) {
            $query->where('status', '=', 'requested')
                  ->orWhere('status', '=', 'paid');
        })->where(function ($query) {
            $query->where('prestigesuite', '=', '1');
        })->get();

        $countprestigesuite = $participationsprestigesuite->count();

        $participationsroh = Participation::where(function ($query) {
            $query->where('status', '=', 'requested')
                  ->orWhere('status', '=', 'paid');
        })->where(function ($query) {
            $query->where('roh', '=', '1');
        })->get();

        $countsuperiorroom  = $participationsroh->count();

        $participationspremieriad = Participation::where('status', '=','requested')
        ->where('premuimriad', '=','1')
        ->get();

        $countpremieriad = $participationspremieriad->count();

        $participationssuperiorriad= Participation::where('status', '=','requested')
        ->where('superiorriad', '=','1')
        ->get();

        $countsuperiorriad = $participationssuperiorriad->count();

        $data=Participation::all()->where('status','!=','unpaid');

        return view('Dashboard',[
            'data'=>$data,
            "countdeluxeroom"=>$countdeluxeroom,
            "countjuniorsuite"=>$countjuniorsuite,
            "countprestigesuite"=>$countprestigesuite,
            "countsuperiorroom"=>$countsuperiorroom,
            "countpremieriad"=>$countpremieriad,
            "countsuperiorriad"=>$countsuperiorriad



        ]);
    }

    public function confirm ($id)
    {
        $participation = Participation::find($id);
        $participation->status = "paid";
        $participation->update();

        return Redirect::back();

    }

    public function cancel ($id)
    {
        $participation = Participation::find($id);
        $participation->status = "canceled";
        $participation->update();

        return Redirect::back();

    }



}
