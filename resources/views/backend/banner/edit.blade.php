@extends('backend.layouts.master')

@section('title', __('label.banner.name'))

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
        <form action="{{ route('banner.update', $banner[0]['id']) }}" enctype="multipart/form-data" method="POST">
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
                                            <input type="text" placeholder="{{ __('label.enter_title') }}" id="title"
                                                class="form-control" name="name" value="{{ $banner[0]['name'] }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.status') }}</label>
                                        <div class="col-md-3">
                                            <select required name="status" class="selecter_1">
                                                <option value="#">{{ __('label.choose_status') }}</option>
                                                @if ($banner[0]['status'] == 1)
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
                                        <label class="col-md-1 control-label">{{ __('label.location') }}</label>
                                        <div class="col-md-3">
                                            <select required name="location" class="selecter_1">
                                                <option value="#">{{ __('label.choose_location') }}</option>
                                                @if ($banner[0]['location'] == 0)
                                                <option value="0" selected>{{ __('label.top') }}</option>
                                                <option value="1">{{ __('label.right') }}</option>
                                                <option value="2">{{ __('label.left') }}</option>
                                                @elseif ($banner[0]['location'] == 1)
                                                <option value="0">{{ __('label.top') }}</option>
                                                <option value="1" selected>{{ __('label.right') }}</option>
                                                <option value="2">{{ __('label.left') }}</option>
                                                @else
                                                <option value="0">{{ __('label.top') }}</option>
                                                <option value="1">{{ __('label.right') }}</option>
                                                <option value="2" selected>{{ __('label.left') }}</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.image') }}</label>
                                        <div class="col-md-4">
                                            <div class="thumbnail">
                                                @if (!empty($link_image['link_url']))
                                                <img class="img-rounded" id="preview"
                                                    src="{{ asset($link_image['link_url']) }}" class="image">
                                                @else
                                                <img class="img-rounded" id="preview"
                                                    src="{{ asset(config('app.image_url') . 'no-image.png') }}"
                                                    class="image">
                                                @endif
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
        <!-- panel body -->
    </div>
</div><!-- content -->
@endsection
@push('scripts')
<script type="text/javascript" src="{{ asset('assets/js/index.js') }}"></script>
@endpush
