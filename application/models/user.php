<?php

class User extends Eloquent 
{
    
    public function tutees()
    {
        return DB::table('users')
                ->join('tutorials', 'users.id', '=', 'tutorials.tutee_id')
                ->where('tutorials.tutor_id' ,'=',Auth::user()->id)
                ->get();
    }
    public function tutors()
    {
        return DB::table('users')
                ->join('tutorials', 'users.id', '=', 'tutorials.tutor_id')
                ->where('tutorials.tutee_id' ,'=',Auth::user()->id)
                ->get();
    }
    public function schedules()
    {
        return $this->has_many_and_belongs_to("Schedule",'userschedules');
    }
    public function specializations()
    {
        return $this->has_many_and_belongs_to('Specialization','userspecializations');
    }
    public function badges()
    {
        return $this->has_many_and_belongs_to('Badge', 'userbadges');
    }
    public function tutorials()
    {
       return $this->has_many('Tutorial', 'tutor_id' );
    }
}