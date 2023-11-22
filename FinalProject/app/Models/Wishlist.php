<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Wishlist extends Model
{
    use HasFactory;

    // Added
    use SoftDeletes;

    // To indicate what fieldname/s is/are fillable
    protected $fillable = [
        "product_id",
        "user_id",
    ];

    // Table Name
    protected $table = 'wishlist';
}
