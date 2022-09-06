<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participation;

class BuyPackController extends Controller
{
    public function index()
    {
        return view('BuyPack');
    }
}
