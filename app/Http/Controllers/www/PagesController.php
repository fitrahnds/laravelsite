<?php

namespace App\Http\Controllers\www;

use App\Http\Controllers\Controller;
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
		
		$data = array(
            //'posts' => Post::orderBy('created_at', 'desc')->paginate(10),
            'posts' => $posts,
            'category' => Category::all()
        );
		//echo "<pre>".print_r($posts, true)."</pre>";
        return view('www.pages.index')->with($data);
	}
	public function about(){
		$title = "About";
		return view('www.pages.about')->with('title', $title);
	}
	public function services(){
		//$title = "Services";
		$data = array(
				'title' => 'Sevices',
				'services' => ['Programming','SEO','www Design']
		);
		return view('www.pages.services')->with($data);
	}
}
