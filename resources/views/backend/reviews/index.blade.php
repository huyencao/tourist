@extends('backend.layouts.master')

@section('title',  __('label.review'))

@section('content')
<div class="col-xs-12 col-sm-9 content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar">
                    <span class="fa fa-angle-double-left" data-toggle="offcanvas"></span></a>{{ __('label.review')}}</h3>
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
                                        <th> {{ __('label.name') }} </th>
                                        <th> {{ __('label.user.email') }} </th>
                                        <th> {{ __('label.content') }}</th>
                                        <th> {{ __('label.tour') }} </th>
                                        <th> {{ __('label.manipulation') }} </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_review as $key => $review)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $review->name }}</td>
                                        <td>{{ $review->email }}</td>
                                        <td>{{ str_limit($review->content, 60) }}</td>
                                        <td>{{ $review->tour->name }}</td>
                                        <td>
                                            <form action="{{ route('review.destroy', $review->id) }}" method="POST">
                                                @method('DELETE')
                                                {{ csrf_field() }}
                                                <button type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            </form>
                                            <a href="{{ route('review.edit', $review->id) }}" class="glyphicon glyphicon-pencil"></a>
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
