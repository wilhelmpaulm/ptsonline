<?php

class Create_Houses_Table {    

	public function up()
    {
		Schema::create('houses', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->text('vision');
			$table->text('mission');
			$table->boolean('active');
			$table->string('picture');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('houses');

    }

}