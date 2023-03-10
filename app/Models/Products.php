<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'amount',
        'price',
        'admission_date',
        'expiration_date',
        'img_url',
        'brand_id',
        'presentation_id',
        'category_id'
    ];
}
