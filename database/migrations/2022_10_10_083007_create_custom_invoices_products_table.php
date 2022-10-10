<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_invoices_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('custom_invoice_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->integer('amount');
            $table->decimal('price_per_product');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_invoices_products');
    }
};
