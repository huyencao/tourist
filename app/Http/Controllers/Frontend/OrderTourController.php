<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TourRepository;
use App\Repositories\OrderTourRepository;
use App\Http\Requests\OrderTourRequest;

class OrderTourController extends Controller
{
    protected $tour;
    protected $ordertour;

    public function __construct(TourRepository $tour, OrderTourRepository $ordertour)
    {
        $this->tour = $tour;
        $this->ordertour = $ordertour;
    }

    public function index($slug)
    {
        $data = $this->tour->tourDetail($slug) ;
        if ($data[0]['total_sale'] != 0) {
            $total = $data[0]['total_sale'];
        } else {
            $total = $data[0]['total'];
        }

        return view('frontend.ordertour.book', compact('data', 'total'));
    }

    public function store(OrderTourRequest $request, $slug)
    {
        $data = $this->tour->tourDetail($slug) ;

        $adult = $request->number_adult * $data[0]->typeTour->adult_price;
        $child = $request->number_child * $data[0]->typeTour->child_price;
        $baby = $request->number_baby * $data[0]->typeTour->baby_price;
        $total = $adult + $child + $baby;
        if ($data[0]->sale != 0 ) {
            $total_price = $total;
        } else {
            $total_price = $total - (($total * $data[0]->sale) / 100);
        }

        if ($request->method_payment == 1) {
            $payment_method = __('label.booktour.pay_office');
        } else {
            $payment_method = __('label.booktour.pay_card');
        }
        $request->merge([
            'tour_id' => $data[0]->id,
            'total_price' => $total_price,
            'payment_method' => $payment_method,
            'start_day' => $data[0]->typeTour->start_day,
        ]);
        $this->ordertour->create($request->all());

        return redirect()->route('homeTourist');
    }
}
