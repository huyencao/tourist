<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tour;
use App\Models\TypeTour;
use App\Repositories\CategoryRepository;
use App\Repositories\TourRepository;
use App\Repositories\MediaRepository;
use App\Repositories\TypeTourRepository;
use App\Http\Requests\TourRequest;

class TourController extends Controller
{
    protected $tour;
    protected $image;
    protected $category;
    protected $typetour;

    public function __construct(TourRepository $tour, CategoryRepository $category, MediaRepository $image, TypeTourRepository $typetour)
    {
        $this->tour = $tour;
        $this->image = $image;
        $this->category = $category;
        $this->typetour = $typetour;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_tours = $this->tour->listTour();

        return view('backend.tour.index', compact('list_tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_cate = $this->category->listCate();

        return view('backend.tour.create', compact('data_cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TourRequest $request)
    {
        if ($request->hasFile('image')) {
            $image = $this->image->storeFileUpload($request);
        }

        $total = $request->baby_price + $request->child_price + $request->adult_price;
        if ($request->sale != 0) {
            $total_sale = $total - (($total * $request->sale) / config('app.total_sale'));
        } else {
            $total_sale = 0;
        }

        $data_tour = [
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'media_id' => $image->id,
            'cate_id' => $request->cate_id,
            'status' => $request->status,
            'type_hotel' => $request->type_hotel,
            'sale' => $request->sale,
            'schedule' => $request->schedule,
            'starting_point' => $request->starting_point,
            'destination' => $request->destination,
            'total' => $total,
            'total_sale' => $total_sale,
            'vehicle' => $request->vehicle,
        ];
        $tours = $this->tour->create($data_tour);
        $typetours = [
            'tour_id' => $tours->id,
            'baby_price' => $request->baby_price,
            'child_price' => $request->child_price,
            'adult_price' => $request->adult_price,
            'tour_code' => $request->tour_code,
            'start_day' => $request->start_day,
            'end_day' => $request->end_day,
            'time' => $request->time,
        ];
        $this->typetour->create($typetours);

        return redirect()->route('tour.index');
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
        $tour = $this->tour->findTourWithType($id);
        $data_cate = $this->category->listCate();

        return view('backend.tour.edit', compact('tour', 'data_cate'));
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
        $total = $request->baby_price + $request->child_price + $request->adult_price;
        if ($request->sale != 0) {
            $total_sale = $total - (($total * $request->sale) / 100);
        } else {
            $total_sale = 0;
        }
        $data_tour = [
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'media_id' => $request->media_id,
            'cate_id' => $request->cate_id,
            'status' => $request->status,
            'type_hotel' => $request->type_hotel,
            'sale' => $request->sale,
            'schedule' => $request->schedule,
            'starting_point' => $request->starting_point,
            'destination' => $request->destination,
            'total' => $total,
            'total_sale' => $total_sale,
            'vehicle' => $request->vehicle,
        ];
        $update_tour = $this->tour->update($id, $data_tour);
        $typetours = [
            'baby_price' => $request->baby_price,
            'child_price' => $request->child_price,
            'adult_price' => $request->adult_price,
            'tour_code' => $request->tour_code,
            'start_day' => $request->start_day,
            'end_day' => $request->end_day,
            'time' => $request->time,
        ];

        $typetour = TypeTour::where('tour_id', $update_tour->id)->update($typetours);
        if ($request->hasFile('image')) {
            $image = $this->image->updateFileUpload($update_tour->media_id, $request);
        }

        return redirect()->route('tour.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = $this->tour->findTour($id);
        if (file_exists($tour->media->link_url)) {
            unlink($tour->media->link_url);
        }
        $this->tour->delete($id);
        $this->image->delete($tour->media_id);

        return redirect()->route('tour.index');
    }
}
