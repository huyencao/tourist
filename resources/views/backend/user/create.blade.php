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
            <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span
                        class="fa fa-angle-double-left" data-toggle="offcanvas"></span></a>{{ __('label.add_user') }}
            </h3>
        </div>
        <div class="panel-body">
            <div class="content-row">
                <div class="row">
                    <form action="{{ route('user.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-2 control-label">{{ __('label.user.username') }}</label>
                                <div class="col-md-10">
                                    <input type="text" required="" placeholder="{{ __('label.user.enter_username') }}"
                                        id="title" class="form-control" name="username">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-2 control-label">{{ __('label.user.fullname') }}</label>
                                <div class="col-md-10">
                                    <input type="text" required="" placeholder="{{ __('label.user.enter_fullname') }}"
                                        id="title" class="form-control" name="fullname">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-2 control-label">{{ __('label.user.password') }}</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" id="password"
                                        placeholder="{{ __('label.user.enter_password') }}" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-2 control-label">{{ __('label.user.email') }}</label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control" id="email"
                                        placeholder="{{ __('label.user.enter_password') }}" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-2 control-label">{{ __('label.user.role') }}</label>
                                <div class="col-md-10">
                                    <select name="role" class="selecter_1">
                                        <option value="">{{ __('label.user.choose_role') }}</option>
                                        <option value="1">{{ __('label.user.role_admin') }}</option>
                                        <option value="2">{{ __('label.user.role_manager') }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-12">
                            <div class="form-group">
                                <label class="col-md-1 control-label">{{ __('label.image') }}</label>
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img class="img-rounded" id="preview"
                                            src="{{ asset(config('app.image_url') . 'no-image.png') }}" class="image">
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
                                <div class="col-md-offset-1 col-md-12">
                                    <button class="btn btn-info" type="submit">{{ __('label.save') }}</button>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@push('scripts')
<script type="text/javascript" src="{{ asset('assets/js/index.js') }}"></script>
@endpush
