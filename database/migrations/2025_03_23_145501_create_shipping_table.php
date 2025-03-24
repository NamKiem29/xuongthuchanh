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
        Schema::create('shipping', function (Blueprint $table) {
            $table->increments('shipping_id');
            $table->unsignedInteger('order_id');
            $table->foreign('order_id')->references('order_id')->on('orders');
            $table->enum('shipping_status', ['pending_pickup', 'in_transit', 'out_for_delivery', 'delivered', 'delivery_failed', 'return_initiated', 'returned', 'cancelled_shipping']);
            $table->string('tracking_number', 100)->unique()->nullable();
            $table->dateTime('shipped_date')->nullable();
            $table->dateTime('delivery_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping');
    }
};
