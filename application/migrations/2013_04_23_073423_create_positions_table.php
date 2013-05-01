<?php

class Create_Positions_Table {    

	public function up()
    {
		Schema::create('positions', function($table) {
			$table->increments('id');
			$table->string('title');
			$table->text('description');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('positions');

    }

}