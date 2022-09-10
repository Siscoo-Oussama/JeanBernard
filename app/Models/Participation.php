<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    use HasFactory;
    protected $fillable=[
        'fullname',
        'country',
        'email',
        'nationality',
        'tel',
        'status',
        'price',
        'adress',
        'deluxeroom',
        'juniorsuite',
        'prestigesuite',
        'roh',
        'superiorriad',
        'premuimriad',
        'couple',
        'single',
        'notes',
        'partnername',
        'cardholder',
        'cardnumber',
        'month',
        'year'

    ];

}
