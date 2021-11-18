@extends('frontend.main_master')

@section('content')


@section('title')
{{ $blogpost->post_title_en }}
@endsection


<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="">Home</a></li>
                <li class='active'>{{ $blogpost->post_title_en }}</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="blog-page">
                <div class="col-md-9">
                    <div class="blog-post wow fadeInUp">
                        <img class="img-responsive" src="{{ asset($blogpost->post_image) }}" alt="@if(session()->get('language')=='bangla'){{$blogpost->post_title_bn}}@else{{$blogpost->post_title_en}}@endif">
                        <h1>@if(session()->get('language')=='bangla'){{$blogpost->post_title_bn}}@else{{$blogpost->post_title_en}}@endif
                        </h1>
                        <span class="date-time">{{ Carbon\Carbon::parse($blogpost->created_at)->diffForHumans() }}</span>

                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <div class="addthis_inline_share_toolbox_lsuj"></div>

                        <p>@if(session()->get('language')=='bangla'){!! $blogpost->post_details_bn !!}@else{!!
                            $blogpost->post_details_en !!}@endif</p>
                        
                            <span>share post:</span>
                            
                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <div class="addthis_inline_share_toolbox_lsuj"></div>
                        
                        
                    </div>
                    <div class="blog-post-author-details wow fadeInUp">
@php
    $comments = App\Models\Blog\BlogComment::where('blogpost_id',$blogpost->id)->orderBy('id','DESC')->limit(6)->get();
@endphp 
                        @foreach($comments as $item)
                        
                        <div class="row">
                            <div class="col-md-2">
                                <img src="{{ (!empty($item->user->profile_photo_path))? url('upload/user_images/'.$item->user->profile_photo_path):url('upload/no_image.jpg') }}" width="40" height="40" style="border-radius: 50%;" alt="{{ $item->user->name }}" title="{{ $item->user->name }}" class="img-circle img-responsive">
                            </div>
                            <div class="col-md-10">
                                <h4>{{ $item->user->name }}</h4>
                                
                                <span class="author-job">{{ $item->title }}</span>
                                <p>{{ $item->comment }}</p>
                            </div>
                        </div>
                        <hr>
                        @endforeach

                    </div> 
                    




                    <div class="blog-write-comment outer-bottom-xs outer-top-xs">

                        

                        <div class="row">
                        @guest
                            <div class="col-md-12">
                                <h4>Leave A Comment</h4>
                                <p><b>For Comment Blog You Need to Login First <a href="{{ route('login') }}">Login Here</a></b></p>
                            </div>
                            

                        @else
                            <form class="register-form" role="form" method="POST" action="{{ route('comment.store') }}">
                                @csrf
                                <input type="hidden" name="blogpost_id" value="{{ $blogpost->id }}">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="info-title" for="title">Title <span>*</span></label>
                                        <input type="text" name="title" class="form-control unicase-form-control text-input"
                                            id="title" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="info-title" for="comment">Your Comments
                                            <span>*</span></label>
                                        <textarea name="comment" class="form-control unicase-form-control"
                                            id="comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 outer-bottom-small m-t-20">
                                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Submit
                                        Comment</button>
                                </div>
                            </form>
                            
                        @endguest

                        </div>
                    </div>
                </div>
                <div class="col-md-3 sidebar">



                    <div class="sidebar-module-container">
                        <div class="search-area outer-bottom-small">
                            <form>
                                <div class="control-group">
                                    <input placeholder="Type to search" class="search-field">
                                    <a href="#" class="search-button"></a>
                                </div>
                            </form>
                        </div>

                        <div class="home-banner outer-top-n outer-bottom-xs">
                            <img src="{{ asset('frontend/assets/images/banners/LHS-banner.jpg') }}" alt="Image">
                        </div>
                        <!-- ===========================CATEGORY============================ -->
                         <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                            <h3 class="section-title">Blog Category</h3>
                            <div class="sidebar-widget-body m-t-10">
                                <div class="accordion">
                                
                                    @foreach($blogpostcategory as $category)
                                    <ul class="list-group">
                                        <a href="{{ url('blog/category/post/'.$category->id) }}">
                                            <li class="list-group-item"> @if (session()->get('language')=='bangla'){{ $category->blog_category_name_bn }}@else{{ $category->blog_category_name_en }} @endif </li>
                                        </a>
                                    </ul>
                                    @endforeach

                                </div><!-- /.accordion -->
                            </div><!-- /.sidebar-widget-body -->
                        </div><!-- /.sidebar-widget -->
                        <!-- ============================================== CATEGORY : END ============================================== -->
                        
                        <!-- ============================================== PRODUCT TAGS ============================================== -->
                        <div class="sidebar-widget product-tag wow fadeInUp">
                            <h3 class="section-title">Product tags</h3>
                            <div class="sidebar-widget-body outer-top-xs">
                                <div class="tag-list">
                                    <a class="item" title="Phone" href="category.html">Phone</a>
                                    <a class="item active" title="Vest" href="category.html">Vest</a>
                                    <a class="item" title="Smartphone" href="category.html">Smartphone</a>
                                    <a class="item" title="Furniture" href="category.html">Furniture</a>
                                    <a class="item" title="T-shirt" href="category.html">T-shirt</a>
                                    <a class="item" title="Sweatpants" href="category.html">Sweatpants</a>
                                    <a class="item" title="Sneaker" href="category.html">Sneaker</a>
                                    <a class="item" title="Toys" href="category.html">Toys</a>
                                    <a class="item" title="Rose" href="category.html">Rose</a>
                                </div><!-- /.tag-list -->
                            </div><!-- /.sidebar-widget-body -->
                        </div><!-- /.sidebar-widget -->
                        <!-- ============================================== PRODUCT TAGS : END ============================================== -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection