<?php

namespace App\Repositories;

use App\Repositories\EloquentRepository;
use App\Models\News;
use App\Models\CategoryNews;
use App\Models\Medias;

class NewsRepository extends EloquentRepository
{
    public function model()
    {
        return \App\Models\News::class;
    }

    public function listNew()
    {
        $news = News::orderBy('name', 'ASC')->get();

        return $news;
    }

    public function findNews($id)
    {
        $data = News::find($id);
        if (empty($data)) {
            return false;
        } else {
            return $data;
        }
    }
}
