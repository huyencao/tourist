@extends('backend.layouts.master')

@section('title', __('label.tour'))

@section('content')
@if (count($errors) > 0)
<div class="alert alert-danger">
    @foreach ($errors->all() as $err)
    {{ $err }}<br>
    @endforeach
</div>
@endif
@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif
<div class="col-xs-12 col-sm-9 content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span
                                class="fa fa-angle-double-left" data-toggle="offcanvas"
                                title="{{ __('Maximize Panel') }}"></span></a>{{ __('label.add') }}</h3>
                </div>
            </div>
        </div>
        <form action="{{ route('tour.update', $tour->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="panel-body">
                <div class="content-row">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class=" col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.name') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="{{ __('label.enter_title') }}" id="name"
                                                class="form-control" name="name" value="{{ $tour->name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.cate_tour.cate_parent') }}
                                        </label>
                                        <div class="col-md-3">
                                            <select name="cate_id" class="selecter_1">
                                                <option value="#">{{ __('label.cate_tour.create.choose_parent') }}
                                                </option>
                                                @foreach ($data_cate as $cate)
                                                <option value="{{ $cate->id }}" @if ($tour->cate_id == $cate->id)
                                                    selected @endif>{{ $cate->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.status') }}</label>
                                        <div class="col-md-3">
                                            <select name="status" class="selecter_1">
                                                <option value="#">{{ __('label.choose_status') }}</option>
                                                @if ($tour->status == 1)
                                                <option value="1" selected>{{ __('label.status_open') }}</option>
                                                <option value="0">{{ __('label.status_close') }}</option>
                                                @else
                                                <option value="1">{{ __('label.status_open') }}</option>
                                                <option value="0" selected>{{ __('label.status_close') }}</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.typehotel') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="{{ __('label.enter_hotel') }}" id="title"
                                                class="form-control" name="type_hotel" value="{{ $tour->type_hotel }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.starting_point') }}</label>
                                        <div class="col-md-6">
                                            <input class="form-control"
                                                placeholder="{{ __('label.enter_startingpoint') }}" rows="5" cols="30"
                                                id="starting_point" name="starting_point"
                                                value="{{ $tour->starting_point }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.destination') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" id="destination"
                                                placeholder="{{ __('label.enter_destination') }}" class="form-control"
                                                name="destination" value="{{ $tour->destination }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.schedule') }}</label>
                                        <div class="col-md-6">
                                            <textarea rows="10" cols="80" class="form-control"
                                                name="schedule" id="editor1" value="{{ $tour->schedule }}">{{ $tour->schedule }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.vehicle') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" id="vehicle" class="form-control" name="vehicle" value="{{ $tour->vehicle }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.sale') }}</label>
                                        <div class="col-md-6">
                                            <input type="int" id="sale" placeholder="{{ __('label.enter_sale') }}"
                                                class="form-control" name="sale" value="{{ $tour->sale }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.baby_price') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" name="baby_price" id="baby_price" class="form-control"
                                                placeholder="{{ __('label.enter_baby') }}"
                                                value="{{ $tour->typeTour->baby_price }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.child_price') }}</label>
                                        <div class="col-md-6">
                                            <input type="tel" name="child_price" id="child_price" class="form-control"
                                                placeholder="{{ __('label.enter_child') }}"
                                                value="{{ $tour->typeTour->child_price }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.adult_price') }}</label>
                                        <div class="col-md-6">
                                            <input type="tel" name="adult_price" id="adult_price" class="form-control"
                                                placeholder="{{ __('label.enter_adult') }}"
                                                value="{{ $tour->typeTour->adult_price }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.tour_code') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" name="tour_code" id="tour_code" class="form-control"
                                                placeholder="{{ __('label.enter_tourcode') }}"
                                                value="{{ $tour->typeTour->tour_code }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('Time') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" name="time" id="time" class="form-control" value="{{ $tour->typeTour->time }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.start_day') }}</label>
                                        <div class="col-md-6">
                                            <input type="date" name="start_day" id="start_day" class="form-control"
                                                value="{{ date('Y-m-d', strtotime($tour->typeTour->start_day)) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.end_day') }}</label>
                                        <div class="col-md-6">
                                            <input type="date" name="end_day" id="end_day" class="form-control"
                                                value="{{ date('Y-m-d', strtotime($tour->typeTour->end_day)) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.image') }}</label>
                                        <div class="col-md-4">
                                            <div class="thumbnail">
                                                @if (!empty($tour->media->link_url))
                                                <img class="img-rounded" id="preview"
                                                    src="{{ asset($tour->media->link_url) }}" class="image">
                                                @else
                                                <img class="img-rounded" id="preview"
                                                    src="{{ asset(config('app.image_url') . 'no-image.png') }}"
                                                    class="image">
                                                @endif
                                                <div class="caption text-center">
                                                    <div class="form-group">
                                                        <input type="file" id="image" name="image"
                                                            onchange="encodeImageFileAsURL(this)">
                                                        <input type="hidden" id="media_id" name="media_id"
                                                            value="{{ $tour->media_id }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="{{ __('label.save') }}" name="save"
                                            class="btn btn-success">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- panel body -->
    </div>
</div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('assets/js/index.js') }}"></script>
@endpush
