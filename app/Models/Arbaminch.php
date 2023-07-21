<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arbaminch extends Model
{
    protected $table = 'arbaminch';
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'location'
    ];
}
