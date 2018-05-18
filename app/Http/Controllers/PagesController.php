<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index(){
		$title = "Welcome To Home";
		//Return view('pages.index', compact('title'));
		return view('pages.index')->with('title', $title);
	}
	public function about(){
		$title = "About";
		return view('pages.about')->with('title', $title);
	}
	public function services(){
		//$title = "Services";
		$data = array(
				'title' => 'Sevices',
				'services' => ['Programming','SEO','Web Design']
		);
		return view('pages.services')->with($data);
	}
}
