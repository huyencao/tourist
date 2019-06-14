@extends('backend.layouts.master')

@section('title', __('label.order_tour'))

@section('content')
<div class="col-xs-12 col-sm-9 content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar">
                    <span class="fa fa-angle-double-left" data-toggle="offcanvas"></span></a>{{ __('label.list_order')}}</h3>
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
                                        <th> {{ __('label.name_order') }} </th>
                                        <th> {{ __('label.start_day') }} </th>
                                        <th> {{ __('label.total') }}</th>
                                        <th> {{ __('label.booktour.payment_method') }} </th>
                                        <th> {{ __('label.user.fullname') }} </th>
                                        <th> {{ __('label.view') }} </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $value)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $value['tour']['name'] }}</td>
                                        <td>{{ date('d/m/Y', strtotime($value->start_day)) }}</td>
                                        <td>{{ number_format($value->total_price, 0, ',', ',') }}{{ __(' đ') }}</td>
                                        <td>{{ $value->payment_method }}</td>
                                        <td>{{ $value->fullname }}</td>
                                        <td>
                                            <form action="{{ route('ordertour.destroy', $value->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"><i class="fa fa-trash-o"
                                                        aria-hidden="true"></i></button>
                                            </form>
                                            <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
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
