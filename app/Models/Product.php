<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        protected $fillable = [
        'Pro_Name',
        'Pro_Qty',
        'Pro_Price',
        'Pro_Image',
        'Pro_Detail',
        'CatId',
    ];
}
