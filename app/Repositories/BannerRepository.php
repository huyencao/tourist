<?php

namespace App\Repositories;

use App\Repositories\EloquentRepository;
use App\Models\Banner;
use App\Models\Media;

class BannerRepository extends EloquentRepository
{
    public function model()
    {
        return \App\Models\Banner::class;
    }

    public function findBanner($id)
    {
        $data = Banner::find($id);
        if ($data == null) {
            return false;
        } else {
            return $data;
        }
    }

    public function cateSelect()
    {
        $banner = Banner::with('media')->orderBy('name', 'ASC')->get();

        return $banner;
    }
}
