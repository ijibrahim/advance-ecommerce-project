@extends('frontend.main_master')

@section('content')

{{--
        @php 
        $user = DB::table('users')->where('id',Auth::user()->id)->first();
        @endphp 
--}}
<div class="body-content">
    <div class="container">
        <div class="row">
            
            @include('frontend.common.user_sidebar')
            
            <div class="col-md-2">
                
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center"><span class="text-danger">Hi....</span><strong>{{ Auth::user()->name }}</strong> Change Password </h3>
                    <div class="card-body">
                        <form action="{{ route('user.password.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="info-title" for="current_password">Current Password <span>*</span></label>
                                <input id="current_password" type="password" name="oldpassword" class="form-control " >

                            </div>
                            <div class="form-group">
                                <label class="info-title" for="password">New Password<span>*</span></label>
                                <input id="password" type="password" name="password" class="form-control " >

                            </div>
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="password_confirmation">Confirm Password <span>*</span></label>
                                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control " >

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
