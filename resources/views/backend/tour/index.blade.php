@extends('backend.layouts.master')

@section('title', __('label.tour'))

@section('content')
<div class="col-xs-12 col-sm-9 content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="panel-title"><a href="javascript:void(0);"
                            class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas"
                                title="{{ __('Maximize Panel') }}"></span></a>{{ __('label.list_tour') }}</h3>
                </div>
                <div class="col-md-2">
                <a href="{{ route('tour.create') }}" class="btn btn-primary">{{ __('label.add') }}</a>
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
                                        <th>{{ __('label.serial') }}</th>
                                        <th>{{ __('label.name') }}</th>
                                        <th>{{ __('label.image') }}</th>
                                        <th>{{ __('label.parent_cate') }}</th>
                                        <th>{{ __('label.starting_point') }}</th>
                                        <th>{{ __('label.destination') }}</th>
                                        <th> {{ __('label.status') }}</th>
                                        <th>{{ __('label.cate_tour.manipulation') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_tours as $key => $tour)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $tour['name'] }}</td>
                                            <td><img src="{{ asset($tour['media']['link_url']) }}" class="image" alt=""></td>
                                            <td>{{ $tour['category']['name']}}</td>
                                            <td>{{ $tour['starting_point'] }}</td>
                                            <td>{{ $tour['destination'] }}</td>
                                            @if ($tour['status'] == 1)
                                            <td>{{ __('Open') }}</td>
                                            @else
                                            <td>{{ __('Close') }}</td>
                                            @endif
                                            <td>
                                            <form action="{{ route('tour.destroy', $tour['id']) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                                <button type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            </form>
                                            <a href="{{ route('tour.edit', $tour['id']) }}"
                                                class="glyphicon glyphicon-pencil"></a>
                                        </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $list_tours->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- panel body -->
    </div>
</div>
@endsection
