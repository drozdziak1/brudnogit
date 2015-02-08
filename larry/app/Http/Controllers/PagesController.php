<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function contact() {
		$data = [];
		$data['first'] = 'Stanisław';
		$data['last'] = 'Drozd';
		return view('pages.contact')->with($data);
	}
	public function about() {
		return view('pages.about');
	}
}
