<?php

class Create_Milestones_Table {    

	public function up()
    {
		Schema::create('milestones', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->text('picture');
			$table->integer('points');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('milestones');

    }

}