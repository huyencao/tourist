<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CategoryNews;
use App\Repositories\CategoryNewsRepository;
use App\Http\Requests\StoreCategoryNewsRequest;

class CategoryNewsController extends Controller
{
    protected $category;

    public function __construct(CategoryNewsRepository $categorynews)
    {
        $this->category = $categorynews;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->category->newsSelect();

        return view('backend.categorynews.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_cate = CategoryNews::parent()->get();

        return view('backend.categorynews.create', compact('data_cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryNewsRequest $request)
    {
        $request->merge([
            'slug' => str_slug($request->name),
        ]);
        $categorynews = $this->category->create($request->all());

        return redirect()->route('catenews.index');
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
        try {
            $categorynews = $this->category->findCate($id);
            $parent_cate = CategoryNews::parent()->get();

            return view('backend.categorynews.edit', compact('categorynews', 'parent_cate'));
        } catch (ModelNotFoundException $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoryNewsRequest $request, $id)
    {
        try {
            $categorynews = $this->category->update($id, $request->all());

            return redirect(route('catenews.index'));
        } catch (ModelNotFoundException $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->category->delete($id);

            return redirect(route('catenews.index'));
        } catch (ModelNotFoundException $ex) {
            return $ex->getMessage();
        }
    }
}
