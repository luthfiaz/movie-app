<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductionHouse;

class Movie extends Model
{
    protected $table = 'movie_db';

    public function productionHouse()
    {
        return $this->hasOne('App\ProductionHouse', 'id', 'productionHouseId');
    }
}
