    <div class="container full-height no-padding scrollable">
        <div class="secondary-sidebar-toggle bg-master-lighter padding-10 text-center hidden-lg-up">
            <a href="#" data-init="secondary-sidebar-toggle"><i class="pg pg-more"></i></a>
        </div>
        <div class="secondary-sidebar light" data-init="secondary-sidebar">
            <div class="secondary-sidebar-inner">
                <p class="menu-title">ACCOUNTS</p>
                <ul class="main-menu"">
                <li class="">
                    <a href="#">
                        <i data-feather="inbox"></i>
                        </span>
                        <span class="title">Users</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('users') }}/">
                                <span class="bold m-r-10 fs-12">US</span>
                                <span class="title">Manage users</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('users/add') }}">
                                <span class="bold m-r-10 fs-12">AU</span>
                                <span class="title">Add new</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('users/groups') }}">
                                <span class="bold m-r-10 fs-12">GP</span>
                                <span class="title">Groups</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="{{ url('settings/users') }}">
                        <span class="title">Users settings</span>
                    </a>
                </li>
                </ul>
                <p class="menu-title m-t-30">YOUR FAVOURITE</p>
                <ul class="main-menu">
                    <li class="">
                        <a href="#">
                        <span class="icon-thumbnail">
                        <i data-feather="layers"></i>
                        </span>
                            <span class="title">Collection</span>
                            <span class="badge pull-right">5</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#">
                        <span class="icon-thumbnail">
                        <i data-feather="award"></i>
                        </span>
                            <span class="title"> Playlist</span>
                        </a>
                    </li>
                    <li class="open active">
                        <a href="#">
                        <span class="icon-thumbnail">
                        <i data-feather="inbox"></i>
                        </span>
                            <span class="title">Case Study</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">
                                    <span class="bold m-r-10 fs-12">B4</span>
                                    <span class="title">Bootstrap 4</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="bold m-r-10 fs-12">MP</span>
                                    <span class="title">Made with Pages</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        {{--Open inner contents after sidebar is loaded. This is closed at the footer--}}
        <div class="inner-content full-height  p-r-20 p-l-20">

