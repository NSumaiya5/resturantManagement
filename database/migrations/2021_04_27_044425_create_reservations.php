<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            $table->integer('tables_id');
        //     $table->integer('user_id');
        //     $table->integer('user_name');
        //   $table->integer('user_email');
        //     $table->integer('user_phone');
        //     $table->integer('user_address');
            $table->date('reservation_date');
            $table->Time('reservation_time_from');
            $table->Time('reservation_time_to');
        //  $table->dateTime('booking_time_from');
        //  $table->dateTime('booking_time_to');
            $table->text('details')->nullable();
            $table->text('reservation_amount')->nullable();


            // $table->integer('rate')->nullable();
            // $table->integer('total')->nullable();
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
        Schema::dropIfExists('reservations');
    }
}
