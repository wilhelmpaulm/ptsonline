<?php

class Create_Tutorials_Table {    

	public function up()
    {
		Schema::create('tutorials', function($table) {
			$table->increments('id');
			$table->integer('tutor_id');
			$table->integer('tutee_id');
			$table->string('status');
			$table->text('description');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('tutorials');

    }

}