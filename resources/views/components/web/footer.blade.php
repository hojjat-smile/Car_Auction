<!-- Footer -->
<div id="footer" class="footer_sticky_part">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                @foreach(\App\Models\AboutUs::all() as $about)
                    <h4>About Us</h4>
                    <p>{{$about->message}}</p>
                @endforeach
            </div>


            <div class="col-md-4 col-sm-3 col-xs-6">
                <h4>Pages</h4>
                <ul class="social_footer_link">

                    <li><a href="{{route('web.how-works')}}">How It Works</a></li>
                    <li><a href="{{route('web.find-car-view')}}">Find Vehicles</a></li>
                    <li><a href="{{route('web.contact')}}">Contact us</a></li>
                    <li><a href="{{route('web.about-us')}}">About Us</a></li>
                    <li><a href="{{route('web.rules')}}">Rules and Regulations</a></li>

                </ul>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-6">
                <h4>Login and Register</h4>
                <ul class="social_footer_link">
                    <li><a href="{{route('login')}}">Sign In</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="footer_copyright_part">Copyright © 2019 All Rights Reserved.</div>
            </div>
        </div>
    </div>
</div>
