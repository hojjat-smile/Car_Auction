@extends('web.layout.layout')



@section('css')

@endsection






@section('main')
    <div class="container">
        <div class="login_holder">
            <h1>
                Register
            </h1>

            <div class="tab_content">
                <form action="{{route('register')}}" id="addUser" method="post" class="register"
                      enctype="multipart/form-data">
                    @csrf

                    <p class="utf_row_form utf_form_wide_block">
                        <label for="image">
                            <input type="file" class="input-text" name="image" id="image" value="{{old('image')}}"
                                   placeholder="image"/>

                            @error('image')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror

                        </label>
                    </p>
                    <p class="utf_row_form utf_form_wide_block">
                        <label for="first_name">
                            <input type="text" class="input-text" name="first_name" id="first_name"
                                   value="{{old('first_name')}}"
                                   placeholder="First Name"/>

                            @error('first_name')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror

                        </label>
                    </p>

                    <p class="utf_row_form utf_form_wide_block">
                        <label for="last_name">
                            <input type="text" class="input-text" name="last_name" id="last_name"
                                   value="{{old('last_name')}}"
                                   placeholder="Last Name"/>

                            @error('last_name')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror

                        </label>
                    </p>

                    <p class="utf_row_form utf_form_wide_block">
                        <label for="mobile">
                            <input type="number" class="input-text" name="mobile" id="mobile" value="{{old('mobile')}}"
                                   placeholder="Mobile"/>

                            @error('mobile')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror

                        </label>
                    </p>

                    <p class="utf_row_form utf_form_wide_block">
                        <label for="company_name">
                            <input type="text" class="input-text" name="company_name" id="company_name"
                                   value="{{old('company_name')}}"
                                   placeholder="Company Name (optional)"/>

                            @error('company_name')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror

                        </label>
                    </p>

                    <p class="utf_row_form utf_form_wide_block">
                        <label for="username">
                            <input type="text" class="input-text" name="username" id="username"
                                   value="{{old('username')}}"
                                   placeholder="Username"/>

                            @error('username')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror

                        </label>
                    </p>


                    <p class="utf_row_form utf_form_wide_block">
                        <label for="country">
                            <select class="input-text" name="country_id" id="country">
                                <option  value="">Select Country</option>
                                @foreach(\App\Models\Country::all() as $country)
                                    <option value="{{$country->id}}">{{$country->title}}</option>
                                @endforeach
                            </select>

                            @error('country_id')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror

                        </label>
                    </p>

                    <p class="utf_row_form utf_form_wide_block">
                        <label for="city_id">
                            <select class="input-text" name="city_id" id="city_id">
                                <option  value="">Select City</option>
                                @foreach(\App\Models\City::all() as $city)
                                    <option value="{{$city->id}}">{{$city->title}}</option>
                                @endforeach
                            </select>

                            @error('city_id')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror

                        </label>
                    </p>


                    <p class="utf_row_form utf_form_wide_block">
                        <label for="email2">
                            <input type="email" class="input-text" name="email" id="email2"
                                   placeholder="Email" value="{{old('email')}}"/>

                            @error('email')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror

                        </label>
                    </p>

                    <p class="utf_row_form utf_form_wide_block">
                        <label for="password1">
                            <input class="input-text" type="password" name="password" id="password1"
                                   placeholder="Password"/>

                            @error('password')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror

                        </label>
                    </p>

                    <p class="utf_row_form utf_form_wide_block">
                        <label for="password_confirmation">
                            <input class="input-text" type="password" name="password_confirmation"
                                   id="password_confirmation"
                                   placeholder="Confirm Password"/>

                            @error('password_confirmation')
                            <small class="text-danger"> {{$message}}</small>
                            @enderror

                        </label>
                    </p>
                    <button type="submit" class="button border form-control" >Register</button>
                </form>
            </div>
        </div>
    </div>


@endsection


{{--@section('script')--}}
{{--    <script src="{{asset('assets/web/scripts/jquery-3.4.1.min.js')}}"></script>--}}
{{--    <script src="{{asset('assets//web/scripts/plugins/jquery-validate/jquery.validate.min.js')}}"></script>--}}
{{--    <script src="{{asset('assets//web/scripts/plugins/jquery-validate/additional-methods.min.js')}}"></script>--}}

{{--    <script>--}}

{{--        $("#addUser").validate({--}}

{{--            errorClass: "error-message",--}}

{{--            rules: {--}}
{{--                first_name: {--}}
{{--                    required: true,--}}
{{--                },--}}

{{--                last_name: {--}}
{{--                    required: true,--}}
{{--                },--}}

{{--                mobile: {--}}
{{--                    required: true,--}}
{{--                },--}}

{{--                email: {--}}
{{--                    required: true,--}}
{{--                },--}}

{{--                password: {--}}
{{--                    required: true,--}}
{{--                },--}}

{{--            },--}}
{{--            messages:{--}}
{{--                username:{--}}
{{--                    required: "Please enter your login.",--}}
{{--                    remote: jQuery.validator.format("{0} is already taken.")--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}


{{--@endsection--}}


