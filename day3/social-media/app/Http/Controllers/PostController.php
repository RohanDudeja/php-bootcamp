<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Log;

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
        $password=\request()->get('password');
        if (User::where('user_id', $user_id)->exists()) {
            if (User::where('user_id', $user_id)->where('password',$password)->exists()){

            }else {
                Log::info('User failed to login.'. $user_id);
                return response()->json([
                    'message'=>'invalid password',
                ]);
            }
        }else {
            Log::info('Invalid user tried to login.'. $user_id);
            return response()->json([
                'message'=>'no such user exists',
            ]);
        }
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
        $request->validate([
            'post_id' => 'required',
            'post_content' => 'required|max:255',
        ]);
        Post::create([
            'user_id' => $request->get('user_id'),
            'post_id' => $request->get('post_id'),
            'content' => $request->get('post_content'),
        ]);
        Log::info('Creating the post content for post '.
            $request->get('post_id').
            ' for user: '.
            $request->get('user_id'));
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
        $request->validate([
            'user_id_get' => 'required',
        ]);
        $posts=[];
        //echo $request->get('user_id_get');
        if (Post::where('user_id', $request->get('user_id_get'))->exists()) {
            $posts = Post::where('user_id', $request->get('user_id_get'))->get();
        }
        Log::info('Showing the post content for post '.
            $request->get('post_id').
            ' to user: '.
            $request->get('user_id'));
        return view('viewpostby',['allPosts'=>$posts]);
    }
}
