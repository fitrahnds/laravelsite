<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
	public function index(){
		$posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.index')->with('posts', $posts);
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
