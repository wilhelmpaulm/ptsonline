<?php

class Create_Badges_Table {    

	public function up()
    {
		Schema::create('badges', function($table) {
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
		Schema::drop('badges');

    }

}