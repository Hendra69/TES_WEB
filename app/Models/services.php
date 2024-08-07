<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;
    protected $table='services';

    protected $fillable = [
        'name',
        'quantity',
        'purchasing_price',
        'selling_price',
    ];
}
