<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Visitor;

Route::get('/', function () {


	$ip=\Request::ip();

	$new_visitor=App\Visitor::where('ip',$ip)->get()->count();

	if($new_visitor==0)
	{
		//new visitor
		$visitor = new Visitor; 
	    $visitor->ip = $ip; 
	    $visitor->location = json_encode(\Location::get($ip)); 
	    $visitor->count = 0; 
	    $visitor->description = "New Visitor";  
	    $visitor->save();

	}	
	else
	{
		//old visitor
		$visitor = App\Visitor::where('ip',$ip)->get()->toArray()[0]["count"]; 
		$count=$visitor+1; 
		$visitor = App\Visitor::where('ip',$ip)
					->update([
								'location' => json_encode(\Location::get($ip)) ,
							  	'count' => $count ,
							  	'description' => 'old visitor'
					]); 
	}
    
    return view('welcome');
});

Auth::routes();

Route::get('login/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/work','HomeController@work')->name('work');
Route::get('/contact','HomeController@contact')->name('contact');

Route::get('/ip', function () {
    $ip= \Request::ip();
    $data = \Location::get($ip);
    return json_encode($data);
    dd($data);
});

Route::resource('resume', 'ResumeController');

  


// Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
// Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

// Route::get('login/google', 'Auth\LoginController@redirectToProvider');
// Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
