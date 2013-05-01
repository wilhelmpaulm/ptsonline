<?php

class Admin_Specializations_Controller extends Base_Controller {

	public $restful = true;    

	public function post_delete()
    {
        Specialization::find(Input::get('id'))->delete();
        return Redirect::back();
    }    
	
        public function post_new()
    {
        Specialization::create(array(
            'code' => Input::get('code'),
            'title' => Input::get('title'),
            'description' => Input::get('description')
        ));
        
        return Redirect::back();
    }    
        public function post_edit()
    {
        $degree = Specialization::find(Input::get('id'));
        $degree->code = Input::get('code');
        $degree->title = Input::get('title');
        $degree->description = Input::get('description');
        $degree->save();
        return Redirect::back();
    }  
   	 public function get_index()
    {
        $specializations = Specialization::all();    
            
        $data = array(
            'specializations' => $specializations
        );
        
        return View::make('admin.specializations',$data);
    }    
	
}