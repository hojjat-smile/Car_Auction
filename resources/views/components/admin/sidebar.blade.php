<div class="utf_dashboard_navigation js-scrollbar">
    <div class="utf_dashboard_navigation_inner_block">
        <ul>
            <li class="{{ request()->is('admin-panel/dashboard') ? 'active' : '' }}"><a
                    href="{{route('admin.dashboard')}}"><i class="sl sl-icon-layers"></i> Dashboard</a></li>
            <li class="{{ request()->is('admin-panel/user-management') ? 'active' : '' }}"><a
                    href="{{route('admin.user-management')}}"><i class="sl sl-icon-people"></i>Users management</a></li>
            <li class="{{ request()->is('admin-panel/ad-management') ? 'active' : '' }}"><a
                    href="{{route('admin.ad-management')}}"><i class="sl sl-icon-Menu"></i>Ads management</a></li>
            <li class="{{ request()->is('admin-panel/package-management') ? 'active' : '' }}"><a
                    href="{{route('admin.package-management')}}"><i class="sl sl-icon-plus"></i>Packages management</a>
            </li>
            <li class="{{ request()->is('admin-panel/membership') ? 'active' : '' }}"><a
                    href="{{route('admin.membership')}}"><i class="sl sl-icon-bag"></i>Membership </a></li>
            <li class="{{ request()->is('admin-panel/trans-manage') ? 'active' : '' }}"><a
                    href="{{route('admin.trans-manage')}}"><i class="sl sl-icon-wallet"></i> Transaction management</a>
            </li>


            <li ><a><i class="sl sl-icon-settings"></i> Settings</a>

                <ul class="treeview-menu">

                    <li class="{{ request()->is('admin-panel/rules') ? 'active' : '' }}">
                        <a href="{{route('admin.rules')}}"><span>Roles</span></a>
                    </li>
                    <li class="{{ request()->is('admin-panel/contact-us') ? 'active' : '' }}">
                        <a href="{{route('admin.contact-us')}}"><span>Contact Us</span></a>
                    </li>


                    <li class="{{ request()->is('admin-panel/about_us') ? 'active' : '' }}">
                    <a href="{{route('admin.about-us')}}"><span>About Us</span></a>
                    </li>


                    <li class="{{ request()->is('admin-panel/info-about-us') ? 'active' : '' }}">
                        <a href="{{route('admin.info-about-us')}}"><span>Information About Us</span></a>
                    </li>

                </ul>

            </li>

            <li class="{{ request()->is('admin-panel/profile') ? 'active' : '' }}"><a href="{{route('admin.profile')}}"><i
                        class="sl sl-icon-user"></i> Profile</a>
            </li>

            <li class="treeview">
                <a href="#"><i class="sl sl-icon-user"></i> <span>Roles & Permissions</span></a>

            </li>

            <li class="{{ request()->is('logout') ? 'active' : '' }}">
                <a href="{{route('logout')}}"
                   onclick="event.preventDefault(); document.getElementById('submit-form').submit();">
                    <i class="sl sl-icon-logout">
                    </i>
                    Logout
                </a>

            </li>
            <form id="submit-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>

        </ul>
    </div>
</div>
