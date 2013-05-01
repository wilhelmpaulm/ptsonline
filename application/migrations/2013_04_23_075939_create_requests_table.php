<?php

class Create_Requests_Table {    

	public function up()
    {
		Schema::create('requests', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->string('type');
			$table->text('message');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('requests');

    }

}