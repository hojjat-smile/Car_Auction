@extends('user.layout.layout')


@section('css')

@endsection

@section('main')

    <div class="col-fs-12">
        <div class="col-lg-12">
            <div id="utf_add_listing_part">

                <div class="add_utf_listing_section margin-top-15">
                    <div class="utf_add_listing_part_headline_part">
                        <h3>Sell Your Car in a Copart Auction</h3>
                    </div>
                    <form action="{{route('user.profile-update')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row with-forms">

                            <div class="col-md-2">
                                <h5>Image Profile</h5>

                                <img style="width: 100px; height: 100px " src="{{asset($user->image)}}" alt="">
                                <input type="file" name="image">


                            </div>
                        </div>

                        <div class="row with-forms">
                            <div class="col-md-6">
                                <h5>User Name</h5>
                                <input type="text" name="username" value="{{$user->username}}">
                            </div>


                        </div>

                        <div class="row with-forms">
                            <div class="col-md-6">
                                <h5>First Name</h5>

                                <input type="text" name="firstname" value="{{$user->firstname}}">
                            </div>
                            <div class="col-md-6">
                                <h5>Last Name</h5>
                                <input type="text" name="lastname" value="{{$user->lastname}}">
                            </div>
                        </div>

                        <div class="row with-forms">
                            <div class="col-md-6">
                                <h5>Phone Number</h5>
                                <input type="text" name="mobile" value="{{$user->mobile}}">
                            </div>
                            <div class="col-md-6">
                                <h5>Email</h5>
                                <input type="email" name="email" value="{{$user->email}}">
                            </div>
                        </div>

                        <div class="row with-forms">

                            <div class="col-md-6">
                                <h5>Password</h5>
                                <input type="password" name="password">
                            </div>

                            <div class="col-md-6">
                                <h5>Confirm Password</h5>
                                <input type="password" name="confirm_password">
                            </div>

                        </div>

                        <button type="submit" class="button">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection
