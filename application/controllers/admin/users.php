<?php

class Admin_Users_Controller extends Base_Controller {

	public $restful = true;    

	public function post_delete()
    {
        User::find(Input::get('id'))->delete();
        return Redirect::back();
    }    
   	 public function get_index()
    {
        $users = User::all();    
        $badges = Badge::all();    
        $positions = Position::all();    
        $tutors = User::where('position','=','tutor')->get();    
        $tutees = User::where('position','=','tutee')->get();    
        $officers = User::where('position','!=','tutor')->where('position','!=','tutee')->get();    
            
        $data = array(
            'positions' => $positions,
            'badges' => $badges,
            'users' => $users,
            'tutors' => $tutors,
            'tutees' => $tutees,
            'officers' => $officers
        );
        
        return View::make('admin.users',$data);
    }    
   	 public function post_badge()
    {
        Userbadge::create(array(
            'user_id' => Input::get('user_id'),
            'badge_id' => Input::get('badge_id')
        ));
        
       return Redirect::back();
    }    
   	 public function post_position()
    {
        $user = User::find(Input::get('user_id'));
        $user->position = Input::get('position');
        $user->save();
        
       return Redirect::back();
    }    
	
}