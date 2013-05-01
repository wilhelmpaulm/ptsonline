<?php

class Admin_Milestones_Controller extends Base_Controller {

    public $restful = true;

    public function post_delete() {
        Milestone::find(Input::get('id'))->delete();
        return Redirect::back();
    }

    public function post_edit() {
        $milestone = Milestone::find(Input::get('id'));
        $milestone->name = Input::get('name');
        $milestone->description = Input::get('description');
        $milestone->points = Input::get('points');
        if (Input::file('picture.name')) {
            Input::upload('picture', 'public/img/milestones/', Input::file('picture.name'));
            Laravel\File::delete('public/img/milestones/' . $milestone->picture);

            $milestone->picture = Input::file('picture.name');
        }
        $milestone->save();
        return Redirect::back();
    }

    public function post_new() {
        if (Input::file('picture.name')) {
            Input::upload('picture', 'public/img/milestones/', Input::file('picture.name'));

            Milestone::create(array(
                'name' => Input::get('name'),
                'description' => Input::get('description'),
                'points' => Input::get('points'),
                'picture' => Input::file('picture.name')
            ));


            return Redirect::back();
        } else {
            Milestone::create(array(
                'name' => Input::get('name'),
                'description' => Input::get('description'),
                'points' => Input::get('points'),
                'picture' => 'none'
            ));
            return Redirect::back();
        }
    }

    public function get_index() {
        $milestones = Milestone::all();

        $data = array(
            'milestones' => $milestones
        );
        return View::make('admin.milestones', $data);
    }

}