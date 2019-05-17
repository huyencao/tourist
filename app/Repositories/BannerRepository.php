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

    public function findOrFail($id)
    {
        return Banner::findOrFail($id);
    }

    public function cateSelect()
    {
        return Banner::select('banners.id', 'banners.name', 'status', 'location', 'media_id', 'link_url' )->leftJoin('medias', 'banners.media_id', '=', 'medias.id' )->orderBy('banners.name', 'ASC')->get();
    }
}
