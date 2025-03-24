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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->decimal('total_price', 10, 2);
            $table->enum('order_status', ['pending', 'confirmed', 'processing', 'shipping','shipped', 'delivered','cancelled','returned', 'refunded', 'failed']);
            $table->text('shipping_address');
            $table->enum('payment_method', ['cod', 'credit_card', 'paypal'])->default('cod');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
