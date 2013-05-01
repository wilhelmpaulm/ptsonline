<?php

class Admin_Positions_Controller extends Base_Controller {

	public $restful = true;    

	public function post_delete()
    {
        Position::find(Input::get('id'))->delete();
        return Redirect::back();
    }    
    public function post_edit()
    {
        $position = Position::find(Input::get('id'));
        $position->title = Input::get('title');
        $position->description = Input::get('description');
        $position->save();
        return Redirect::back();
    }   
	public function post_new()
    {
        Position::create(array(
            'title' => Input::get('title'),
            'description' => Input::get('description')
        ));
        
        return Redirect::back();
    }    
   	 public function get_index()
    {
        $positions = Position::all();    
            
        $data = array(
            'positions' => $positions
        );
        
        return View::make('admin.positions',$data);
    }    
	
}