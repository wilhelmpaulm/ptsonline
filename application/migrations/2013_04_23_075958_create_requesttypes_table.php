<?php

class Create_Requesttypes_Table {    

	public function up()
    {
		Schema::create('requesttypes', function($table) {
			$table->increments('id');
			$table->string('type');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('requesttypes');

    }

}