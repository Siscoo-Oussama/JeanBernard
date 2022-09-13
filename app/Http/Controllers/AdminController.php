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
        $data=Participation::all()->where('status','paid');
        return view('Dashboard',['data'=>$data]);
    }

   

}
