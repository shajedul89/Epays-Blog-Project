<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\post;
use App\Models\category;
use App\Models\settings;
use Illuminate\Http\Request;

class frontendViewManagement extends Controller
{

    public function HomePage(){
        return view('frontend.index');
    }

    public function HomePageManage(){
        $st=settings::find(1);
        return view('frontend.index');
    }
    public function Blogview(){
       $p= post::latest()->paginate(6);
       return view('frontend.blog',[
        'blog'=> $p,
       ]);
    }

    public function Blog_single_view($id){
        $p=post::find($id);
        return view('frontend.single_blog',[
            'blogs' => $p,
        ]);
     }

     public function contactsInfo(){
        $st=settings::find(1);
        return view('frontend.contact',[
            'settings' =>$st,
        ]);
     }

     // blog serach View by tag

     public function Blog_search_by_category($slug){
       $cat = category::where('slug',$slug)->first();
      $blog= post::where('category',$cat->id)->paginate(6);

        return view('frontend.blog_search_category',compact('blog'));
     }

      // blog serach View by tag

      public function Blog_search_by_tag($slug){
        $tag = Tag::where('slug',$slug)->first();
        if($tag){
            $blog = $tag ->posts()->orderBy('created_at','desc')->paginate(1);
            return view('frontend.blog_search_tag',compact('blog'));
        }
        else{
            return redirect()->route('fhome');
        }




      }

      //blog search

      public function BlogSearch(Request $request){
          $search_text = $request->search;
           $blog= post::where('title','like','%'.$search_text.'%')/* ->orWhere('description','like','%'.$search_text.'%') */->paginate(6);

           return view('frontend.blog_search',compact('blog'));
      }

}
