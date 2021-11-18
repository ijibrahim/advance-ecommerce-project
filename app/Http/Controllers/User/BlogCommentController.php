<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog\BlogComment;
use App\Models\Blog\BlogPost;
use Auth;
use Carbon\Carbon;


class BlogCommentController extends Controller
{
     public function CommentStore(Request $request){

        $blogpost_id = $request->blogpost_id;

        $request->validate([

            'title' => 'required',
            'comment' => 'required',

        ]);

        BlogComment::insert([

            'blogpost_id' => $blogpost_id,
            'user_id' => Auth::id(),
            'title' => $request->title,
            'comment' => $request->comment,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Submit Comment Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    } // end method


    public function AllComment(){

        $comment = BlogComment::latest()->get();
        return view('backend.comment.publish_comment', compact('comment'));

    } // end method

    public function CommentDelete($id){
        BlogComment::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Comment Delete Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

}
