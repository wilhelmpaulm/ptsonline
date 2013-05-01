<?php

class Create_Users_Table {    

	public function up()
    {
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('last_name');
			$table->string('first_name');
			$table->string('id_number');
			$table->string('email');
			$table->text('bio');
			$table->string('password');
			$table->string('degree');
			$table->string('position');
			$table->string('title');
			$table->boolean('active');
			$table->boolean('accepting');
			$table->string('mobile');
			$table->string('picture');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('users');

    }

}