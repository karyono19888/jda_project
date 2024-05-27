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
        Schema::table('thumbnail_products', function (Blueprint $table) {
            $table->foreign('product_id','fk_thumbnail_products_to_products')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('thumbnail_products', function (Blueprint $table) {
            $table->dropForeign('fk_thumbnail_products_to_products');
        });
    }
};
