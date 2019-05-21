@extends('backend.layouts.master')

@section('content')
<div class="col-xs-12 col-sm-9 content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span
                                class="fa fa-angle-double-left" data-toggle="offcanvas"
                                title="{{ __('Maximize Panel') }}"></span></a> {{ __('List category news') }}</h3>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('catenews.create') }}" class="btn btn-primary">{{ __('label.add') }}</a>
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
                                        <th>{{ __('label.cate_tour.serial') }}</th>
                                        <th>{{ __('label.cate_tour.title') }}</th>
                                        <th>{{ __('label.cate_tour.status') }}</th>
                                        <th>{{ __('label.cate_tour.cate_parent') }}</th>
                                        <th>{{ __('label.cate_tour.manipulation') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $item)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $item['name'] }}</td>
                                        @if ($item['status'] == 1)
                                            <td>{{ __('Open') }}</td>
                                        @else
                                            <td>{{ __('Close') }}</td>
                                        @endif
                                        @if ($item['parent_id'] != 0 && isset($item['parent_id']))
                                            @foreach ($data as $key => $cate )
                                                @if ($cate['id'] == $item['parent_id'])
                                                    <td>{{ $cate['name'] }}</td>
                                                @endif
                                            @endforeach
                                        @else
                                            <td>{{ __('Parent') }}</td>
                                        @endif
                                        <td>
                                            <form action="{{ route('catenews.destroy', $item['id']) }}" method="POST">
                                                @method('DELETE')
                                                {{ csrf_field() }}
                                                <button type="submit"><i class="fa fa-trash-o"
                                                        aria-hidden="true"></i></button>
                                            </form>
                                            <a href="{{ route('catenews.edit', $item['id']) }}"
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
        <!-- panel body -->
    </div>
</div><!-- content -->
@endsection
