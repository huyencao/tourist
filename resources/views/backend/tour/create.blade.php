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
        <form action="{{ route('tour.store') }}"  enctype="multipart/form-data" method="POST">
            @csrf
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
                                                class="form-control" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.cate_tour.cate_parent') }}
                                        </label>
                                        <div class="col-md-3">
                                            <select name="cate_id" class="selecter_1">
                                                <option value="#">{{ __('label.cate_tour.create.choose_parent') }}</option>
                                                @foreach ($data_cate as $cate)
                                                    <option value="{{ $cate->id }}">{{ $cate->name }}</option>
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
                                                <option value="1">{{ __('label.status_open') }}</option>
                                                <option value="0">{{ __('label.status_close') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.typehotel') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="{{ __('label.enter_hotel') }}" id="title"
                                                class="form-control" name="type_hotel">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.starting_point') }}</label>
                                        <div class="col-md-6">
                                            <input class="form-control"
                                                placeholder="{{ __('label.enter_startingpoint') }}" rows="5" cols="30"
                                                id="starting_point" name="starting_point">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.destination') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" id="destination" placeholder="{{ __('label.enter_destination') }}" class="form-control"
                                                name="destination">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.schedule') }}</label>
                                        <div class="col-md-6">
                                            <textarea id="editor1" rows="10" cols="80" class="form-control" name="schedule"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.vehicle') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" id="vehicle" placeholder="{{ __('label.enter_vehicle') }}"
                                                class="form-control" name="vehicle">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.sale') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" id="sale" placeholder="{{ __('label.enter_sale') }}"
                                                class="form-control" name="sale">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.baby_price') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" name="baby_price" id="baby_price" class="form-control"
                                                placeholder="{{ __('label.enter_baby') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.child_price') }}</label>
                                        <div class="col-md-6">
                                            <input type="tel" name="child_price" id="child_price" class="form-control"
                                                placeholder="{{ __('label.enter_child') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.adult_price') }}</label>
                                        <div class="col-md-6">
                                            <input type="tel" name="adult_price" id="adult_price" class="form-control"
                                                placeholder="{{ __('label.enter_adult') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.tour_code') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" name="tour_code" id="tour_code" class="form-control"
                                                placeholder="{{ __('label.enter_tourcode') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('Time') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" name="time" id="time" class="form-control" placeholder="{{ __('label.enter_time') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.start_day') }}</label>
                                        <div class="col-md-6">
                                            <input type="date" name="start_day" id="start_day" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.end_day') }}</label>
                                        <div class="col-md-6">
                                            <input type="date" name="end_day" id="end_day" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.image') }}</label>
                                        <div class="col-md-4">
                                            <div class="thumbnail">
                                                <img class="img-rounded" id="preview"
                                                    src="{{ asset(config('app.image_url') . 'no-image.png') }}"
                                                    class="image">
                                                <div class="caption text-center">
                                                    <div class="form-group">
                                                        <input type="file" id="image" name="image"
                                                            onchange="encodeImageFileAsURL(this)">
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
    </div>
</div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('assets/js/index.js') }}"></script>
@endpush
