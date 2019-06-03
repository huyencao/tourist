@extends('backend.layouts.master')

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
        <form action="{{ route('catetour.update', $categories->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="panel-body">
                <div class="content-row">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label
                                            class="col-md-1 control-label">{{ __('label.cate_tour.create.title') }}</label>
                                        <div class="col-md-6">
                                            <input required type="text" placeholder="{{ __('label.enter_title') }}"
                                                id="name" class="form-control" name="name"
                                                value="{{ $categories['name'] }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.cate_tour.cate_parent') }}
                                        </label>
                                        <div class="col-md-3">

                                            <select required name="parent_id" class="selecter_1">
                                                <option value="0">{{ __('label.cate_tour.create.choose_parent') }}
                                                </option>
                                                @foreach ($parent_cate as $category)
                                                <option value="{{ $category->id }}" @if($categories->parent_id ==
                                                    $category->id) selected @endif>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.cate_tour.cities') }}
                                        </label>
                                        <div class="col-md-3">
                                            <select required name="city_id" class="selecter_1" name="cate">
                                                <option value="0">{{ __('label.cate_tour.create.choose_cities') }}
                                                </option>
                                                @foreach ($cities as $city)
                                                <option value="{{ $city->id}}" @if($categories->city_id == $city->id)
                                                    selected @endif>{{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label
                                            class="col-md-1 control-label">{{ __('label.cate_tour.create.status') }}</label>
                                        <div class="col-md-3">
                                            <select required name="status" class="selecter_1" name="cate">
                                                <option value="#">{{ __('label.cate_tour.status') }}</option>
                                                @if ($categories->status == 1)
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
</div><!-- content -->
@endsection
