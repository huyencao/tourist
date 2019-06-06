<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Repositories\MenuRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\CategoryNewsRepository;
use App\Models\Menu;

class MenuController extends Controller
{
    protected $menu;
    protected $cate_tour;
    protected $cate_news;

    public function __construct(MenuRepository $menu, CategoryRepository $cate_tour, CategoryNewsRepository $cate_news)
    {
        $this->menu = $menu;
        $this->cate_tour = $cate_tour;
        $this->cate_news = $cate_news;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_menu = $this->menu->listMenu();

        return view('backend.menu.index', compact('list_menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate_tour = $this->cate_tour->listCate();
        $cate_news = $this->cate_news->newsSelect();
        $list_menus = $this->menu->listMenu();

        return view('backend.menu.create', compact('cate_tour', 'cate_news', 'list_menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        $cate_tour_id = $request->cate_tour_id;
        $cate_new_id = $request->cate_new_id;
        $cate_id = is_null($cate_new_id) ? $cate_tour_id : $cate_new_id;
        $request->merge([
            'slug' => str_slug($request->name),
            'cate_id' => $cate_id,
        ]);
        $this->menu->create($request->all());

        return redirect()->route('menu.index');
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
        $menu = $this->menu->findMenu($id);
        $cate_tour = $this->cate_tour->listCate();
        $cate_news = $this->cate_news->newsSelect();
        $list_menus = $this->menu->listMenu();

        return view('backend.menu.edit', compact('menu', 'cate_tour', 'cate_news', 'list_menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, $id)
    {
        $cate_tour_id = $request->cate_tour_id;
        $cate_new_id = $request->cate_new_id;
        $cate_id = is_null($cate_new_id) ? $cate_tour_id : $cate_new_id;
        $request->merge([
            'slug' => str_slug($request->name),
            'cate_id' => $cate_id,
        ]);
        $menu = $this->menu->update($id, $request->all());

        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
