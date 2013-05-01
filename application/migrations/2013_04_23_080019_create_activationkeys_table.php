<?php

class Create_Activationkeys_Table {    

	public function up()
    {
		Schema::create('activationkeys', function($table) {
			$table->increments('id');
			$table->string('key');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('activationkeys');

    }

}