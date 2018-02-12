<div class="k-dash-menu-toggler clearfix uk-margin-small-bottom">
    <button class="dashboard-menu-toggle btn btn-primary pull-right"> <i uk-icon="icon: menu"></i></button>
</div>
<nav class="nav flex-column side-nav k-sidemenu" id="dashboard-menu">
    <button class='btn btn-primary btn-rounded close-dash-menu pull-right'><i uk-icon="icon: close"></i></button>
    <div class="k-sidemenu-content">
        <ul class="k-sidemenu">
            <a class="nav-link icon {{ side_nav_activator('dashboard') }}" href="{{ url('dashboard') }}">
                <i class="sl sl-icon-home"></i> Dashboard
            </a>
        </ul>
        <ul class="k-sidemenu has-children {{ side_nav_activator('account') }}">
            <a class="nav-link icon {{ side_nav_activator('account') }}" href="">
                <i class="sl sl-icon-user"></i>My Profile
            </a>
            <div class="k-sidemenu-children">
                <li>
                    <a href="{{ url('account/view/'.strtolower( auth()->user()->pin) ) }}/">Manage Account</a>
                </li>
            </div>
        </ul>
        @if(user_is('Admin'))
            <ul class="k-sidemenu has-children {{ side_nav_activator('categories') }}">
                <a class="nav-link icon {{ side_nav_activator('categories') }}" href="{{ url('categories') }}">
                    <i class="im im-icon-Folder-Archive"></i>Categories
                </a>
                <div class="k-sidemenu-children">
                    <li>
                        <a href="{{ url('categories') }}/">Manage Categories</a>
                    </li>
                </div>
            </ul>
        @endif
        <ul class="k-sidemenu has-children">
            <a class="nav-link icon" href="my-ads.html">
                <i class="sl sl-icon-heart"></i>My Ads Listing
            </a>
            <div class="k-sidemenu-children">
                <li>
                    <a href="">Child Ads listing</a>
                </li>
            </div>
        </ul>
        <ul class="k-sidemenu">
            <a class="nav-link icon" href="bookmarks.html">
                <i class="sl sl-icon-star"></i>Bookmarks
            </a>
        </ul>
        <ul class="k-sidemenu">
            <a class="nav-link icon" href="change-password.html">
                <i class="sl sl-icon-refresh"></i>Change Password
            </a>
        </ul>

        @if(user_is('Admin'))
            <ul class="k-sidemenu {{ side_nav_activator('settings') }}">
                <a class="nav-link icon {{ side_nav_activator('settings') }}" href="{{ url('settings/') }}">
                    <i class="sl sl-icon-settings"></i>Settings
                </a>
            </ul>

        @endif
    </div>
</nav>