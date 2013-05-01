<?php

class Create_Userbadges_Table {    

	public function up()
    {
		Schema::create('userbadges', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('badge_id');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('userbadges');

    }

}