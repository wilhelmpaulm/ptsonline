<?php

class Create_Testimonials_Table {    

	public function up()
    {
		Schema::create('testimonials', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->text('message');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('testimonials');

    }

}