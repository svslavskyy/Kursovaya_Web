<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\News;
use App\Product;
use App\Tour;
use App\Type;
use Illuminate\Http\Request;
use App\Pages;



class AboutController extends Controller {
    public function getPageAbout() {
        $pages = new Pages('about');
        return view('index', ['pages' => $pages]);
    }

}
