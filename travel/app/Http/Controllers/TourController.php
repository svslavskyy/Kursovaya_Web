<?php


namespace App\Http\Controllers;

use App\Help;
use App\Order;
use App\Tour;
use Illuminate\Http\Request;
use App\Pages;



class TourController extends Controller {
    public function getPageTour($tour_id) {
        $pages = new Pages('tour');
        $tours = new Tour();
        return view('index', ['pages' => $pages, 'tours' => $tours->getById($tour_id)]);
    }

    public function postTour(Request $request) {
        $pages = new Pages('tour');
        $user = new Order;
        $user->uploadData($request);
        $tours = new Tour();
        return view('index', ['pages' => $pages, 'tours' => $tours->getById($request->tour_id)]);
    }
}
