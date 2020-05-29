<?php


namespace App\Http\Controllers;


use App\Filter;
use App\Help;
use App\Http\Controllers\Controller;
use App\Option;
use App\Tour;
use App\Type;
use Illuminate\Http\Request;
use App\Pages;


class SearchController extends Controller {
    public function getPagesSome(Request $request) {
        $page = new Pages('searching');
        $filter = new Filter($request);
        $tours = new Tour();
        $filter_data = $filter->getFilterData();
        return view('index', ['pages' => $page, 'filter' => $filter_data,
            'tours' => $tours->getFilterTour($filter_data)
        ]);
    }

    public function postQuestion(Request $request) {
        $pages = new Pages('searching');
        $user = new Help;
        $user->uploadData($request);
        return view('index', ['pages' => $pages]);
    }
}
