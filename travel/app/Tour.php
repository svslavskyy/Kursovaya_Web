<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Country;
use App\Option;

class Tour extends Model {
    public function cities() {
        return $this->belongsTo('App\City', 'city');
    }
    public function countries() {
        return $this->belongsTo('App\Country', 'country');
    }
    public function options() {
        return $this->belongsToMany('App\Option');
    }

    public function getById($tour_id) {
        return $this->where('id', '=', $tour_id)->get();
    }
    public function getHotTour($db_hot) {
        return $this->where('id','>=',  3*$db_hot-2)->where('hot','=',2)->take(3)->get();
    }
    public function getPopularTour($db_popular) {
        return $this->where('id','>=',  3*$db_popular-2)->where('hot','=',1)->take(3)->get();
    }
    public function getFilterTour($request) {
        return Tour::where( function ($query) use ($request) {
            foreach ($request['country'] as $country) {
                $query->orWhere('country', '=', $country->id);
            }
            foreach ($request['city'] as $city) {
                $query->orWhere('departure_city', '=', $city->id);
            }
            foreach ($request['price'] as $price) {
                $query->whereRaw("price $price");
            }
            foreach ($request['duration'] as $duration) {
                $query->whereRaw("end_date - begin_date = $duration");
            }
        })->get();
    }
}
