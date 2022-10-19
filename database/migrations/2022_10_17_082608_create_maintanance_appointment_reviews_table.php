<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voids
     */
    public function up()
    {
        Schema::create('maintenance_appointment_reviews', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->unsignedBigInteger('appointment_id')->nullable();
            $table->longText('problem');
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
        Schema::dropIfExists('maintanance_appointment_review');
    }
};
