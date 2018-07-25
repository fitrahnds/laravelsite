<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PagesController extends Controller
{
	public function index(){
		$articles = Post::orderBy('created_at', 'desc')->get();
        $posts = $articles->sortByDesc(function ($article) {
            return $article->getPageViews();
        });
        // echo "<pre>".print_r($articles, true)."</pre>";
        // die();
		$data = array(
            //'posts' => Post::orderBy('created_at', 'desc')->paginate(10),
            'posts' => $posts,
            'category' => Category::all()
        );
		//echo "<pre>".print_r($posts, true)."</pre>";
        return view('web.pages.index')->with($data);
	}
	public function about(){
		$title = "About";
		return view('web.pages.about')->with('title', $title);
	}
	public function services(){
		//$title = "Services";
		$data = array(
				'title' => 'Sevices',
				'services' => ['Programming','SEO','Web Design']
		);
		return view('web.pages.services')->with($data);
	}
}
