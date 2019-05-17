@extends('backend.layouts.master')

@section('title',  __('label.news'))

@section('content')
<div class="col-xs-12 col-sm-9 content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span
                                class="fa fa-angle-double-left" data-toggle="offcanvas"
                                title="{{ __('Maximize Panel') }}"></span></a>{{ __('List news')}}</h3>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('news.create') }}" class="btn btn-primary"> {{ __('label.add') }} </a>
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
                                        <th> {{ __('label.image') }} </th>
                                        <th> {{ __('label.status') }}</th>
                                        <th> {{ __('label.cate') }} </th>
                                        <th> {{ __('label.manipulation') }} </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_news as $key => $news)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $news->name }}</td>
                                        <td><img src="{{ asset($news->media->link_url) }}" alt="" class="image">
                                        </td>
                                        @if ($news->status == 1)
                                        <td>{{ __('Open') }}</td>
                                        @else
                                        <td>{{ __('Close') }}</td>
                                        @endif
                                        <td>{{ $news->categoryNews->name }}</td>
                                        <td>
                                            <form action="{{ route('news.destroy', $news->id) }}" method="POST">
                                                @method('DELETE')
                                                {{ csrf_field() }}
                                                <button type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            </form>
                                            <a href="{{ route('news.edit', $news->id) }}" class="glyphicon glyphicon-pencil"></a>
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
