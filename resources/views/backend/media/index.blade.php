@extends('backend.layouts.master')

@section('content')
<div class="col-xs-12 col-sm-9 content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span
                                class="fa fa-angle-double-left" data-toggle="offcanvas"
                                title="{{ __('Maximize Panel') }}"></span></a> {{ __('List media') }} </h3>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="content-row">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> {{ __('label.serial') }} </th>
                                        <th> {{ __('label.image') }} </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_media as $key => $media)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td><img src="{{ asset($media['link_url']) }}" class="image" alt=""></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
