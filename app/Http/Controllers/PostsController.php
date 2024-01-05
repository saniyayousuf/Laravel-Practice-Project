<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
// importing MYSql Database library
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //    we can use database quiries also:
        //    $posts = DB::select('SELECT * FROM posts');
        //     $posts = Post:all();
        // $posts = Post::orderBy('title','desc')->paginate(1);
        $posts = Post::orderBy('title','desc')->get();
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        return 123;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $post =  Post::find($id); 
       return view('posts.show')->with('post',$post);

       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
