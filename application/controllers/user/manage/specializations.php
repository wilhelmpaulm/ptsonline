<?php

class User_Manage_Specializations_Controller extends Base_Controller {

    public $restful = true;

    public function get_index() {
        $userspecializations = User::find(Auth::user()->id)->specializations()->get();
        $specializations = Specialization::all();
        
        $data = array(
            'userspecializations' => $userspecializations,
            'specializations' => $specializations
        );

        return View::make('user.specializations', $data);
    }

    public function post_delete() {
        Userspecialization::where('user_id', '=', Auth::user()->id)->where('specialization_id', '=', Input::get('specialization_id'))->delete();
        return Redirect::back();
    }

    public function post_new() {
        Userspecialization::create(array(
            'user_id' => Auth::user()->id,
            'specialization_id'=> Input::get('specialization_id')
                ));
        return Redirect::back();
    }
  
    public function post_edit() {
       $userspecialization = Userspecialization::where('user_id', '=', Auth::user()->id)->where('specialization_id', '=', Input::get('id'))->first();
       
       $userspecialization->specialization_id = Input::get('specialization_id');
       $userspecialization->save();
        return Redirect::back();
       //return dd($userschedule);
    }

}