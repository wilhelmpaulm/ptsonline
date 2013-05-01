<?php

class User_Controller extends Base_Controller {

	public $restful = true;    

	public function get_index()
    {
        $userschedules = User::find(Auth::user()->id)->schedules()->order_by('id','asc')->get();
        $userbadges = User::find(Auth::user()->id)->badges()->order_by('id','asc')->get();
        $userspecializations = User::find(Auth::user()->id)->specializations()->order_by('id','asc')->get();
        
        $data = array(
            'userschedules' => $userschedules,
            'userspecializations' => $userspecializations,
            'userbadges' => $userbadges
        );

        return View::make('user.index', $data);    
        //return View::make('user.index');
    }
    
    public function get_logout()
    {
          Auth::logout(); 
            return Redirect::to('index');
    }

    public function post_new()
    {
        User::create(array(
            'last_name' => Input::get('last_name'),
            'first_name' => Input::get('first_name'),
            'id_number' => Input::get('id_number'),
            'email' => Input::get('email'),
            'bio' => Input::get('bio'),
            'degree' => Input::get('degree'),
            'position' => Input::get('position'),
            'password' => Hash::make(Input::get('password')),
            'title' => '',
            'active' => '0',
            'accepting' => '0'
            ));
        
        if(Auth::attempt(array(
            'username' => Input::get('id_number'),
            'password' => Input::get('password')
        ))){
            return Redirect::to('user');
        }
       
        return Redirect::to('login');        
    }    

	
	public function get_statistics()
    {

    }    

	public function get_manage()
    {

    }

}