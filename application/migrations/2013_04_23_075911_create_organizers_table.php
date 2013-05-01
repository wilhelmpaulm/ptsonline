<?php

class Create_Organizers_Table {    

	public function up()
    {
		Schema::create('organizers', function($table) {
			$table->increments('id');
			$table->integer('event_id');
			$table->integer('user_id');
			$table->string('role');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('organizers');

    }

}