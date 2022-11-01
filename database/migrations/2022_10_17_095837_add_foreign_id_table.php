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
        Schema::table('companies', function (Blueprint $table) {
            $table->foreign('contact_id')
                ->references('id')->on('users');
        });

        Schema::table('maintenance_appointment_reviews', function (Blueprint $table) {
            $table->foreign('appointment_id')
                ->references('id')->on('maintenance_appointments');

        });


        Schema::table('notes', function (Blueprint $table) {
            $table->foreign('author_id')
                ->references('id')->on('users');

            $table->foreign('company_id')
                ->references('id')->on('companies');
        });



        Schema::table('custom_invoices', function (Blueprint $table) {
            $table->foreign('company_id')
                ->references('id')->on('companies');
            $table->foreign('product_id')
                ->references('id')->on('products');
        });



        Schema::table('products', function (Blueprint $table) {
            $table->foreign('products_category_id')
                ->references('id')->on('products_categories');
        });

        Schema::table('custom_invoices_products', function (Blueprint $table) {
            $table->foreign('custom_invoice_id')
                ->references('id')->on('custom_invoices');

            $table->foreign('product_id')
                ->references('id')->on('products');
        });

        Schema::table('review_products', function (Blueprint $table) {
            $table->foreign('review_id')
                ->references('id')->on('maintenance_appointment_reviews');

            $table->foreign('product_id')
                ->references('id')->on('products');
        });

        Schema::table('maintenance_appointments', function (Blueprint $table) {
            $table->foreign('company_id')
                ->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
