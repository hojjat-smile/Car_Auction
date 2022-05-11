@extends('admin.layout.layout')


@section('css')

@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">

                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit Profle</h1>
                    <p>Edit and update the information of client</p>

                    <form action="{{route('admin.updated',$user->id)}}" id="editUser" method="POST"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="control-group col-12">
                                <label for="username">User Name</label>
                                <input type="text" id="username" class="form-control" name="username"
                                       placeholder="Enter first name" value="{{$user->username}}">

                                @error('username')
                                <small class="text-danger"> {{$message}}</small>
                                @enderror

                            </div>
                            <div class="control-group col-12">
                                <label for="firstname">Firstname</label>
                                <input type="text" id="firstname" class="form-control" name="firstname"
                                       placeholder="Enter first name" value="{{$user->firstname}}">

                                @error('firstname')
                                <small class="text-danger"> {{$message}}</small>
                                @enderror

                            </div>
                            <div class="control-group col-12">
                                <label for="lastname">Lastname</label>
                                <input type="text" id="lastname" class="form-control" name="lastname"
                                       placeholder="Enter last name" value="{{$user->lastname}}"
                                >

                                @error('lastname')
                                <small class="text-danger"> {{$message}}</small>
                                @enderror

                            </div>
                            <div class="control-group col-12">
                                <label for="email">Email</label>
                                <input type="text" id="email" class="form-control" name="email"
                                       placeholder="Enter Email " value="{{$user->email}}"
                                >

                                @error('email')
                                <small class="text-danger"> {{$message}}</small>
                                @enderror

                            </div>
                            <div class="control-group col-12">
                                <label for="mobile">Mobile</label>
                                <input type="text" id="mobile" class="form-control" name="mobile"
                                       placeholder="Enter phone number " value="{{$user->mobile}}"
                                >

                                @error('mobile')
                                <small class="text-danger"> {{$message}}</small>
                                @enderror

                            </div>
                            <div class="control-group col-12">
                                <label for="companyname">Company Name</label>
                                <input type="text" id="companyname" class="form-control" name="companyname"
                                       placeholder="Enter company name " value="{{$user->companyname}}">
                            </div>

                            <div class="control-group col-12">
                                <label for="password">Password</label>
                                <input type="password" id="password" class="form-control" name="password"
                                       placeholder="Enter Password">

                                @error('password')
                                <small class="text-danger"> {{$message}}</small>
                                @enderror

                            </div>
                            <div class="control-group col-12">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" id="confirm_password" class="form-control"
                                       name="confirm_password"
                                       placeholder="Enter Confirm Password">

                                @error('confirm_password')
                                <small class="text-danger"> {{$message}}</small>
                                @enderror

                            </div>

                        </div>


                        <button type="submit" class="button">
                            Update Profile
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>




@endsection


@section('script')

    <script src="{{asset('assets//web/scripts/jquery.min.js')}}"></script>
    <script src="{{asset('assets//web/scripts/plugins/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets//web/scripts/plugins/jquery-validate/additional-methods.min.js')}}"></script>

{{--    <script>--}}

{{--        $("#editUser").validate({--}}

{{--            errorClass: "error-message",--}}

{{--            rules: {--}}
{{--                firstname: {--}}
{{--                    required: true,--}}
{{--                },--}}

{{--                lastname: {--}}
{{--                    required: true,--}}
{{--                },--}}

{{--                mobile: {--}}
{{--                    required: true,--}}
{{--                },--}}


{{--                username: {--}}
{{--                    required: true,--}}
{{--                    remote: {--}}
{{--                        url: "user_availability.php",--}}
{{--                        type: "post",--}}
{{--                        data:--}}
{{--                            {--}}
{{--                                register: function () {--}}
{{--                                    return $('#editUser :input[name="username"]').val();--}}
{{--                                }--}}
{{--                            }--}}
{{--                    }--}}
{{--                },--}}


{{--                email: {--}}
{{--                    required: true,--}}
{{--                },--}}



{{--            },--}}
{{--            messages: {--}}
{{--                username: {--}}
{{--                    required: "Please enter your login.",--}}
{{--                    remote: jQuery.validator.format("{0} is already taken.")--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}

@endsection
