<?php

namespace App\Http\Controllers\Www;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use App\Models\Category;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;
//use DB;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
		//$posts = Post::all();
		//$posts = DB::select('SELECT * FROM posts');
        //$posts = Post::orderBy('created_at', 'desc')->take(1)->get();
        // $articles = Post::orderBy('created_at', 'desc')->get();
        // $posts = $articles->sortByDesc(function ($article) {
        //     return $article->getPageViews();
        // });

        // echo "<pre>".print_r($posts, true)."</pre>";
        // die();
        $data = array(
            'posts' => Post::orderBy('created_at', 'desc')->paginate(10),
            // 'posts' => $posts,
            'category' => Category::all()
        );
        return view('www.posts.index')->with($data);
    }

    public function show($id, $url_slug = null)
    {
        if($url_slug){
            $post = Post::where('id', $id)->where('url_slug', $url_slug)->first();
        }else{
            $post = Post::find($id);
            if($post){
                return redirect('/article/'.$post->id.'/'.$post->url_slug);
            }else{
                return abort(404);
            }
        }
        if($post)
        {
            $post->addPageView();
            return view('www.posts.show')->with('post', $post);
        }
        return abort(404);
        //$post->addPageView();
        //$post->increment('view_count');
    }
}
