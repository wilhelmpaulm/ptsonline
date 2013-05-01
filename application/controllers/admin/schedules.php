<?php

class Admin_Schedules_Controller extends Base_Controller {

	public $restful = true;    

	public function post_delete()
    {
        Schedule::find(Input::get('id'))->delete();
        return Redirect::back();
    }    
    public function post_edit()
    {
        $schedule = Schedule::find(Input::get('id'));
        $schedule->day = Input::get('day');
        $schedule->time = Input::get('time');
        $schedule->save();
        return Redirect::back();
    }   
	public function post_new()
    {
        Schedule::create(array(
            'day' => Input::get('day'),
            'time' => Input::get('time')
        ));
        
        return Redirect::back();
    }    
   	 public function get_index()
    {
        $schedules = Schedule::all();    
            
        $data = array(
            'schedules' => $schedules
        );
        
        return View::make('admin.schedules',$data);
    }    
	
}