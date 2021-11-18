<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class BlogComment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function blogpost(){
      return $this->belongsTo(BlogPost::class,'blogpost_id','id');
    }

    public function user(){
      return $this->belongsTo("App\Models\User"::class,'user_id','id');
    }

}
