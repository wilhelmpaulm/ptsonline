<?php

class User_Statistics_Controller extends Base_Controller {

	public $restful = true;    

	public function get_index()
    {
        $userbadges = User::find(Auth::user()->id)->badges()->order_by('id','asc')->get();
        $badges = User::find(Auth::user()->id)->badges();
        $tutorials = User::find(Auth::user()->id)->tutorials();
        
        $data = array(
            'userbadges' => $userbadges,
            'tutorials' => $tutorials,
            'badges' => $badges
            
        );     
            
        return View::make('user.statistics',$data);
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