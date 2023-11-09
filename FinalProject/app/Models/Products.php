<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Products extends Model
{
    use HasFactory;

    // Added
    use SoftDeletes;

    // To indicate what fieldname/s is/are fillable
    protected $fillable = [
        "product_name",
        "product_description",
        "product_qty",
        "product_price"
    ];

    // Table Name
    protected $table = 'products';
}
