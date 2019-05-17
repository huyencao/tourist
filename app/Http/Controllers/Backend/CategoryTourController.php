<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Models\City;
use App\Repositories\CategoryRepository;

class CategoryTourController extends Controller
{

    public function __construct(CategoryRepository $categories)
    {
        $this->category = $categories;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::all();

        return view('backend.categorytour.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_cate = Category::where('parent_id', 0)->get();
        $cities = City::orderBy('name', 'ASC')->get();

        return view('backend.categorytour.create', compact('data_cate', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $request->merge([
            'slug' => str_slug($request->name),
        ]);
        $categories = $this->category->create($request->all());

        return redirect()->route('catetour.index');
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
            $categories = $this->category->find($id);
            $parent_cate = Category::where('parent_id', 0)->get();
            $cities = City::orderBy('id', 'ASC')->get();

            return view('backend.categorytour.edit', compact('categories', 'cities', 'parent_cate'
            ));
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
    public function update(StoreCategoryRequest $request, $id)
    {
        try {
            $categories = $this->category->update($id, $request->all());

            return redirect(route('catetour.index'));
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
            $category_item = $this->category->delete($id);

            return redirect(route('catetour.index'));
        } catch (ModelNotFoundException $ex) {
            return $ex->getMessage();
        }
    }
}
