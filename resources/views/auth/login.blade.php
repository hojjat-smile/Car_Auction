@extends('web.layout.layout')



@section('main')

    <div class="container">
        <div class="login_holder">
            <h1>
                Login
            </h1>
            <form id="login" action="{{route('login')}}" method="post">
                @csrf

                <div>
                    <lable>Email</lable>
                    <input type="email" name="email">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div>
                    <lable>password</lable>
                    <input type="password" name="password">
                    @error('password')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="utf_row_form utf_form_wide_block form_forgot_part"> <span class="lost_password fl_left"> <a href="javascript:void(0);">Forgot Password?</a> </span>
                    <div class="checkboxes fl_right">
                        <input id="remember-me" type="checkbox" name="check">
                        <label for="remember-me">Remember Me</label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="button">Login</button>
                </div>
            </form>
        </div>
    </div>

@endsection


@section('script')

    <script src="{{asset('assets//web/scripts/plugins/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets//web/scripts/plugins/jquery-validate/additional-methods.min.js')}}"></script>

    <script>

        $("#login").validate({

            errorClass: "error-message",

            rules: {
                email: {
                    required: true,
                },

                password: {
                    required: true,
                },

            },
            messages: {
                username: {
                    required: "Please enter your login.",
                    remote: jQuery.validator.format("{0} is already taken.")
                }
            }
        });
    </script>


@endsection


