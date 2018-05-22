<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PagesController extends Controller
{
	public function index(){
		$data = array(
            'posts' => Post::orderBy('created_at', 'desc')->paginate(10),
            'category' => Category::all()
        );
		//echo "<pre>".print_r($posts, true)."</pre>";
        return view('pages.index')->with($data);
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
