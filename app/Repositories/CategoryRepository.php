<?php

namespace App\Repositories;

use App\Repositories\EloquentRepository;
use App\Models\Category;

class CategoryRepository extends EloquentRepository
{
    public function model()
    {
        return \App\Models\Category::class;
    }
}
