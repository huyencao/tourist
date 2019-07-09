<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TourRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    protected $tour;
    protected $cate_tour;

    public function __construct(TourRepository $tour, CategoryRepository $categories)
    {
        $this->tour = $tour;
        $this->cate_tour = $categories;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Redis::exists('home')) {
            $data_sale = json_decode(Redis::get('home'), true);
    
            $statusRedis = 1;
        } else {
            $data_sale = $this->tour->listTourSale();
            Redis::set('home', json_encode($data_sale), 'EX', 100);
            $statusRedis = 0;
        }
        return view('frontend.home.main', compact('data_sale', 'statusRedis'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
