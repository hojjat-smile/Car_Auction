<div id="header" class="not-sticky">
    <div class="container-fluid">
        <div class="utf_left_side">
            <div id="logo"><a href="{{route('web.index')}}"><img src="{{asset('assets/web/images/logo.png')}}" alt=""></a>
                <a href="{{route('web.index')}}" class="dashboard-logo">
                    <img src="{{asset('assets/web/images/logo2.png')}}" alt=""></a></div>
            <div class="mmenu-trigger">
                <button class="hamburger utfbutton_collapse" type="button">
				<span class="utf_inner_button_box">
					<span class="utf_inner_section"></span>
				</span>
                </button>
            </div>

            <div class="clearfix"></div>
        </div>
        <div class="utf_right_side">
            <div class="header_widget">

                <div class="utf_user_menu">
                    <div class="utf_user_name"><span><img src="{{asset(\Illuminate\Support\Facades\Auth::user()->image)}}"
                                                          alt=""></span>{{\Illuminate\Support\Facades\Auth::user()->firstname .\Illuminate\Support\Facades\Auth::user()->lastname}}
                    </div>
                    <ul>
                        <li><a href="{{route('admin.dashboard')}}"><i class="sl sl-icon-layers"></i> Dashboard</a></li>
                        <li><a href="{{route('admin.profile')}}"><i class="sl sl-icon-user"></i> My Profile</a></li>
                        <li><a href="{{route('admin.ad-management')}}"><i class="sl sl-icon-list"></i> Ads</a></li>



                        <li><a  onclick="event.preventDefault(); document.getElementById('submit-form').submit();"
                                href="{{route('logout')}}"><i class="sl sl-icon-power"></i> Logout</a></li>

                        <form id="submit-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

