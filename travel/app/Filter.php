<?php


namespace App;


class Filter {
    private $filter_data;

    public function __construct($request) {
        $country = (array)($request->country);
        $city = (array)($request->city);
        $price = (array)($request->price);
        $duration = (array)($request->duration);
        $countries = Country::whereIn('name', array_values($country))->get();
        $cities = City::whereIn('name', array_values($city))->get();
        $this->filter_data = ['country' => $countries,
            'city' => $cities, 'price' => $price, 'duration' => $duration];
    }

    public function getFilterData() {
        return $this->filter_data;
    }

}
