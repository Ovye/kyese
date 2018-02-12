<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->loadStyles(['public' => 'plugins/owl-carousel/assets/owl.carousel']);
        $this->loadScripts([
            'public' => [
                'plugins/owl-carousel/owl.carousel.min',
                'plugins/bootstrap-typehead/typeahead.bundle.min',
                'plugins/bootstrap-typehead/typeahead.jquery.min',
            ]
        ]);
        $this->assign['title'] = "Home";
        $this->assign['body'] = 'frontend.home.index';

        return view('wrapper', $this->assign);
    }
}
