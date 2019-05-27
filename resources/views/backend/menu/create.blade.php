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

<form action="{{ route('menu.store') }}" method="POST">
@csrf
    <div class="col-md-6">
        <div class="form-group menu">
            <label class="col-md-1 control-label">{{ __('label.name') }}</label>
            <div class="col-md-6">
                <input type="text" placeholder="{{ __('label.enter_title') }}" id="name" class="form-control"
                    name="name">
            </div>
        </div>
        <div class="form-group menu">
            <label class="col-md-1 control-label">{{ __('label.menu_parent') }}</label>
            <div class="col-md-6">
                <select name="parent_id" class="selecter_1">
                    <option value="0">{{ __('label.choose_menu') }}</option>
                    {{ showCategories($menus) }}
                </select>
            </div>
        </div>
        <div class="form-group menu">
            <label class="col-md-1 control-label">{{ __('label.type_menu') }}</label>
            <div class="col-md-6">
                <select name="type_menu" class="selecter_1 type_menu">
                    <option value="">{{ __('label.choose_menu') }}</option>
                    <option value="1">{{ __('label.categorytour') }}</option>
                    <option value="2">{{ __('label.cate_news') }}</option>
                </select>
            </div>
        </div>
        <div class="form-group cate_tour menu">
            <label class="col-md-1 control-label">{{ __('label.categorytour') }}</label>
            <div class="col-md-6">
                <select name="cate_tour_id" class="selecter_1">
                    <option value="">{{ __('label.choose_cate') }}</option>
                    {{ showCategories($cate_tour) }}
                </select>
            </div>
        </div>
        <div class="form-group cate_news menu">
            <label class="col-md-1 control-label">{{ __('label.cate_news') }}</label>
            <div class="col-md-6">
                <select name="cate_new_id" class="selecter_1">
                    <option value="">{{ __('label.choose_cate') }}</option>
                    {{ showCategories($cate_news) }}
                </select>
            </div>
        </div>
        <div class="form-group menu">
            <label class="col-md-1 control-label">Url</label>
            <div class="col-md-6">
                <input type="text" placeholder="{{ __('label.enter_url') }}" id="link" class="form-control" name="link">
            </div>
        </div>
        <div class="form-group menu">
            <label class="col-md-1 control-label">{{ __('label.location') }}</label>
            <div class="col-md-6">
                <input type="text" id="location" class="form-control" placeholder="{{ __('label.enter_location') }}"
                    name="location">
            </div>
        </div>
        <div class="form-group menu">
            <label class="col-md-1 control-label">{{ __('label.status') }}</label>
            <div class="col-md-6">
                <select name="status" class="selecter_1">
                    <option value="#">{{ __('label.choose_status') }}</option>
                    <option value="1">{{ __('label.status_open') }}</option>
                    <option value="0">{{ __('label.status_close') }}</option>
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
@endsection
@push('scripts')
<script type="text/javascript" src="{{ asset('assets/js/menu.js') }}"></script>
@endpush
