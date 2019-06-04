<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\NewsRepository;
use App\Repositories\CategoryNewsRepository;
use App\Repositories\TourRepository;

class NewsViewController extends Controller
{
    protected $news;
    protected $catenews;

    public function __construct(NewsRepository $news, CategoryNewsRepository $catenews)
    {
        $this->news = $news;
        $this->catenews = $catenews;
    }

    public function index($slug)
    {
        $result = $this->catenews->cateNewsDetail($slug);
        $data_news = $this->news->listNewsCate($result->id);

        return view('frontend.news.index', compact('data_news', 'result'));
    }

    public function detailNews($slug)
    {
        $data = $this->news->newsDetail($slug);
        $list_news = $this->news->listLatestNews($slug);

        return view('frontend.news.detail', compact('data', 'list_news'));
    }
}
