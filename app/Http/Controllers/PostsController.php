<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 * @author Erikson de Leon < ericsson.el@gmail.com >
 * @since march 2016
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
     * Show the application list.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::all();


        return view('posts', compact('posts'));
    }

    /**
     * Show a row.
     *
     * @return Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('post', compact('post'));
    }

    /**
     * Updates row values.
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        Post::where('id', $request->only('id') )->update($request->only('title', 'description'));

        return redirect()->route('posts.index');
    }


    /**
     * Create form view.
     *
     * @return Response
     */
    public function create()
    {
      return view('createPost');
    }


    /**
     * Creates a new row.
     *
     * @return Response
     */
    public function store(Request $request)
    {
      $inputs = $request->only('title', 'description', 'user_id');

      Post::create($inputs);

      return redirect()->route('posts.index');
    }

    /**
     * Deletes a new row.
     *
     * @return Response
     */
    public function destroy($id)
    {
      $post = Post::find($id);
      $post->delete();

      return redirect()->route('posts.index');
    }
}
