<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Movie;
use App\ProductionHouse;

class MovieController extends Controller
{
    public function index()
    {
        $data = DB::table('movie_db')
            ->select('movie_db.*', 'production_house_db.name as prodHouse')
            ->leftJoin('production_house_db', 'movie_db.productionHouseId', '=', 'production_house_db.id')
            ->get();
        
        return view('index', compact('data'));
    }

    public function create()
    {
        $options = ProductionHouse::all();

        return view('create', compact('options'));
    }

    public function add(Request $request)
    {
        $add = new Movie;

        $add->movie = $request->name;
        $add->genre = $request->genre;
        $add->productionHouseId = $request->prod;

        $add->save();

        return redirect('/');
    }
}
