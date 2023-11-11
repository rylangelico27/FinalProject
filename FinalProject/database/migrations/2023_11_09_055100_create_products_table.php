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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('product_description');
            $table->integer('product_qty');
            $table->float('product_price');
            $table->binary('product_front')->nullable();
            $table->binary('product_right')->nullable();
            $table->binary('product_left')->nullable();
            $table->binary('product_back')->nullable();
            $table->timestamps();
            $table->softDeletes(); // Timestamp of when deleted/updated
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
