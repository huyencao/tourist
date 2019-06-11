@extends('backend.layouts.master')

@section('title', __('label.banner.list'))

@section('content')
<div class="col-xs-12 col-sm-9 content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-11">
                    <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span
                                class="fa fa-angle-double-left" data-toggle="offcanvas"
                                title="{{ __('Maximize Panel') }}"></span></a> {{ __('label.banner.list') }} </h3>
                </div>
                <div class="col-md-1">
                    <a href="{{ route('banner.create') }}" class="btn btn-primary"> {{ __('label.add') }} </a>
                </div>
            </div>
        </div>
        @if (!empty($data_banner))
            <div class="panel-body">
                <div class="content-row">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th> {{ __('label.serial') }} </th>
                                            <th> {{ __('label.banner.title')}} </th>
                                            <th> {{ __('label.image') }} </th>
                                            <th> {{ __('label.status') }}</th>
                                            <th> {{ __('label.location') }} </th>
                                            <th> {{ __('label.manipulation') }} </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_banner as $key => $banner)
                                        <tr>
                                            <td>{{ ++$key}}</td>
                                            <td> {{ $banner['name'] }} </td>
                                            <td>
                                                <img src="{{ asset($banner['media']['link_url']) }}" class="image" alt="">
                                            </td>
                                            @if ($banner['status'] == 1)
                                            <td>{{ __('Open') }}</td>
                                            @else
                                            <td>{{ __('Close') }}</td>
                                            @endif
                                            @if ($banner['location'] == 0)
                                            <td>{{ __('Top') }}</td>
                                            @elseif ($banner['location'] == 1)
                                            <td>{{ __('Right') }}</td>
                                            @else
                                            <td>{{ __('Left') }}</td>
                                            @endif
                                            <td>
                                                <form action="{{ route('banner.destroy', $banner['id']) }}" method="POST">
                                                    @method('DELETE')
                                                    {{ csrf_field() }}
                                                    <button type="submit"><i class="fa fa-trash-o"
                                                            aria-hidden="true"></i></button>
                                                </form>
                                                <a href="{{ route('banner.edit', $banner['id']) }}"
                                                    class="glyphicon glyphicon-pencil"></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <p>{{ __('Không có banner') }}</p>
        @endif
        <!-- panel body -->
    </div>
</div>
@endsection
