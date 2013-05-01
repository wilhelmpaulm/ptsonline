<?php

class Create_Userspecializations_Table {    

	public function up()
    {
		Schema::create('userspecializations', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('specialization_id');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('userspecializations');

    }

}