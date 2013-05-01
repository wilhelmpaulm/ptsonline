<?php

class Create_Schedules_Table {    

	public function up()
    {
		Schema::create('schedules', function($table) {
			$table->increments('id');
			$table->string('day');
			$table->string('time');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('schedules');

    }

}