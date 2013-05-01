<?php

class User_Manage_Controller extends Base_Controller {

	public $restful = true;    

	public function get_index()
    {
        return View::make('user.manage');
    }    

        public function get_tutorial()
        {
         return "this is the schedule";   
        }
        
        public function get_profile()
        {
         return "this is the schedule";   
        }
       

}