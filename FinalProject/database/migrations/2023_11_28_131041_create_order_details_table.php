<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->float('payment_total');
            $table->string('payment_method');
            $table->string('order_status');
            $table->integer('cart_id'); // FK from Cart table
            $table->integer('user_id'); // FK from Users table
            $table->timestamps();
            $table->softDeletes(); // Timestamp of when deleted/updated
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
