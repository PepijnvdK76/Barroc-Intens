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
        Schema::create('maintenance_appointments', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->unsignedBigInteger('company_id')->nullable();
            $table->longText('remark');
            $table->dateTime('date');
            $table->dateTime('date_finished');
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
        Schema::dropIfExists('maintenance_appointments');
    }
};
