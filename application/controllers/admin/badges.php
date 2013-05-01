<?php

class Admin_Badges_Controller extends Base_Controller {

	public $restful = true;    

	public function post_delete()
    {
        Badge::find(Input::get('id'))->delete();
        return Redirect::back();
    }    
    public function post_edit()
    {

        
        $badge = Badge::find(Input::get('id'));
        $badge->name = Input::get('name');
        $badge->description = Input::get('description');
        $badge->points = Input::get('points');
        if(Input::file('picture.name'))
        {
            Input::upload('picture', 'public/img/badges/', Input::file('picture.name'));
            $badge->picture = Input::file('picture.name');
        }
        $badge->save();
        return Redirect::back();
    }   
	public function post_new()
    {
        Input::upload('picture', 'public/img/badges/', Input::file('picture.name'));
            
            Badge::create(array(
                'name' => Input::get('name'),
                'description' => Input::get('description'),
                'points' => Input::get('points'),
                'picture' => Input::file('picture.name')
            ));

        
        return Redirect::back();
    }    
   	 public function get_index()
    {
        $badges = Badge::all();    
            
        $data = array(
            'badges' => $badges
        );
        
        return View::make('admin.badges',$data);
    }    
	
}