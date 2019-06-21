@extends('backend.layouts.master')

@section('title', __('label.review'))

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
                    <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas"></span></a>{{ __('label.add') }}
                    </h3>
                </div>
            </div>
        </div>
        <form action="{{ route('review.update', $review->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="panel-body">
                <div class="content-row">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <input type="hidden" id="user_id" class="form-control" name="user_id" value="{{ $review->user->id }}">
                                <input type="hidden" id="star" class="form-control" name="star" value="{{ $review->star }}">
                                <div class=" col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.name') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" id="name" class="form-control" name="name" value="{{ $review->name }}" disabled="disabled">
                                            <input type="hidden" id="name" class="form-control" name="name" value="{{ $review->name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.booktour.email') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" id="email" class="form-control" name="email" value="{{ $review->email }}" disabled="disabled">
                                            <input type="hidden" id="email" class="form-control" name="email" value="{{ $review->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.tour') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" id="tour" class="form-control" name="tour_id" value="{{ $review->tour->name }}" disabled="disabled">
                                            <input type="hidden" id="tour" class="form-control" name="tour_id" value="{{ $review->tour->id }}">
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-1 control-label">{{ __('label.content') }}</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="4" cols="50" id="content" name="content" value="{{ $review->content }}">{{ $review->content }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="{{ __('label.save') }}" name="save" class="btn btn-success">
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
