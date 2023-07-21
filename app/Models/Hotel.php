<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


    class Hotel extends Model
{
    protected $table = 'hotel';
    protected $fillable = [
        'hotels',
        'checkin',
        'checkout',
        'NoRooms',
        'image1',
        'image2',
        'image3',
        'detail',
        'roomdetail'
    ];


    use HasFactory;
}
