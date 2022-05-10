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
        </ul>
    </div>
</div>
