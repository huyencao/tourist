<?php

namespace App\Repositories;

use App\Repositories\EloquentRepository;
use App\Models\User;
use App\Models\Tour;
use App\Models\OrderTour;

class OrderTourRepository extends EloquentRepository
{
    public function model()
    {
        return \App\Models\OrderTour::class;
    }

    public function listOrderTour()
    {
        $data = OrderTour::with('tour')->paginate(config('app.ordertour'));

        return $data;
    }
}
