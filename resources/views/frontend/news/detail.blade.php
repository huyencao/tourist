@extends('frontend.layouts.master')

@section('title', __('label.news'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-9 col-md-9">
            @if (!empty($data))
            @foreach ($data as $value)
                <div class="new_detail">
                    <h3>{{ $value->name }}</h3>
                    <p>{{ $value->description }}</p>
                    <p>{!! $value->content !!}</p>
                </div>
            @endforeach
            @endif
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="new_right">
                <h3 class="title">{{ __('label.frontend.latest_news') }}</h3>
                @if (!empty($list_news))
                    @foreach ($list_news as $news)
                        <div class="hot_right">
                            <a href="{{ route('news.detail', $news->slug) }}"><img src="{{ asset($news->media->link_url) }}" alt=""></a>
                            <h3> <a href="{{ route('news.detail', $news->slug) }}">{{ str_limit($news->name, 60) }}</a></h3>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
