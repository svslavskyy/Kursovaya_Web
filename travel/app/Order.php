<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Order extends Model {
    public $timestamps = false;
    public function uploadData(Request $request) {
        $this->name = $request->name;
        $this->phone = $request->phone;
        $this->email = $request->email;
        $this->tour_id = $request->tour_id;
        $this->save();
    }
}
