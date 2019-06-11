<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tour;

class SearchController extends Controller
{
    public function find(Request $request) {
        $tour = Tour::where('name', 'like', '%' . $request->get('q') . '%')->get();

        return response()->json($tour);
    }
}
