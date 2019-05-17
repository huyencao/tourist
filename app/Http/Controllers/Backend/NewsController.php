<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\CategoryNews;
use App\Repositories\NewsRepository;
use App\Repositories\MediaRepository;
use App\Repositories\CategoryNewsRepository;
use App\Http\Requests\NewsRequest;

class NewsController extends Controller
{
    protected $news;
    protected $image;
    protected $category;

    public function __construct(NewsRepository $news, MediaRepository $image, CategoryNewsRepository $catenews)
    {
        $this->news = $news;
        $this->image = $image;
        $this->category = $catenews;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_news = $this->news->listNew();

       return view('backend.news.index', compact('list_news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_cate = $this->category->newsSelect();

        return view('backend.news.create', compact('data_cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        if ($request->hasFile('image')) {
            $image = $this->image->storeFileUpload($request);
        }
        $request->merge([
            'slug' => str_slug($request->name),
            'media_id' => $image->id,
        ]);
        $this->news->create($request->all());

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = $this->news->findNews($id);
        $data_cate = $this->category->newsSelect();

        return view('backend.news.edit', compact('news', 'data_cate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        $news = $this->news->update($id, $request->all());
        if ($request->hasFile('image')) {
            $image = $this->image->updateFileUpload($news->media_id, $request);
        }

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = $this->news->findNews($id);
        if (file_exists($news->media->link_url)) {
            unlink($news->media->link_url);
        }
        $this->news->delete($id);
        $this->image->delete($news->media_id);

        return redirect()->route('news.index');
    }
}
