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
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('buyer_id','fk_order_buyer_to_users')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreign('seller_id','fk_order_seller_to_users')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreign('product_id','fk_order_product_to_products')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreign('order_status_id','fk_order_to_order_statuses')->references('id')->on('order_statuses')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('fk_order_buyer_to_users');
            $table->dropForeign('fk_order_seller_to_users');
            $table->dropForeign('fk_order_product_to_products');
            $table->dropForeign('fk_order_to_order_statuses');
        });
    }
};
