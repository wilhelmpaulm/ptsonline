<?php

class Admin_Houses_Controller extends Base_Controller {

	public $restful = true;    

	public function post_delete()
    {
        House::find(Input::get('id'))->delete();
        return Redirect::back();
    }    
    public function post_edit()
    {
        $house = House::find(Input::get('id'));
        $house->name = Input::get('name');
        $house->description = Input::get('description');
        $house->vision = Input::get('vision');
        $house->active = Input::get('active');
        $house->mission = Input::get('mission');
        if(Input::file('picture.name'))
        {
            Input::upload('picture', 'public/img/houses/', Input::file('picture.name'));
            $house->picture = Input::file('picture.name');
        }
        $house->save();
        return Redirect::back();
    }   
	public function post_new()
    {
        Input::upload('picture', 'public/img/houses/', Input::file('picture.name'));
            
            House::create(array(
                'name' => Input::get('name'),
                'description' => Input::get('description'),
                'vision' => Input::get('vision'),
                'mission' => Input::get('mission'),
                'active' => Input::get('active'),
                'picture' => Input::file('picture.name')
            ));

        
        return Redirect::back();
    }    
   	 public function get_index()
    {
        $houses = House::all();    
            
        $data = array(
            'houses' => $houses
        );
        return View::make('admin.houses',$data);
    }    
	
}