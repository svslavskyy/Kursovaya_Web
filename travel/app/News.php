<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model {
    public function getNews($db_news) {
        return $this->where('id','>=',  3*$db_news-2)->take(3)->get();
    }
}
