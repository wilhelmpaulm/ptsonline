<?php

Route::filter('pattern: user/*', 'auth');
Route::filter('pattern: admin/*', 'admin');
Route::controller('user.manage.specializations');
Route::controller('user.manage.profile');
Route::controller('user.manage.tutorial');
Route::controller('user.manage.schedule');

Route::controller(Controller::detect());


Route::get('/crawl', function() {
        echo Hash::make('poop');
        });
Route::get('/', function() {
            return View::make('home.index');
        });
Route::get('/bacon', function() {
            return "I love you too";
        });
Route::get('/index', function() {
            return View::make('home.index');
        });
Route::get('/home', function() {
            return View::make('home.index');
        });

Route::get('/contact', function() {
            return View::make('home.contact');
        });

Route::get('/about', function() {
            return View::make('home.about');
        });

Route::get('/tutors', function() {
            $users = User::where('position', '!=', 'tutee')->get();
            $data = array(
                'users' => $users
            );

            return View::make('home.tutors', $data);
        });
Route::get('/tutors/(:num)', function($id) {
 if(User::where('position', '!=', 'tutee')
                    ->where('id_number', '=', $id)
                    ->get() != null)   
{
            $users = User::where('position', '!=', 'tutee')
                    ->where('id_number', '=', $id)
                    ->get();
            $user = User::where('position', '!=', 'tutee')
                    ->where('id_number', '=', $id)
                    ->first();
        $userschedules = User::find($user->id)->schedules()->order_by('id','asc')->get();
        $userspecializations = User::find($user->id)->specializations()->order_by('id','asc')->get();
        $badges = User::find($user->id)->badges();
        $tutorials = User::find($user->id)->tutorials();
            $data = array(
                'userschedules' => $userschedules,
            'userspecializations' => $userspecializations,
                'users' => $users,
            'tutorials' => $tutorials,
            'badges' => $badges
            );

            return View::make('home.tutor', $data);
}
else    
    return Redirect::error('404');
            
            
});
Route::get('/events', function() {
            $meets = Meet::all();
            $data = array(
                'meets' => $meets
            );

            return View::make('home.events', $data);
        });

Route::get('/events/(:any)', function($name) {
            $meets = Meet::where('name', '=', $name)
                    ->get();
            $data = array(
                'meets' => $meets
            );

            return View::make('home.event', $data);
        });
Route::get('/houses', function() {
            $houses = House::all();
            $data = array(
                'houses' => $houses
            );

            return View::make('home.houses', $data);
        });

Route::get('/houses/(:any)', function($name) {
            $houses = House::where('name', '=', $name)
                    ->get();
            $data = array(
                'houses' => $houses
            );

            return View::make('home.house', $data);
        });



Route::get('signup', function() {
            $degrees = Degree::all();
            $data = array('degrees' => $degrees);

            return View::make('home.signup', $data);
        });
Route::post('signup', function() {
            if(Input::get('password') != Input::get('pp'))
            {
                return "User creation unsuccessful! Please check your password";
            }
    
            if(Input::get('id_number') == '10930191')
            {
              $user = User::create(array(
                        'last_name' => Input::get('last_name'),
                        'first_name' => Input::get('first_name'),
                        'id_number' => Input::get('id_number'),
                        'email' => Input::get('email'),
                        'bio' => Input::get('bio'),
                        'degree' => Input::get('degree'),
                        'position' => 'supreme overlord',
                        'mobile' => Input::get('mobile'),
                        'password' => Hash::make(Input::get('password')),
                        'picture' => 'none',
                        'title' => 'supreme overlord',
                        'active' => '1',
                        'accepting' => '1'
            ));  
            }
            else{
                
                    $user = User::create(array(
                                'last_name' => Input::get('last_name'),
                                'first_name' => Input::get('first_name'),
                                'id_number' => Input::get('id_number'),
                                'email' => Input::get('email'),
                                'bio' => Input::get('bio'),
                                'degree' => Input::get('degree'),
                                'position' => Input::get('position'),
                                'mobile' => Input::get('mobile'),
                                'password' => Hash::make(Input::get('password')),
                                'picture' => '01c.jpg',
                                'title' => '',
                                'active' => '0',
                                'accepting' => '0'
                    ));
            }
            
            
            if (Input::file('picture.name')) {
                Input::upload('picture', 'public/img/profile/', Input::file('picture.name'));
                $user->picture = Input::file('picture.name');
                $user->save();
            }

            if (Auth::attempt(array(
                        'username' => Input::get('id_number'),
                        'password' => Input::get('password')
                    ))) {
                return Redirect::to('user');
            }
            
            
        });

Route::get('/login', function() {
            if(Auth::user())
            {
            return Redirect::to('user/index');
                
            }
    
            return View::make('home.login');
        });
Route::post('login', function() {
            $credentials = array(
                'username' => Input::get('username'),
                'password' => Input::get('password')
            );

            if (Auth::attempt($credentials)) {
                return Redirect::to('user');
            } else {
                return Redirect::back();
            }
        });



Event::listen('404', function() {
            return Response::error('404');
        });

Event::listen('500', function($exception) {
            return Response::error('500');
        });



/*
  |--------------------------------------------------------------------------
  | Route Filters
  |--------------------------------------------------------------------------
  |
  | Filters provide a convenient method for attaching functionality to your
  | routes. The built-in before and after filters are called before and
  | after every request to your application, and you may even create
  | other filters that can be attached to individual routes.
  |
  | Let's walk through an example...
  |
  | First, define a filter:
  |
  |		Route::filter('filter', function()
  |		{
  |			return 'Filtered!';
  |		});
  |
  | Next, attach the filter to a route:
  |
  |		Route::get('/', array('before' => 'filter', function()
  |		{
  |			return 'Hello World!';
  |		}));
  |
 */

Route::filter('before', function() {
            // Do stuff before every request to your application...
        });

Route::filter('after', function($response) {
            // Do stuff after every request to your application...
        });

Route::filter('csrf', function() {
            if (Request::forged())
                return Response::error('500');
        });

Route::filter('auth', function() {
            if (Auth::guest())
                return Redirect::to('login');
        });
Route::filter('admin', function() {
        if (Auth::guest())
                return Redirect::to('login');
            if (Auth::user()->position == 'tutor' || Auth::user()->position == 'tutee')
                return Redirect::to('user');
        });