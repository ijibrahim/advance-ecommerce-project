@extends('frontend.main_master')

@section('content')

<div class="body-content">
    <div class="container">
        <div class="row">
            
            @include('frontend.common.user_sidebar')
            
            <div class="col-md-2">
                
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center"><span class="text-danger">Hi....</span><strong>{{ Auth::user()->name }}</strong>Update your Profile</h3>
                    <div class="card-body">
                        <form action="{{ route('user.profile.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="info-title" for="name">Name <span>*</span></label>
                                <input id="name" type="text" name="name" class="form-control " value="{{ $user->name }}">

                            </div>
                            <div class="form-group">
                                <label class="info-title" for="email">Email <span>*</span></label>
                                <input id="email" type="email" name="email" class="form-control " value="{{ $user->email }}">

                            </div>
                            <div class="form-group">
                                <label class="info-title" for="phone">Phone <span>*</span></label>
                                <input id="phone" type="text" name="phone" class="form-control " value="{{ $user->phone }}">

                            </div>
                            <div class="form-group">
                                <label class="info-title" for="image">User Image <span>*</span></label>
                                <input id="image" type="file" name="profile_photo_path" class="form-control " value="{{ $user->name }}">

                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-rounded btn-primary " value="Update">

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




@endsection
