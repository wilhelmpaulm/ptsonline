<?php

class Create_Events_Table {    

	public function up()
    {
		Schema::create('meets', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('venue');
			$table->string('time');
			$table->string('picture');
			$table->text('description');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('events');

    }

}