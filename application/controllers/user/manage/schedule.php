<?php

class User_Manage_Schedule_Controller extends Base_Controller {

    public $restful = true;

    public function get_index() {
        $userschedules = User::find(Auth::user()->id)
                ->schedules()
                ->order_by('day','asc')
                ->order_by('time','asc')
                ->get();
        $schedules = Schedule::all();
        
        $data = array(
            'userschedules' => $userschedules,
            'schedules' => $schedules
        );

        return View::make('user.schedules', $data);
    }

    public function post_delete() {
        Userschedule::where('user_id', '=', Auth::user()->id)->where('schedule_id', '=', Input::get('schedule_id'))->delete();
        return Redirect::back();
    }

    public function post_new() {
        Userschedule::create(array(
            'user_id' => Auth::user()->id,
            'schedule_id'=> Input::get('schedule_id')
                ));
        return Redirect::back();
    }
  
    public function post_edit() {
       $userschedule = Userschedule::where('user_id', '=', Auth::user()->id)->where('schedule_id', '=', Input::get('id'))->first();
       
       $userschedule->schedule_id = Input::get('schedule_id');
       $userschedule->save();
        return Redirect::back();
       //return dd($userschedule);
    }

}