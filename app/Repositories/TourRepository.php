<?php

namespace App\Repositories;

use App\Repositories\EloquentRepository;
use App\Models\Tour;
use App\Models\CategoryTour;
use App\Models\Media;

class TourRepository extends EloquentRepository
{
    public function model()
    {
        return \App\Models\Tour::class;
    }

    public function listTour()
    {
        $news = Tour::with('media', 'category')->orderBy('name', 'ASC');

        return $news;
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
}
