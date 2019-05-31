<?php

namespace App\Repositories;

use App\Repositories\EloquentRepository;
use App\Models\Tour;
use App\Models\Review;
use App\Models\User;

class ReviewRepository extends EloquentRepository
{
    public function model()
    {
        return \App\Models\Review::class;
    }

    public function listReview()
    {
        $reviews = Review::with('tour', 'user')->orderBy('name', 'ASC')->get();

        return $reviews;
    }

    public function findReview($id)
    {
        $data = Tour::with('tour', 'review')->find($id);
        if (empty($data)) {
            return false;
        } else {
            return $data;
        }
    }
}
