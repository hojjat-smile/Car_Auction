<header id="header_part">
    <div id="header">

        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href="{{ url("/") }}"><img src="{{asset('assets/web/images/logo.png')}}" class="headerLogo"
                                                  alt="logo"></a>
                </div>
                <div class="col-md-5">
                    <form action="{{route('web.search')}}">

                        <div class="main_input_search_part utf_coupon_top">
                            <div class="main_input_search_part_item">
                                <input name="search" type="text" placeholder="What are you looking for?"/>
                            </div>

                            <button type="submit" class="button" onclick="window.location.">Search</button>

                        </div>
                    </form>

                </div>
                <div class="col-md-5">
                    <div>
                        @if(\Illuminate\Support\Facades\Auth::check())


                            <a href="{{route('logout')}}"
                               class="button border sign-in "><i
                                    class="fa fa-sign-in"></i>Logout</a>

                            @if(\Illuminate\Support\Facades\Auth::user()->usertype == 'user' )
                                <a href="{{route('user.dashboard')}}"
                                   class="button border sign-in "><i
                                        class="fa fa-sign-in"></i>Dashboard</a>
                            @endif
                            @if(\Illuminate\Support\Facades\Auth::user()->usertype == 'admin')
                                <a href="{{route('admin.dashboard')}}"
                                   class="button border sign-in "><i
                                        class="fa fa-sign-in"></i>Dashboard</a>
                            @endif

                        @endif
                        @if(!\Illuminate\Support\Facades\Auth::user())

                            <a href="{{route('register')}}"
                               class="button border sign-in "><i
                                    class="fa fa-sign-in"></i>Register</a>


                            <a href="{{route('login')}}"
                               class="button border sign-in "><i
                                    class="fa fa-sign-in"></i> Log In</a>

                        @endif


                        @if(\Illuminate\Support\Facades\Auth::user())


                            @if(\Illuminate\Support\Facades\Auth::user()->usertype == 'user' )
                                <a href="{{route('user.add-ads')}}"
                                   class="button border with-icon"><i
                                        class="sl sl-icon-user"></i> Add Car</a>
                            @endif

                            @if(\Illuminate\Support\Facades\Auth::user()->usertype == 'admin')
                                <a href="{{route('admin.add-ads')}}"
                                   class="button border with-icon"><i
                                        class="sl sl-icon-user"></i> Add Car</a>
                            @endif

                        @endif
                    </div>
                </div>
            </div>

            <div class="utf_left_side">

                <nav id="navigation" class="style_one">
                    <ul id="responsive">


                        <li><a href="{{route('web.how-works')}}">How It Works</a>

                        </li>

                        <li><a href="{{route('web.find-car-view')}}">Find Vehicles</a>

                        </li>


                        <li><a href="{{route('web.contact')}}">Contact us</a>
                        </li>


                        <li><a href="{{route('web.about-us')}}">About Us</a>

                        </li>
                        <li><a href="{{route('web.rules')}}">Rules and Regulations</a>

                        </li>


                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>


        </div>
    </div>
</header>



