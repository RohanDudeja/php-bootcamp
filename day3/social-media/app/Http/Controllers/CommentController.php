<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post_id=\request()->get('post_id');
        $comment=[];
        if (Comment::where('post_id', $post_id)->exists()) {
            $comment = Comment::where('post_id', $post_id)->get();
        }
        return view('viewcomments',['allComments'=>$comment]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('createcomment',['user_id'=>\request()->get('user_id'),'post_id'=>\request()->get('post_id')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required',
            'user_id' => 'required',
            'content' => 'required|max:255',
            'comment_id'=>'required',
        ]);
        Comment::create([
            'user_id' => $request->get('user_id'),
            'post_id' => $request->get('post_id'),
            'content' => $request->get('content'),
            'comment_id'=>$request->get('comment_id'),
        ]);
        return response()->json([
            'message'=>'Comment placed',
            'user_id'=>$request->get('user_id'),
            'post_id'=>$request->get('post_id'),
            'content'=>$request->get('content'),
        ]);
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
}
