<?php

namespace App\Repositories;

use App\Repositories\EloquentRepository;
use App\Models\TypeTour;

class TypeTourRepository extends EloquentRepository
{
    public function model()
    {
        return \App\Models\TypeTour::class;
    }
}
