@extends('web.layout.layout')



@section('css')

@endsection






@section('main')


    <div class="container">
        <div class="tab_content" id="tab1" style="display:none;">

            <form {{--action="{{route('')}}"--}} method="post" class="login">
                @csrf
                <a href="javascript:void(0);" class="social_bt facebook_btn"><i class="fa fa-facebook"></i>Login with
                    Facebook</a>
                <a href="javascript:void(0);" class="social_bt google_btn"><i class="fa fa-google-plus"></i>Login with
                    Google</a>
                <p class="utf_row_form utf_form_wide_block">
                    <label for="username">
                        <input type="text" class="input-text" name="username" id="username" value=""
                               placeholder="Username"/>
                    </label>
                </p>
                <p class="utf_row_form utf_form_wide_block">
                    <label for="password">
                        <input class="input-text" type="password" name="password" id="password" placeholder="Password"/>
                    </label>
                </p>
                <div class="utf_row_form utf_form_wide_block form_forgot_part"><span class="lost_password fl_left"> <a
                            href="javascript:void(0);">Forgot Password?</a> </span>
                    <div class="checkboxes fl_right">
                        <input id="remember-me" type="checkbox" name="check">
                        <label for="remember-me">Remember Me</label>
                    </div>
                </div>
                <div class="utf_row_form">
                    <input type="submit" class="button border margin-top-5" name="login" value="Login"/>
                </div>
            </form>
        </div>
    </div>


@endsection


@section('script')




    <script src="{{asset('assets//web/scripts/jquery.min.js')}}"></script>
    <script src="{{asset('assets//web/scripts/plugins/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets//web/scripts/plugins/jquery-validate/additional-methods.min.js')}}"></script>
    <script src="{{asset('assets//web/scripts/plugins/jquery-validate/messages_fa.min.js')}}"></script>

    <script>

        $("#addUser").validate({

            errorClass: "error-message ",

            rules: {
                first_name: {
                    required: true,
                },

                last_name: {
                    required: true,
                },

            });
    </script>



@endsection


