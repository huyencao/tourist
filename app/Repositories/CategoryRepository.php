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

    public function listCate()
    {
        $cate = Category::all();

        return $cate;
    }

    public function listCateCity($slug)
    {
        $cate = Category::where('city_id', '!=', 0)->where('slug', '!=', $slug)->orderBy('name', 'ASC')->get();

        return $cate;
    }

    public function cateDetail($slug)
    {
        $data = Category::where('slug', $slug)->first();

        return $data;
    }
}
