<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class postscontroller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = post::orderby('created_at', 'desc')->get();
        return view('pagess.index')->with('posts', $post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this-> validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $post = new post;
        $post->user_id = auth()->user()->id;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();

        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = post::find($id);
        //return $minetable;
        return view('pages.show')->with('posts', $post);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::find($id);

        if(auth()->user()->id !==$post->user_id){
            return redirect('/post')->with('error', 'unauthorized page');
        }
        return view('pages.edit')->with('posts', $post);
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
        $this-> validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $post = post::find($id);
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();

        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        if(auth()->user()->id !==$post->user_id){
            return redirect('/post')->with('error', 'unauthorized page');
        }
        $post->delete();
        return redirect('/post');
    }
}
