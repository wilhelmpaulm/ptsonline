<?php

class Create_Userschedules_Table {    

	public function up()
    {
		Schema::create('userschedules', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('id_schedule');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('userschedules');

    }

}