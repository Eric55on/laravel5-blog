<?php

namespace App\Http\Controllers;


use App\Post;                                                                                                               
use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 * @author Erikson de Leon
 */
class PostsController extends Controller
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
     * @return Response
     */
    public function index()
    {
        $posts = Post::all();


        return view('posts', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('post', compact('post'));
    }

    public function update(Request $request, $id)
    {
        Post::where('id', $request->only('id') )->update($request->only('title', 'description'));

        return redirect()->route('posts.index');
    }
}