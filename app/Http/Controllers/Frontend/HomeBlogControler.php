<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog\BlogPostCategory;
use App\Models\Blog\BlogPost;
use Carbon\Carbon;
use Image;

class HomeBlogControler extends Controller
{
    public function ShowBlogPost(){
        $blogpostcategory = BlogPostCategory::latest()->get();
        $blogpost = BlogPost::latest()->get();
        return view('frontend.blog.blog_list',compact('blogpost','blogpostcategory'));
    } // end method


    public function DetailsBlogPost($id){
        $blogpostcategory = BlogPostCategory::latest()->get();
        $blogpost = BlogPost::findOrFail($id);
        return view('frontend.blog.blog_details', compact('blogpost','blogpostcategory'));

    } // end method

    public function HomeBlogCatPost($category_id){
        $blogcatpost = BlogPostCategory::latest()->get();
        $blogpost = BlogPost::where('category_id',$category_id)->orderBy('id','DESC')->get();
        return view('frontend.blog.blog_cat_list',compact('blogpost','blogcatpost'));
    } // end method
} 
