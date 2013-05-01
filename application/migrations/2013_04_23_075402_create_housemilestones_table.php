<?php

class Create_Housemilestones_Table {    

	public function up()
    {
		Schema::create('housemilestones', function($table) {
			$table->increments('id');
			$table->integer('house_id');
			$table->integer('milestone_id');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('housemilestones');

    }

}