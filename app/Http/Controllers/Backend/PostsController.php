<?php

namespace App\Http\Controllers\Backend;

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
        $this->middleware('auth');
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
        $data = array(
            'posts' => Post::orderBy('created_at', 'desc')->paginate(10),
            // 'posts' => $posts,
            'category' => Category::all()
        );
        return view('backend.pages.posts')->with($data);
    }

    public function create()
    {
        $category = Category::pluck('name','id');
        // echo "<pre>".print_r($category, true)."</pre>";
        // die();
        return view('backend.pages.create')->with('category', $category);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'url' => 'required',
            'short_desc' => 'required',
            'body' => 'required',
            'tags' => 'nullable',
            'category_id' => 'required',
            'cover_img' => 'image|nullable|max:1999'
        ]);

        //Handle File Upload
        if($request->hasFile('cover_img')){
            $image = $request->file('cover_img');
            //Get filename with extension
            $filenameWithExt = $image->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just Ext
            $extension = $image->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_img')->storeAs('public/cover_images/original', $fileNameToStore);
            //Resize Image
            $image_resize = Image::make($image->getRealPath());          
            $image_resize->resize(85, 85);
            $image_resize->save(public_path('storage/cover_images/85x85/' .$fileNameToStore));
            $image_resize = Image::make($image->getRealPath());          
            $image_resize->resize(200, 100);
            $image_resize->save(public_path('storage/cover_images/200x100/' .$fileNameToStore));
            $image_resize = Image::make($image->getRealPath());          
            $image_resize->resize(300, 250);
            $image_resize->save(public_path('storage/cover_images/300x250/' .$fileNameToStore));
        } else {
            $fileNameToStore = "noimage.jpg";
        }
        
        $post = new Post;
        $post->title = $request->input('title');
        $post->url_slug = $request->input('url');
        $post->short_description = $request->input('short_desc');
        $post->body = $request->input('body');
        $post->tags = $request->input('tags');
        $post->category_id = $request->input('category_id');
        $post->user_id = auth()->user()->id;
        $post->cover_img = $fileNameToStore;
        $post->save();
        
        return redirect('/posts')->with('success', 'Post Created');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $data = array(
            'category' => Category::pluck('name','id'),
            'post' => $post
        );
        
        if(auth()->user()->id !== $post->user_id)
        {
            return redirect('/dashboard')->with('error', 'Unauthorized Page');
        }
        return view('backend.pages.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'url' => 'required',
            'short_desc' => 'required',
            'body' => 'required',
            'tags' => 'nullable',
            'category_id' => 'required',
            'cover_img' => 'image|nullable|max:1999'
        ]);
        
        if($request->hasFile('cover_img')){
            $image = $request->file('cover_img');
            //Get filename with extension
            $filenameWithExt = $image->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just Ext
            $extension = $image->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_img')->storeAs('public/cover_images/original', $fileNameToStore);
            //Resize Image
            $image_resize = Image::make($image->getRealPath());          
            $image_resize->resize(85, 85);
            $image_resize->save(public_path('storage/cover_images/85x85/' .$fileNameToStore));
            $image_resize = Image::make($image->getRealPath());          
            $image_resize->resize(200, 100);
            $image_resize->save(public_path('storage/cover_images/200x100/' .$fileNameToStore));
            $image_resize = Image::make($image->getRealPath());          
            $image_resize->resize(300, 250);
            $image_resize->save(public_path('storage/cover_images/300x250/' .$fileNameToStore));
        }

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->url_slug = $request->input('url');
        $post->short_description = $request->input('short_desc');
        $post->body = $request->input('body');
        $post->tags = $request->input('tags');
        $post->category_id = $request->input('category_id');
        if($request->hasFile('cover_img')){
            if($post->cover_img !== "noimage.jpg"){
                //Delete Image
                Storage::delete('public/cover_images/original/'.$post->cover_img);
                Storage::delete('public/cover_images/85x85/'.$post->cover_img);
                Storage::delete('public/cover_images/200x100/'.$post->cover_img);
                Storage::delete('public/cover_images/300x250/'.$post->cover_img);
            }
            $post->cover_img = $fileNameToStore;
        }
        $post->save();
        
        return redirect('/posts/')->with('success', 'Post Updated');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        if($post->cover_img !== "noimage.jpg"){
            //Delete Image
            Storage::delete('public/cover_images/original/'.$post->cover_img);
            Storage::delete('public/cover_images/85x85/'.$post->cover_img);
            Storage::delete('public/cover_images/200x100/'.$post->cover_img);
            Storage::delete('public/cover_images/300x250/'.$post->cover_img);
        }
        $post->delete();
        
        return redirect('/posts/')->with('success', 'Post Deleted');
    }
}
