<?php

class Create_Userpictures_Table {    

	public function up()
    {
		Schema::create('userpictures', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->blob('picture');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('userpictures');

    }

}