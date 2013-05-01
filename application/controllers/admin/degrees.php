<?php

class Admin_Degrees_Controller extends Base_Controller {

	public $restful = true;    

	public function post_delete()
    {
        Degree::find(Input::get('id'))->delete();
        return Redirect::back();
    }    
	
        public function post_new()
    {
        Degree::create(array(
            'code' => Input::get('code'),
            'title' => Input::get('title'),
            'description' => Input::get('description')
        ));
        
        return Redirect::back();
    }    
        public function post_edit()
    {
        $degree = Degree::find(Input::get('id'));
        $degree->code = Input::get('code');
        $degree->title = Input::get('title');
        $degree->description = Input::get('description');
        $degree->save();
        return Redirect::back();
    }  
   	 public function get_index()
    {
        $degrees = Degree::all();    
            
        $data = array(
            'degrees' => $degrees
        );
        
        return View::make('admin.degrees',$data);
    }    
	
}