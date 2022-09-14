<?php

namespace App\Http\Controllers;

use App\Models\Participation;

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
        $participationsdeluxeroom = Participation::where('status', '=','paid')
                ->where('deluxeroom', '=','1')
                ->get();
        $countdeluxeroom = $participationsdeluxeroom->count();

        $participationsjuniorsuite = Participation::where('status', '=','paid')
                ->where('juniorsuite', '=','1')
                ->get();
        $countjuniorsuite = $participationsjuniorsuite->count();

        $participationsprestigesuite = Participation::where('status', '=','paid')
                ->where('prestigesuite', '=','1')
                ->get();
        $countprestigesuite = $participationsprestigesuite->count();

        $participationsroh = Participation::where('status', '=','paid')
        ->where('roh', '=','1')
        ->get();
        $countsuperiorroom  = $participationsroh->count();

        $participationspremieriad = Participation::where('status', '=','paid')
        ->where('premuimriad', '=','1')
        ->get();
        $countpremieriad = $participationspremieriad->count();

        $participationssuperiorriad= Participation::where('status', '=','paid')
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

   

}
