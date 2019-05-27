@extends('backend.layouts.master')

@section('title', __('label.menu'))

@section('content')
<div class="col-xs-12 col-sm-9 content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span
                                class="fa fa-angle-double-left" data-toggle="offcanvas"
                                title="{{ __('Maximize Panel') }}"></span></a> {{ __('Menu') }}</h3>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('menu.create') }}" class="btn btn-primary">{{ __('label.add') }}</a>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="content-row">
                <div class="row">
                    <div class="col-md-6">
                   {{ menuParent($list_menu) }}
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    @endsection
