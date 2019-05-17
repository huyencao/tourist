<?php

namespace App\Repositories;

use App\Repositories\EloquentRepository;
use App\Models\CategoryNews;

class CategoryNewsRepository extends EloquentRepository
{
    public function model()
    {
        return \App\Models\CategoryNews::class;
    }

    public function findCate($id)
    {
        $data = CategoryNews::find($id);
        if ($data == null) {
            return false;
        } else {
            return $data;
        }
    }

    public function newsSelect()
    {
        return CategoryNews::orderBy('name', 'DESC')->get();
    }
}
