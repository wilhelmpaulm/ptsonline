<?php

class Create_Housemembers_Table {    

	public function up()
    {
		Schema::create('housemembers', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('house_id');
			$table->string('role');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('housemembers');

    }

}