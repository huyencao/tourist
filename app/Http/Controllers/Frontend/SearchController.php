<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tour;

class SearchController extends Controller
{
    public function find(Request $request) {
        $price = $request->price;
        $pos = strpos($price, '-');
        $start_price = substr($price, 0, $pos);
        $end_price = substr($price, $pos + 1);
        $tour = Tour::query()->name($request)->departure($request)->destination($request)->get();

        return view('frontend.home.search', compact('tour'));
    }
}
