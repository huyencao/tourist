<?php

namespace App\Repositories;

use App\Repositories\EloquentRepository;
use App\Models\Tour;
use App\Models\CategoryTour;
use App\Models\Media;
use App\Models\TypeTour;

class TourRepository extends EloquentRepository
{
    public function model()
    {
        return \App\Models\Tour::class;
    }

    public function listTour()
    {
        $tour = Tour::with('media', 'category')->orderBy('name', 'ASC')->paginate(config('app.tour'));

        return $tour;
    }

    public function findTour($id)
    {
        $data = Tour::find($id);
        if (empty($data)) {
            return false;
        } else {
            return $data;
        }
    }

    public function findTourWithType($id)
    {
        $data = Tour::with('typeTour')->find($id);
        if (empty($data)) {
            return false;
        } else {
            return $data;
        }
    }

    public function listTourSale()
    {
        $data =  Tour::with('media', 'typeTour', 'category')->where('sale', '!=', 0)->limit(config('app.home_view'))->get();

        return $data;
    }

    public function tourDetail($slug)
    {
        $data = Tour::with('media', 'category', 'typeTour')->where('slug', $slug)->get();

        return $data;
    }

    public function listTourCate($id)
    {
        $data = Tour::with('media', 'category', 'typeTour')->where('cate_id', $id)->get();

        return $data;
    }
}
