<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('backend.pages.dashboard')->with('posts', $user->posts);
    }
    public function admin()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('backend.pages.admin')->with('posts', $user->posts);
    }
}
