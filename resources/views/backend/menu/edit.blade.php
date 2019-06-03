@extends('backend.layouts.master')

@section('title', __('label.menu'))

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
                    <h3 class="panel-title">
                        <a href="javascript:void(0);" class="toggle-sidebar">
                            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="{{ __('Maximize Panel') }}"></span>
                        </a>{{ __('label.add') }}
                    </h3>
                </div>
            </div>
        </div>
        <form action="{{ route('menu.update', $menu->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <div class="form-group menu">
                    <label class="col-md-1 control-label">{{ __('label.name') }}</label>
                    <div class="col-md-6">
                        <input type="text" placeholder="{{ __('label.enter_title') }}" id="name" class="form-control"
                            name="name" value="{{ $menu['name'] }}">
                    </div>
                </div>
                <div class="form-group menu">
                    <label class="col-md-1 control-label">{{ __('label.menu_parent') }}</label>
                    <div class="col-md-6">
                        <select name="parent_id" class="selecter_1">
                            <option value="0">{{ __('label.choose_menu') }}</option>
                            @foreach ($list_menus as $value)
                            <option value="{{ $value['id'] }}" @if ($value['id'] == $menu['parent_id']) selected @endif>
                                {{ $value['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group menu">
                    <label class="col-md-1 control-label">{{ __('label.type_menu') }}</label>
                    <div class="col-md-6">
                        <select name="type_menu" class="selecter_1 type_menu">
                            <option value="">{{ __('label.choose_menu') }}</option>
                            @if ($menu['type_menu'] == 1)
                            <option value="1" selected>{{ __('label.categorytour') }}</option>
                            <option value="2">{{ __('label.cate_news') }}</option>
                            @else
                            <option value="1">{{ __('label.categorytour') }}</option>
                            <option value="2" selected>{{ __('label.cate_news') }}</option>
                            @endif
                        </select>
                    </div>
                </div>
                @if ($menu['type_menu'] == 1)
                <div class="form-group menu">
                    <label class="col-md-1 control-label">{{ __('label.categorytour') }}</label>
                    <div class="col-md-6">
                        <select name="cate_tour_id" class="selecter_1">
                            <option value="">{{ __('label.choose_cate') }}</option>
                            @foreach ($cate_tour as $value)
                            <option value="{{ $value['id'] }}" @if ($value['id'] == $menu['cate_id']) selected @endif>
                                {{ $value['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group menu">
                    <label class="col-md-1 control-label">{{ __('label.cate_news') }}</label>
                    <div class="col-md-6">
                        <select name="cate_new_id" class="selecter_1" disabled="disabled">
                            <option value="">{{ __('label.choose_cate') }}</option>
                            @foreach ($cate_news as $value)
                            <option value="{{ $value['id'] }}" @if ($value['id'] == $menu['cate_id']) selected @endif>
                                {{ $value['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @else
                <div class="form-group menu">
                    <label class="col-md-1 control-label">{{ __('label.categorytour') }}</label>
                    <div class="col-md-6">
                        <select name="cate_tour_id" class="selecter_1" disabled="disabled">
                            <option value="">{{ __('label.choose_cate') }}</option>
                            @foreach ($cate_tour as $value)
                            <option value="{{ $value['id'] }}" @if ($value['id'] == $menu['cate_id']) selected @endif>
                                {{ $value['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group menu">
                    <label class="col-md-1 control-label">{{ __('label.cate_news') }}</label>
                    <div class="col-md-6">
                        <select name="cate_new_id" class="selecter_1">
                            <option value="">{{ __('label.choose_cate') }}</option>
                            @foreach ($cate_news as $value)
                            <option value="{{ $value['id'] }}" @if ($value['id']==$menu['cate_id']) selected @endif>
                                {{ $value['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @endif
                <div class="form-group menu">
                    <label class="col-md-1 control-label">Url</label>
                    <div class="col-md-6">
                        <input type="text" placeholder="{{ __('label.enter_url') }}" id="link" class="form-control"
                            name="link" value="{{ $menu['link'] }}">
                    </div>
                </div>
                <div class="form-group menu">
                    <label class="col-md-1 control-label">{{ __('label.location') }}</label>
                    <div class="col-md-6">
                        <input type="text" id="location" class="form-control"
                            placeholder="{{ __('label.enter_location') }}" value="{{ $menu['location'] }}"
                            name="location">
                    </div>
                </div>
                <div class="form-group menu">
                    <label class="col-md-1 control-label">{{ __('label.status') }}</label>
                    <div class="col-md-6">
                        <select name="status" class="selecter_1">
                            <option value="#">{{ __('label.choose_status') }}</option>
                            <option value="1">{{ __('label.status_open') }}</option>
                            @if ($menu['status'] == 1)
                            <option value="1" selected>{{ __('label.status_open') }}</option>
                            <option value="0">{{ __('label.status_close') }}</option>
                            @else
                            <option value="1">{{ __('label.status_open') }}</option>
                            <option value="0" selected>{{ __('label.status_close') }}</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group menu">
                    <div class="col-md-6">
                        <button class="btn btn-info" type="submit">{{ __('label.save') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
