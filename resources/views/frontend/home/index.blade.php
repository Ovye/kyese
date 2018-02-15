<div class="content">
    <div class="full-width home-banner">
        <div class="container container-fixed-lg">
            <div class="row justify-content-center m-b-20">
                <div class="col-lg-6 text-center">
                    <h1 class="banner-title">Create or find all you want</h1>
                    <p class="banner-sub-title">Over 1,000 creations are available for free.</p>
                </div>
            </div>
            <form action="" id="homeSearchForm" role="form" class="form">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group form-group-default">
                            <label for="">What</label>
                            <div class="controls">
                                <input type="text" name="what" class="form-control" placeholder="are you looking for?">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group form-group-default ky-typeahead">
                            <label for="">Where</label>
                            <div class="controls">
                                <input type="text" name="where" class="form-control ky-typeahead-locations" placeholder="is the location?">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group form-group-default form-group-default-select2">
                            <label class="" for="category">Which</label>
                            <select class="full-width" name="category" id="category" data-placeholder="category?" data-init-plugin="select2">
                                <option value="" style="font-size: 14px;"> category?</option>
                                <optgroup label="Jobs">
                                    <option value="CA">Part time</option>
                                    <option value="NV">Full time</option>
                                    <option value="OR">Internship</option>
                                    <option value="WA">Contract</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block home-search-btn">Search</button>
                        </div>
                    </div>
                </div>
                <!--Alternative Form-->
                <div class="alternative-search-form">
                    <a href="#collapseAlternativeSearchForm" class="icon" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseAlternativeSearchForm"><i class="sl sl-icon-plus small"></i> More Options</a>
                    <div class="collapse" id="collapseAlternativeSearchForm">
                        <div class="wrapper">
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 d-xs-grid m-xs-20 d-flex align-items-center justify-content-between">
                            <span class="checkbox check-danger checkbox-circle" style="margin-top: -5px">
                                <input type="checkbox" value="new" id="new">
                                <label for="new">New</label>
                            </span>
                                    <span class="checkbox check-danger checkbox-circle">
                                <input type="checkbox" value="used" id="used">
                                <label for="used">Used</label>
                            </span>
                                    <span class="checkbox check-danger checkbox-circle">
                                <input type="checkbox" value="with_photo" id="with-photo">
                                <label for="with-photo" style="font-size: 14px"><span class="hidden-xs">With</span> Photo</label>
                            </span>
                                    <span class="checkbox check-danger checkbox-circle">
                                <input type="checkbox" value="featured" id="featured">
                                <label for="featured">Featured</label>
                            </span>
                                </div>
                                <!--end col-xl-6-->
                                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-row">
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="form-group input-group">
                                                <input name="min_price" type="text" class="form-control" id="min-price" placeholder="Minimum Price">
                                                <span class="input-group-addon small">₦</span>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-4-->
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="form-group input-group">
                                                <input name="max_price" type="text" class="form-control" id="max-price" placeholder="Maximal Price">
                                                <span class="input-group-addon small">₦</span>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-4-->
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                                <select title="distance" name="distance" id="distance" class="full-width" data-placeholder="Distance" data-init-plugin="select2">
                                                    <option value="">Distance</option>
                                                    <option value="1">1km</option>
                                                    <option value="2">5km</option>
                                                    <option value="3">10km</option>
                                                    <option value="4">50km</option>
                                                    <option value="5">100km</option>
                                                </select>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-3-->
                                    </div>
                                    <!--end form-row-->
                                </div>
                                <!--end col-xl-6-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end wrapper-->
                    </div>
                    <!--end collapse-->
                </div>
                <!--end alternative-search-form-->
            </form>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xs-9 col-sm-11 ky-home-categories">
                <div class="">
                    <div class="row justify-content-center">
                        <div class="ky-owl-carousel p-r-20 p-l-20">
                            <div class="item">
                                <a href="" class="ky-home-category-item">
                                    <span class="ky-home-category-counter">333</span>
                                    <div class="ky-home-category-icon">
                                        <i class="flaticon-map-location"></i>
                                    </div>
                                    <h4 class="ky-home-category-title">Places</h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="" class="ky-home-category-item">
                                    <div class="ky-home-category-icon">
                                        <i class="flaticon-briefcase"></i>
                                    </div>
                                    <h4 class="ky-home-category-title">Jobs</h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="" class="ky-home-category-item">
                                    <div class="ky-home-category-icon">
                                        <i class="flaticon-users"></i>
                                    </div>
                                    <h4 class="ky-home-category-title">Profiles</h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="" class="ky-home-category-item">
                                    <div class="ky-home-category-icon">
                                        <i class="flaticon-folder-3"></i>
                                    </div>
                                    <h4 class="ky-home-category-title">Organizations</h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="" class="ky-home-category-item">
                                    <div class="ky-home-category-icon">
                                        <i class="flaticon-house"></i>
                                    </div>
                                    <h4 class="ky-home-category-title">Stores</h4>
                                </a>
                            </div>

                            <div class="item">
                                <a href="" class="ky-home-category-item">
                                    <div class="ky-home-category-icon">
                                        <i class="flaticon-calendar"></i>
                                    </div>
                                    <h4 class="ky-home-category-title">Events</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ky-items-headings">
                    <h2 class="ky-items-heading">Popular creations</h2>
                    <h4 class="ky-items-sub-heading">Explore a collections of our popular creations.</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center ky-items">
            <div class="ky-items-owl-carousel">
                <div class="item">
                    <div class="ky-item">
                        <div class="ky-item-img-wrapper">
                            <a href="" class="ky-item-img" style="background-image: url({{ asset('assets/img/gallery/5.jpg') }})"></a>
                        </div>
                        <div class="ky-item-label">
                            <a href="">

                            </a>
                        </div>
                        <div class="ky-item-meta">
                            <div class="ky-item-meta-cats">
                                <a href="">Premium</a> .
                                <a href="">Computer</a>
                            </div>
                            <a href="">
                                <h3 class="ky-item-meta-title">Valuebeam LTD new special robot for kids</h3>
                            </a>
                        </div>
                        <div class="ky-item-user-contents">
                            <a href="">
                                <div class="ky-item-user" data-toggle="tooltip" data-original-title="Verified" data-placement="bottom">
                                    <div class="ky-item-user-img">
                                        <img src="{{ asset('assets/img/profiles/3x.jpg') }}" alt="user img">
                                    </div>
                                    <div class="ky-item-user-meta">
                                        <span class="name">Josiah Ovye Yahaya</span>
                                        <span class="location"><i class="fa fa-map-marker"></i> Makurdi</span>
                                    </div>
                                    <div class="ky-item-user-verified-badge">
                                        <img src="{{ asset('assets/img/icons/verified_badge.png') }}" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{--item ends--}}
                <div class="item">
                    <div class="ky-item">
                        <div class="ky-item-img-wrapper">
                            <a href="" class="ky-item-img" style="background-image: url({{ asset('assets/img/items/image13.jpg') }})"></a>
                        </div>
                        <div class="ky-item-price">
                            <div class="price">₦200, 000</div>
                        </div>
                        <div class="ky-item-label">
                            <a href="">

                            </a>
                        </div>
                        <div class="ky-item-meta">
                            <div class="ky-item-meta-cats">
                                <a href="">Premium</a> .
                                <a href="">Computer</a>
                            </div>
                            <a href="">
                                <h3 class="ky-item-meta-title">Valuebeam LTD new special robot for kids</h3>
                            </a>
                        </div>
                        <div class="ky-item-user-contents">
                            <a href="">
                                <div class="ky-item-user">
                                    <div class="ky-item-user-img">
                                        <img src="{{ asset('assets/img/profiles/4x.jpg') }}" alt="user img">
                                    </div>
                                    <div class="ky-item-user-meta">
                                        <span class="name">Josiah Ovye Yahaya</span>
                                        <span class="location"><i class="fa fa-map-marker"></i> Makurdi</span>
                                    </div>
                                    <div class="ky-item-user-verified-badge">
                                        <img src="{{ asset('assets/img/icons/verified_badge.png') }}" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{--End item--}}
                <div class="item">
                    <div class="ky-item">
                        <div class="ky-item-img-wrapper">
                            <a href="" class="ky-item-img" style="background-image: url({{ asset('assets/img/items/image12.jpg') }})"></a>
                        </div>
                        <div class="ky-item-price">
                            <div class="price">₦2,000</div>
                        </div>
                        <div class="ky-item-label">
                            <a href="">

                            </a>
                        </div>
                        <div class="ky-item-meta">
                            <div class="ky-item-meta-cats">
                                <a href="">Premium</a> .
                                <a href="">Computer</a>
                            </div>
                            <a href="">
                                <h3 class="ky-item-meta-title">Valuebeam LTD new special robot for kids</h3>
                            </a>
                        </div>
                        <div class="ky-item-user-contents">
                            <a href="">
                                <div class="ky-item-user">
                                    <div class="ky-item-user-img">
                                        <img src="{{ asset('assets/img/profiles/4x.jpg') }}" alt="user img">
                                    </div>
                                    <div class="ky-item-user-meta">
                                        <span class="name">Josiah Ovye Yahaya</span>
                                        <span class="location"><i class="fa fa-map-marker"></i> Makurdi</span>
                                    </div>
                                    <div class="ky-item-user-verified-badge">
                                        <img src="{{ asset('assets/img/icons/verified_badge.png') }}" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{--Ends item--}}
                <div class="item">
                    <div class="ky-item">
                        <div class="ky-item-img-wrapper">
                            <a href="" class="ky-item-img" style="background-image: url({{ asset('assets/img/items/image14.jpg') }})"></a>
                        </div>
                        <div class="ky-item-price with-sub-price">
                            <div class="price">₦2k</div>
                            <span class="small sub-price">per person</span>
                        </div>
                        <div class="ky-item-label">
                            <a href="">

                            </a>
                        </div>
                        <div class="ky-item-meta">
                            <div class="ky-item-meta-cats">
                                <a href="">Premium</a> .
                                <a href="">Computer</a>
                            </div>
                            <a href="">
                                <h3 class="ky-item-meta-title">Valuebeam LTD new special robot for kids</h3>
                            </a>
                        </div>
                        <div class="ky-item-user-contents">
                            <a href="">
                                <div class="ky-item-user">
                                    <div class="ky-item-user-img">
                                        <img src="{{ asset('assets/img/profiles/4x.jpg') }}" alt="user img">
                                    </div>
                                    <div class="ky-item-user-meta">
                                        <span class="name">Josiah Ovye Yahaya</span>
                                        <span class="location"><i class="fa fa-map-marker"></i> Makurdi</span>
                                    </div>
                                    <div class="ky-item-user-verified-badge">
                                        <img src="{{ asset('assets/img/icons/verified_badge.png') }}" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 ky-items-show-all">
                <a href="">Show all (200+) <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ky-items-headings">
                    <h2 class="ky-items-heading">Top rated creations</h2>
                    <h4 class="ky-items-sub-heading">Collections of top rated creations</h4>
                </div>
            </div>
        </div>
        <div class="row ky-items">
            <div class="ky-items-owl-carousel">
                <div class="item">
                    <div class="ky-item">
                        <div class="ky-item-img-wrapper">
                            <a href="" class="ky-item-img" style="background-image: url({{ asset('assets/img/items/image14.jpg') }})"></a>
                        </div>
                        <div class="ky-item-price">
                            <div class="price">₦200B</div>
                        </div>
                        <div class="ky-item-label">
                            <a href="">

                            </a>
                        </div>
                        <div class="ky-item-meta">
                            <div class="ky-item-meta-cats">
                                <a href="">Premium</a> .
                                <a href="">Computer</a>
                            </div>
                            <a href="">
                                <h3 class="ky-item-meta-title">Valuebeam LTD new special robot for kids</h3>
                            </a>
                        </div>
                        <div class="ky-item-user-contents">
                            <a href="">
                                <div class="ky-item-user">
                                    <div class="ky-item-user-img">
                                        <img src="{{ asset('assets/img/profiles/4x.jpg') }}" alt="user img">
                                    </div>
                                    <div class="ky-item-user-meta">
                                        <span class="name">Josiah Ovye Yahaya</span>
                                        <span class="location"><i class="fa fa-map-marker"></i> Makurdi</span>
                                    </div>
                                    <div class="ky-item-user-verified-badge">
                                        <img src="{{ asset('assets/img/icons/verified_badge.png') }}" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Locations --}}


