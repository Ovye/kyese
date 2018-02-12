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
                                    <div class="ky-home-category-img">
                                        <img src="{{ asset('assets/img/categories/jobs.png') }}" alt="image">
                                    </div>
                                    <h4 class="ky-home-category-title">Jobs</h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="" class="ky-home-category-item">
                                    <div class="ky-home-category-img">
                                        <img src="{{ asset('assets/img/categories/jobs.png') }}" alt="image">
                                    </div>
                                    <h4 class="ky-home-category-title">Jobs</h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="" class="ky-home-category-item">
                                    <div class="ky-home-category-img">
                                        <img src="{{ asset('assets/img/categories/jobs.png') }}" alt="image">
                                    </div>
                                    <h4 class="ky-home-category-title">Jobs</h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="" class="ky-home-category-item">
                                    <div class="ky-home-category-img">
                                        <img src="{{ asset('assets/img/categories/jobs.png') }}" alt="image">
                                    </div>
                                    <h4 class="ky-home-category-title">Jobs</h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="" class="ky-home-category-item">
                                    <div class="ky-home-category-img">
                                        <img src="{{ asset('assets/img/categories/jobs.png') }}" alt="image">
                                    </div>
                                    <h4 class="ky-home-category-title">Jobs</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@section('scripts')
    <script>
        var locations = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            local:  ['Makurdi', 'Gboko', 'Lafia', 'Otukpo', 'Oju',
                'Kastina-ala', 'Kwande', 'Guma', 'Wannune', 'Yandev', 'Asukunya']
        });

        $('.ky-typeahead-locations').typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            },
            {
            name: 'locations',
            source: locations
        });

        $('.ky-owl-carousel').owlCarousel({
            loop:true,
            margin:15,
            nav:true,
            navRewind:true,
            navText: ['<i class="sl sl-icon-arrow-left ky-carousel-nav-icon"></i>', '<i class="sl sl-icon-arrow-right ky-carousel-nav-icon"></i>'],
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:3
                },
                700:{
                    items:4
                },
                1000:{
                    items:5
                }
            }
        });

    </script>

@endsection
