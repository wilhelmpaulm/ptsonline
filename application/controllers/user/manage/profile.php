<?php

class User_Manage_Profile_Controller extends Base_Controller {

    public $restful = true;

    public function get_index() {
        $degrees = Degree::all();
        $data = array(
            'degrees' => $degrees
        );
        return View::make('user.profile', $data);
    }

    public function post_edit() {
        $user = User::find(Auth::user()->id);
        $user->last_name = Input::get("last_name");
        $user->first_name = Input::get("first_name");
        $user->id_number = Input::get("id_number");
        $user->mobile = Input::get("mobile");
        $user->email = Input::get("email");
        $user->bio = Input::get("bio");
        $user->degree = Input::get("degree");
        //$user->position = Input::get("position");
        $user->save();

        return Redirect::back();
        //return dd($userschedule);
    }

    public function post_picture() {
        if (Input::file('picture.name')) {
            
            Laravel\File::delete('public/img/profile/'.Auth::user()->picture);
            
            $user = User::find(Auth::user()->id);
            Input::upload('picture', 'public/img/profile/', Input::file('picture.name'));
            $user->picture = Input::file('picture.name');
            $user->save();
            return Redirect::back();
        }else{
            return Redirect::back();
        }
    }
    public function post_password() {
            $user = User::find(Auth::user()->id);
            $user->password = Hash::make(Input::get('password'));
            $user->save();
            
                        return Redirect::back();

    }
    public function get_poop() {
           
                        return 'poop! Easter egg!';

    }

}