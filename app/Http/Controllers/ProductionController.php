<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductionHouse;

class ProductionController extends Controller
{
    public function create()
    {
        return view('production/create');
    }

    public function add(Request $request)
    {
        $add = new ProductionHouse;
        $add->name = $request->name;
        $add->save();

        return redirect('/');
    }
}
