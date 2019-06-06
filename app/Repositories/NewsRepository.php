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

    public function listNewsCate($id)
    {
        $data = News::with('media', 'categoryNews')->where('cate_id', $id)->paginate(config('app.news'));

        return $data;
    }

    public function newsDetail($slug)
    {
        $data = News::with('media', 'categoryNews')->where('slug', $slug)->get();

        return $data;
    }

    public function listLatestNews($slug)
    {
        $news = News::where('slug', '!=', $slug)->orderBy('id', 'DESC')->limit()->get(config('app.limit_news'));

        return $news;
    }

}
