<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts=Post::latest()->get();
        $posts=Post::oldest()->get();
        //$posts=Post::orderBy('created_at','asc')->get();
		
		return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
		
		//Validating the input Data
		
		$this->validate(request(),[
		 'title' => 'required|min:3',
		  'body' => 'required|min:3',
		]);
		
        //Create a new post using input data.
		
		/* $post=new Post;
		$post->title = request('title');
		$post->body = request('body'); */
		
		Post::create([
		
			'title' => request('title'),
			'body' => request('body')
		
		]);
		
		//save the input data to database
		
		//$post->save();
		
		//return to posts home page
		
		return redirect('/postsindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /*  public function show($id)
    {
		$post_id=Post::find($id);
		
       return view('posts.show',compact('post_id'));
    } */
	
	public function show(Post $posted_id)
    {
		
       return view('posts.show',compact('posted_id'));
	   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
