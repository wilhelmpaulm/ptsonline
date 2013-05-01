<?php

class Create_Specializations_Table {    

	public function up()
    {
		Schema::create('specializations', function($table) {
			$table->increments('id');
			$table->string('code');
			$table->string('title');
			$table->text('description');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('specializations');

    }

}