<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TourRepository;
use App\Repositories\CategoryRepository;

class TourViewController extends Controller
{
    protected $tour;
    protected $catetour;

    public function __construct(TourRepository $tour, CategoryRepository $catetour)
    {
        $this->tour = $tour;
        $this->catetour = $catetour;
    }

    public function index($slug)
    {
        $list_cate = $this->catetour->listCateCity($slug);
        $result = $this->catetour->cateDetail($slug);
        $data = $this->tour->listTourCate($result->id);

        return view('frontend.tour.index', compact('list_cate', 'result', 'data'));
    }

    public function detailTour($slug)
    {
        $data = $this->tour->tourDetail($slug);

        return view('frontend.tour.detail', compact('data'));
    }
}
