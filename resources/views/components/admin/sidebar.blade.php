


<div class="utf_dashboard_navigation js-scrollbar">
    <div class="utf_dashboard_navigation_inner_block">
        <ul>
            <li class="{{ request()->is('admin-panel/dashboard') ? 'active' : '' }}"><a href="{{route('admin.dashboard')}}"><i class="sl sl-icon-layers"></i> Dashboard</a></li>
            <li class="{{ request()->is('admin-panel/user-management') ? 'active' : '' }}"><a href="{{route('admin.user-management')}}"><i class="sl sl-icon-plus"></i>Users</a></li>
            <li class="{{ request()->is('admin-panel/ad-management') ? 'active' : '' }}"><a href="{{route('admin.ad-management')}}"><i class="sl sl-icon-plus"></i>Ads List</a></li>
            <li class="{{ request()->is('admin-panel/package-management') ? 'active' : '' }}"><a href="{{route('admin.package-management')}}"><i class="sl sl-icon-plus"></i>Packages</a></li>
            <li class="{{ request()->is('admin-panel/membership') ? 'active' : '' }}"><a href="{{route('admin.membership')}}"><i class="sl sl-icon-plus"></i> Membership</a></li>
            <li class="{{ request()->is('admin-panel/trans-manage') ? 'active' : '' }}"><a href="{{route('admin.trans-manage')}}"><i class="sl sl-icon-plus"></i> Transaction management</a></li>
            <li class="{{ request()->is('admin-panel/settings') ? 'active' : '' }}"><a href="{{route('admin.settings')}}"><i class="sl sl-icon-plus"></i> Settings</a></li>

        </ul>
    </div>
</div>
