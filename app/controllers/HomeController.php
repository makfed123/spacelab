<?php

class HomeController extends BaseController {

	/*
	 |--------------------------------------------------------------------------
	 | Default Home Controller
	 |--------------------------------------------------------------------------
	 |
	 | You may wish to use controllers instead of, or in addition to, Closure
	 | based routes. That's great! Here is an example controller method to
	 | get you started. To route to this controller, just add the route:
	 |
	 |	Route::get('/', 'HomeController@showWelcome');
	 |
	 */

	public function index() {
		$collections = Collection::where('public', '=', '1')->get();

		return View::make('index') -> with('collections', $collections);
	}

	public function showCampaign($id = '') {
		$result = Collection::where('id', '=', $id) -> get();

		if (is_null($result -> first())) {
			return Redirect::to('/');
		} else {
			foreach ($result as $r) {
				return View::make('campaign') -> with('collection', $r);
			}
		}
	}

	public function showArgument($id = '') {
		$campaign = Collection::where('id', '=', $id) -> first();
		$arguments = DB::table('paragraphs') -> join('paragraph_texts', 'paragraphs.id', '=', 'paragraph_texts.paragraph_id') -> select('*') -> where('paragraphs.collection_id', '=', $id) -> get();
		
		$data = array(
			'campaign' => $campaign,
			'arguments' => $arguments
		);

		return View::make('argument', $data);
	}

}
