<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->styles();
        $this->scripts();
        $this->assign['title'] = "Home";
        $this->assign['body'] = 'frontend.home.index';

        return view('wrapper', $this->assign);
    }

    public function styles()
    {
        return $this->loadStyles([
            'public' => [
                'plugins/switchery/css/switchery.min',
                'plugins/owl-carousel/assets/owl.carousel',
                'plugins/jquery-metrojs/MetroJs',
                'plugins/codrops-dialogFx/dialog',
                'plugins/codrops-dialogFx/dialog-sandra',
                'plugins/jquery-nouislider/jquery.nouislider'
            ]
        ]);
    }

    public function scripts()
    {
        return $this->loadScripts([
            'public' => [
                'plugins/owl-carousel/owl.carousel.min',
                'plugins/bootstrap-typehead/typeahead.bundle.min',
                'plugins/bootstrap-typehead/typeahead.jquery.min',
                'plugins/switchery/js/switchery.min',
                'plugins/jquery-metrojs/MetroJs.min',
                'plugins/imagesloaded/imagesloaded.pkgd.min',
                'plugins/jquery-isotope/isotope.pkgd.min',
                'plugins/codrops-dialogFx/dialogFx',
                'plugins/jquery-nouislider/jquery.nouislider',
                'plugins/jquery-nouislider/jquery.liblink',
                'js/gallery',
            ],
            'views' => ['frontend/home/script']
        ]);
    }
}
