<a href="#" class="utf_dashboard_nav_responsive"><i class="fa fa-reorder"></i> Dashboard Sidebar Menu</a>
<div class="utf_dashboard_navigation js-scrollbar">
    <div class="utf_dashboard_navigation_inner_block">
        <ul>
            <li class="{{ request()->is('user-panel/dashboard') ? 'active' : '' }}"><a
                    href="{{route('user.dashboard')}}"><i class="sl sl-icon-layers"></i> Dashboard</a></li>
            <li class="{{ request()->is('user-panel/my-ads') ? 'active' : '' }}"><a href="{{route('user.my-ads')}}"><i
                        class="sl sl-icon-magnifier-add"></i>My Ads</a></li>
            <li class="{{ request()->is('user-panel/profile') ? 'active' : '' }}"><a href="{{route('user.profile')}}"><i
                        class="sl sl-icon-magnifier-add"></i>Profile</a></li>

            <li class="{{ request()->is('user-panel/add-ads') ? 'active' : '' }}"><a
                    href="{{route('user.add-ads')}}"><i
                        class="sl sl-icon-magnifier-add"></i>Add Ads</a></li>
            <li class="{{ request()->is('user-panel/my-favorite') ? 'active' : '' }}"><a
                    href="{{route('user.my-favorite')}}"><i
                        class="sl sl-icon-magnifier-add"></i>My Favorite</a></li>

            <li class="{{ request()->is('user-panel/membership') ? 'active' : '' }}"><a
                    href="{{route('user.membership')}}"  ><i
                        class="sl sl-icon-magnifier-add"></i>Membership</a></li>

            <li class="{{ request()->is('logout') ? 'active' : '' }}"><a
                    href="{{route('logout')}}"
                    onclick="event.preventDefault(); document.getElementById('submit-form').submit();"><i
                        class="sl sl-icon-logout"></i>Logout</a></li>


            <form id="submit-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </ul>
    </div>
</div>
