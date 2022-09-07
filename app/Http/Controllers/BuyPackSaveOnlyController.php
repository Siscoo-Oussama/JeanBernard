<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class BuyPackSaveOnlyController extends Controller
{
    public function index(Request $request)
    {
        $value1=$request->val1;
        $value2=$request->val2;      
        $data=Hotel::select('price')
        ->join('roomtypes','roomtypes.id','=','hotels.id')
        ->join('grouptypes','grouptypes.id','=','roomtypes.group_type_id')
        ->where('roomtypes.name',$value1)->where('grouptypes.name',$value2)
        ->get();

        // return response()->json($value1);
        // return response()->json($value1);
        return view("BuyPack1",["data"=>$data]);
    }
}
