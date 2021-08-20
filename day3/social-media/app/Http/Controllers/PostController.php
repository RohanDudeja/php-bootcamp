<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id=\request()->get('user_id');
        $posts = Post::all();
        return view('viewposts',['allPosts'=>$posts,'user_id'=>$user_id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createpost',['user_id'=>\request()->get('user_id')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Post::create([
            'user_id' => $request->get('user_id'),
            'post_id' => $request->get('post_id'),
            'content' => $request->get('post_content'),
        ]);
        return response()->json([
            'message'=>'Post created',
            'user_id'=>$request->get('user_id'),
            'post_id'=>$request->get('post_id'),
            'content'=>$request->get('post_content'),
        ]);
        //return redirect('/',);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function getPostsByID(Request $request) {
        $posts=[];
        //echo $request->get('user_id_get');
        if (Post::where('user_id', $request->get('user_id_get'))->exists()) {
            $posts = Post::where('user_id', $request->get('user_id_get'))->get();
        }
        return view('viewpostby',['allPosts'=>$posts]);
    }
}
