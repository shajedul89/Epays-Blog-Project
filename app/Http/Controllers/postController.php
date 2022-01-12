<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $data = post::all();
        return view('layouts.post.index',[
           'all_data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post_cat= Category::all();
        $post_tag= Tag::all();
        return view('layouts.post.create',[
            'post_category' =>$post_cat,
            'post_tags' => $post_tag
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request,[

            'title' => 'required',
            'content' =>'required',
            'image' =>'required',

        ]);

        $unique_file_name='';
        if($request->hasFile('image')){
            $img = $request->file('image');
            $unique_file_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('media/post/'),$unique_file_name);
        }

        $posts = post::create([
            "user_id" =>Auth::user()->id,
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "category" =>$request->cat,
            "description" => $request->content,
            "images" =>$unique_file_name,
            "posted_by" => Auth::user()->id
        ]);
        $posts->Tags()->attach($request->tags);
        return redirect()->route('post.index') ->with('success','post save successfully');
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
        $p= post::find($id);
        $post_cat= Category::all();
        $post_tag= Tag::all();
        return view('layouts.post.update',[
            'post' => $p,
            'post_category' => $post_cat,
            'post_tags' => $post_tag,
        ]);

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
        $edit_id = $id;
        $edit_data=post::find($edit_id);
        $edit_data -> title = $request->title;
        $edit_data -> slug=Str::slug($request->title);
        $edit_data -> category= $request->cat;
        $edit_data -> description= $request ->content;

        $edit_data->Tags()->sync($request->tags);

        $unique_file_name='';
        if($request->hasFile('new_image')){
            $img = $request->file('new_image');
            $unique_file_name=md5(rand().time()). '.' . $img ->getClientOriginalExtension();
            $img -> move(public_path('media/post/'),$unique_file_name);
            unlink('media/post/'.$request-> old_image);
        }

        else{

            $unique_file_name= $request ->old_image;

        }
        $edit_data ->images = $unique_file_name;
        $edit_data ->update();

        return redirect()->route('post.index') ->with('success','data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post_del= post::find($id);
        unlink('media/post/'.$post_del ->images);
        $post_del ->delete();

          return redirect()->back()->with('delete','Data Deleted Successfully');
    }
}
