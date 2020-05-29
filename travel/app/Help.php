<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Help extends Model {
    public $timestamps = false;
    public function uploadData(Request $request) {
        $this->name = $request->name;
        $this->phone = $request->phone;
        $this->save();
    }
}
