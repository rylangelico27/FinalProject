<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetails extends Model
{
    use HasFactory;

    // Added
    use SoftDeletes;

    // To indicate what fieldname/s is/are fillable
    protected $fillable = [
        "payment_total",
        "payment_method",
        "shipping_address",
        "contact_number",
        "order_status",
        "cart_id",
        "user_id",
    ];

    // Table Name
    protected $table = 'order_details';
}
