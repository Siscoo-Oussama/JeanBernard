<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;
    protected $table="roomtypes";
    protected $fillable=[
        'name',
        'group_type_id',
        'price'
    ];
}
