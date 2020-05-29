<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\News;
use App\Product;
use App\Tour;
use App\Type;
use Illuminate\Http\Request;
use App\Pages;



class LandingController extends Controller{
    public function getPageLanding($db_news=1, $db_hot=1, $db_popular=1) {
        $pages = new Pages('landing');
        $newses = new News();
        $tours = new Tour();
        return view('index', ['pages' => $pages, 'newses' => $newses->getNews($db_news),
            'hot_tours' => $tours->getHotTour($db_hot), 'popular_tours'=> $tours->getPopularTour($db_popular)]);
    }

    public function getPageTour($tour_id) {
        $pages = new Pages('tour');
        $tours = new Tour();
        return view('index', ['pages' => $pages, 'tours' => $tours->getById($tour_id)]);
    }

}
