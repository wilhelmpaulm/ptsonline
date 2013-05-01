<?php

class Create_Degrees_Table {    

	public function up()
    {
		Schema::create('degrees', function($table) {
			$table->increments('id');
			$table->string('code');
			$table->string('title');
			$table->text('description');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('degrees');

    }

}