<?php

class User_Manage_Tutorial_Controller extends Base_Controller {

    public $restful = true;

    public function get_index() {
        if (Auth::user()->position != 'tutee') {
            $tutees = User::find(Auth::user()->id)->tutees();
            $degrees = Degree::all();
            $data = array(
                'degrees' => $degrees,
                'tutees' => $tutees
            );
            return View::make('user.tutor', $data);
        } else {
            $tutors = User::find(Auth::user()->id)->tutors();
            $specializations = Specialization::all();
            $data = array(
                'specializations' => $specializations,
                'tutors' => $tutors
            );
            return View::make('user.tutee', $data);
        }
    }

    public function post_accepting() {
        $user = User::find(Auth::user()->id);
        if (Auth::user()->accepting == 1) {
            $user->accepting = 0;
        } else {
            $user->accepting = 1;
        }
        $user->save();
        return Redirect::back();
    }
    public function post_new() {
        Tutorial::create(array(
            'tutor_id' => Input::get('tutor_id'),
            'tutee_id' => Auth::user()->id,
            'status' => 'pending',
            'description' => Input::get('description')
        ));
        
        return Redirect::back();
    }

    public function post_status() {
        $tutorial = Tutorial::find(Input::get('id'));
//        dd($tutorial);
        $tutorial->status = Input::get('status');
        $tutorial->save();

        return Redirect::back();
    }

    public function post_find() {

        function match($tutors) {
            $count = 0;
            $t = 0;
            $tsched = array();
            $tutee = User::find(Auth::user()->id)->schedules()->lists('id');

            foreach ($tutors as $tutor) {
                $tsched = User::find($tutor)->schedules()->lists('id');

                if ($count < count(array_intersect($tutee, $tsched))) {
                    $count = count(array_intersect($tutee, $tsched));
                    $t = $tutor;
                }
            }
            return $t;
        }

        if (Input::get('filter') == 'yes') {
            $tutors = DB::table('userspecializations')
                    ->where('specialization_id', '=', Input::get('id'))//Input::get('id'))
                    ->join('users', 'users.id', '=', 'userspecializations.user_id')
                    ->where('accepting', '=', '1')
                    ->where('position', '!=', 'tutee')
                    ->where('user_id', '!=', Auth::user()->id)
                    ->lists('user_id');
            if (count($tutors) != 0) {
                $tutor = User::find(match($tutors));
                return Redirect::to('tutors/'.$tutor->id_number);
            } else {
                $users = DB::table('userspecializations')
                    ->where('specialization_id', '=', Input::get('id'))//Input::get('id'))
                    ->join('users', 'users.id', '=', 'userspecializations.user_id')
                    ->where('accepting', '=', '1')
                    ->where('position', '!=', 'tutee')
                    ->where('user_id', '!=', Auth::user()->id)->get();
                
                        $data = array(
                    'users' => $users
                );

                return View::make('user.tutorresult', $data);
            }
        } else {

           $users = DB::table('userspecializations')
                    ->where('specialization_id', '=', Input::get('id'))//Input::get('id'))
                    ->join('users', 'users.id', '=', 'userspecializations.user_id')
                    ->where('accepting', '=', '1')
                    ->where('position', '!=', 'tutee')
                    ->where('user_id', '!=', Auth::user()->id)
                    ->get();
                
           //dd($users);
                        $data = array(
                    'users' => $users
                );

                return View::make('user.tutorresult', $data);
        }
    }

    public function match($tutors) {
        $count = 0;
        $t = 0;
        $tsched = array();
        $tutee = User::find(Auth::user()->id)->schedules()->lists('id');
        foreach ($tutors as $tutor) {
            $tsched = User::find($tutor)->schedules()->lists('id');

            if ($count < count(array_intersect($tutee, $tsched))) {
                $count = count(array_intersect($tutee, $tsched));
                $t = $tutor;
            }
        }
        return $t;
    }

}