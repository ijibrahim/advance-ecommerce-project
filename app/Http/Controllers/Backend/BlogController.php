<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog\BlogPostCategory;
use App\Models\Blog\BlogPost;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function BlogCategory(){

        $blogcategory = BlogPostCategory::latest()->get();
        return view('backend.blog.category.category_view', compact('blogcategory'));
    } // end method


    public function BlogCategoryStore(Request $request){

        $request->validate([
            'blog_category_name_en' => 'required',
            'blog_category_name_bn' => 'required',
        ],
        [
            'blog_category_name_en.required' => 'Input Blog Category Name English',
            'blog_category_name_bn.required' => 'Input Blog Category Name Bangla',

        ]

    );

        

        BlogPostCategory::insert([
            'blog_category_name_en' => ucfirst($request->blog_category_name_en),
            'blog_category_name_bn' => $request->blog_category_name_bn,
            'blog_category_slug_en' => strtolower(str_replace(' ', '-',$request->blog_category_name_en)),
            'blog_category_slug_bn' => str_replace(' ', '-',$request->blog_category_name_bn),
            'created_at' => Carbon::now(),

        ]);

         $notification = array(
            'message' => 'Blog Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }


    public function BlogCategoryEdit($id){

        $blogcategory = BlogPostCategory::findOrFail($id);
        return view('backend.blog.category.category_edit', compact('blogcategory'));

    }


     public function BlogCategoryUpdate(Request $request){

        $blogcat_id = $request->id;

        BlogPostCategory::findOrFail($blogcat_id)->update([
            'blog_category_name_en' => ucfirst($request->blog_category_name_en),
            'blog_category_name_bn' => $request->blog_category_name_bn,
            'blog_category_slug_en' => strtolower(str_replace(' ', '-',$request->blog_category_name_en)),
            'blog_category_slug_bn' => str_replace(' ', '-',$request->blog_category_name_bn),
            'created_at' => Carbon::now(),

        ]);

         $notification = array(
            'message' => 'Blog Category Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('blog.category')->with($notification);

    }

    public function BlogCategoryDelete($id){

        BlogPostCategory::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Blog Category Delete Successfully',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }



// ============== Blog Post All Method ==============
    public function ViewBlogPost(){

        $blogcategory = BlogPostCategory::latest()->get();
        $blogpost = BlogPost::latest()->get();
        return view('backend.blog.post.post_view', compact('blogpost','blogcategory'));
    }



}
