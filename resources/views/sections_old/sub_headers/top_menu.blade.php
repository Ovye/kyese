<!--============ Secondary Navigation ===============================================================-->
<div class="secondary-navigation" uk-sticky="top: 5vh">
    <div class="container">
        <ul class="left">
            <li>
                <span>
                    <i class="fa fa-phone"></i> {{ config('app.phone', '08131600400') }}
                </span>
            </li>
        </ul>
        <!--end left-->
        <ul class="right">
            <li class="k-sticky-search-btn">
                <a href="" class="k-dropdown-menu-trigger"><i class="sl " uk-icon="icon: search"></i> <i class="hidden-xs">Search</i></a>
            </li>
            <li class="hidden-lg-up k-create-btn-top dropdown k-dropdown open">
                <a href="#createTopTrigger" class="pl-4 k-dropdown-menu-trigger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Create
                    <i class="sl sl-icon-arrow-down k-arrow-down k-dropdown-icon"></i>
                    <i class="sl sl-icon-arrow-up k-arrow-up k-dropdown-icon"></i>
                </a>
                <div class="dropdown-menu k-dropdown-menu k-top-dropmenu animated bounceIn" aria-labelledby="createTopTrigger">
                    <a class="dropdown-item" href="{{ url('account/edit/') }}"><i class="sl sl-icon-basket"></i> Store</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('create/') }}"><i class="im im-icon-Checked-User"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('create/') }}"><i class="im im-icon-Location-2"></i> Location or Place</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('create/') }}"><i class="im im-icon-Flowerpot"></i> Event</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item k-dropmenu-special-item alternative-bg text-uppercase" href="{{ url('create/') }}"> See More <i class="sl sl-icon-arrow-right"></i></a>
                </div>
            </li>
            @if(auth()->check())
            <li class="dropdown open k-top-profile-drop-trigger" style="border-left: none">
                <a href="#myAccountTrigger" class="pl-4 my-account-trigger k-dropdown-menu-trigger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if( auth()->user()->photo == '' || !file_exists(asset(auth()->user()->photo)) )
                    <img class="k-top-profile-img" src="{{ asset('assets/img/no-image.jpg') }}" alt="">
                    @else
                    <img class="k-top-profile-img" src="{{ asset(auth()->user()->photo) }}" alt="">
                    @endif
                    <i class="hidden-xs font-weight-normal">My</i> Account
                    <i class="sl sl-icon-arrow-down k-arrow-down k-top-account-dropmenu-icon"></i>
                    <i class="sl sl-icon-arrow-up k-arrow-up k-top-account-dropmenu-icon"></i>
                </a>
                <div class="dropdown-menu k-top-dropmenu my-account-dropdown-menu animated bounceIn" aria-labelledby="myAccountTrigger">
                    <div class="k-top-dropmenu-profile uk-text-center">
                        <a href="{{ url('account/view/' . strtolower(auth()->user()->pin)) }}/" class="k-top-dropmenu-profile-link">
                            <div class="k-top-dropmenu-img">
                                @if(auth()->user()->photo == '')
                                    <img src="{{ asset('assets/img/no-image.jpg') }}" alt="">
                                @else
                                    <img src="{{ asset(auth()->user()->photo) }}" alt="">
                                @endif
                            </div>
                            <h4 class="k-top-dropmenu-username">{{ str_limit(auth()->user()->first_name . ' ' . auth()->user()->last_name, 14) }}</h4>
                        </a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('account/edit/' . auth()->user()->pin) }}/"><i class="sl sl-icon-pencil"></i> Edit Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('dashboard/') }}"><i class="sl sl-icon-home"></i> Dashboard</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item k-top-dropmenu-special-item text-uppercase" href="{{ url('logout/') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> <i class="sl sl-icon-logout"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
            @else
            <li>
                <a href="{{ url('login/') }}">
                    <i class="sl sl-icon-login"></i>Sign In
                </a>
            </li>
            <li>
                <a href="{{ url('register/') }}">
                    <i class="sl sl-icon-pencil"></i>Register
                </a>
            </li>
            @endif
        </ul>
        <!--end right-->
    </div>
    <!--end container-->
</div>
<!--============ End Secondary Navigation ===========================================================-->
<!--============ Main Navigation ====================================================================-->
<div class="main-navigation">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <!--Main navigation list-->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about-us') }}/">About us</a>
                    </li>
                    <li class="nav-item has-child">
                        <a class="nav-link" href="#">Categories</a>
                        <!-- 2nd level -->
                        <ul class="child">
                            <li class="nav-item">
                                <a href="sellers.html" class="nav-link">Sellers</a>
                            </li>
                            <li class="nav-item has-child">
                                <a href="#" class="nav-link">Seller Detail</a>
                                <!-- 3rd level -->
                                <ul class="child">
                                    <li class="nav-item">
                                        <a href="seller-detail-1.html" class="nav-link">Seller Detail
                                            1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="seller-detail-2.html" class="nav-link">Seller Detail
                                            2</a>
                                    </li>
                                </ul>
                                <!-- end 3rd level -->
                            </li>
                            <li class="nav-item">
                                <a href="blog.html" class="nav-link">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="blog-post.html" class="nav-link">Blog Post</a>
                            </li>
                            <li class="nav-item">
                                <a href="submit.html" class="nav-link">Submit Ad</a>
                            </li>
                        </ul>
                        <!-- end 2nd level -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('blog') }}/">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact-us') }}/">Contact</a>
                    </li>
                    <li class="nav-item hidden-md-down">
                        <a href="{{ url('create') }}/" class="btn btn-success text-caps btn-rounded"><i class="sl sl-icon-plus"></i> Create</a>
                    </li>
                </ul>
                <!--Main navigation list-->
            </div>
            <!--end navbar-collapse-->
            @if(isset($hero_form) && $hero_form == 'closed')
            <a href="#collapseMainSearchForm" class="main-search-form-toggle" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseMainSearchForm">
                <i class="fa fa-search"></i> <span class="hidden-sm-down">Search</span>
                <i class="k-search-close" uk-icon="icon: close" style="margin-top: 1rem"></i>
            </a>
            <!--end main-search-form-toggle-->
            @endif
        </nav>
        <!--end navbar-->
        @if(isset($hero_form) && $hero_form == 'closed')
        <ol class="breadcrumb">
            @if(isset($breadcrumbs))
                @foreach($breadcrumbs as $breadcrumb)
                    @if(isset($breadcrumb['active']) && $breadcrumb['active'] == true)
                        <li class="breadcrumb-item active">{{ isset($breadcrumb['name']) ? $breadcrumb['name'] : '' }}</li>
                    @else
                        <li class="breadcrumb-item"><a href="{{ isset($breadcrumb['link']) ? $breadcrumb['link'] : '' }}">{{ isset($breadcrumb['icon']) ? "<i class='{$breadcrumb['icon']}'></i>" : '' }} {{  isset($breadcrumb['name']) ? $breadcrumb['name'] : '' }}</a></li>
                    @endif
                @endforeach
            @endif

        </ol>
        @endif
        <!--end breadcrumb-->
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                {{ session()->get('notice') }}
            </div>
        </div>
    </div>
    <!--end container-->
</div>
<!--============ End Main Navigation ================================================================-->
