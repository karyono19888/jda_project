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
            $table->id();
            $table->foreignId('buyer_id')->nullable()->index('fk_order_buyer_to_users');
            $table->foreignId('seller_id')->nullable()->index('fk_order_seller_to_users');
            $table->foreignId('product_id')->nullable()->index('fk_order_product_to_products');
            $table->longText('file')->nullable();
            $table->longText('rate')->nullable();
            $table->date('expired')->nullable();
            $table->foreignId('order_status_id')->nullable()->index('fk_order_to_order_statuses');
            $table->softDeletes();
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
