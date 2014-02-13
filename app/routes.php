<?php

/*
 |--------------------------------------------------------------------------
 | Application Routes
 |--------------------------------------------------------------------------
 |
 | Here is where you can register all of the routes for an application.
 | It's a breeze. Simply tell Laravel the URIs it should respond to
 | and give it the Closure to execute when that URI is requested.
 |
 */
 
 
Route::get('/', array('uses' => 'HomeController@index'));
Route::get('/campaign/{id}', array('uses' => 'HomeController@showCampaign'));
Route::get('/argument/{id}', array('uses' => 'HomeController@showArgument'));


//jacob testar med sin första form
Route::get('userform', function() {
	return View::make('userform');
});

Route::post('userform', function() {
	//Denna route tar emot POST data från formuläret
	return Redirect::to('userresults') -> withInput(Input::only('username', 'color'));
});

Route::get('userresults', function() {
	//denna visar data
	return 'Ditt användarnamn är: ' . Input::old('username') . '<br>
		Din favvofärg är: ' . Input::old('color');
});



Route::get('users', function() {
	return View::make('users');
});

Route::get('dbtest', function() {
	#	return DB::select('SELECT * FROM agreements WHERE id = 2');
	$result = DB::table('collections') -> select('collection_heading', 'intro', 'collection_link') -> get();
	#	$result->fetch;
	var_dump($result[0] -> intro);
});

Route::get('collection', function() {
	$collections = Collection::all();

	return View::make('collections') -> with('collections', $collections);
});

Route::get('/k/new', function() {
	$collection = new Collection();
	$collection -> collection_link = 'news';
	$collection -> user_id = 13;
	$collection -> language_id = 5;
	$collection -> stylesheet_id = 37;
	$collection -> collection_name = 'New_default';
	$collection -> collection_heading = 'Rubrik';
	$collection -> intro = 'Standard introduktion.';
	return View::make('edit_campaign') -> with('collection', $collection);
});


Route::get('contactformsender', function() {

	$data = array('name' => 'test name', 'email' => 'test email', 'msg' => 'test message');

	Mail::send('emails/contactemail', $data, function($message) {
		$message -> to('jacob.sternius@gmail.com', 'J S') -> subject('Welcome!');
	});

});

Route::get('/k/{campaign}/redigera', function($campaign) {
	$result = Collection::where('collection_link', '=', $campaign) -> get();
	if (is_null($result -> first('Id'))) {
		return Redirect::to('/');
	} else {
		foreach ($result as $r) {
			return View::make('edit_campaign') -> with('collection', $r);
		}
	}
});

Route::get('/k/{campaign}/spara', function($campaign) {
	$result = Collection::where('collection_link', '=', $campaign) -> get();
	if (is_null($result -> first('Id'))) {
		return Redirect::to('/');
	} else {
		foreach ($result as $r) {
			return View::make('edit_campaign') -> with('collection', $r);
		}
	}
});
