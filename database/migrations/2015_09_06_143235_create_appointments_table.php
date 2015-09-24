<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date_time');
            $table->dateTime('arrival_time');
            $table->dateTime('departure_time');
			$table->integer('patient_id');
            $table->integer('staff_id');
            $table->integer('location_id');
            $table->string('reason');
            $table->enum('status',['Booked','Arrived','Completed']);
            $table->text('other_details');
			$table->timestamps();
            $table->softDeletes();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('appointments');
	}

}
