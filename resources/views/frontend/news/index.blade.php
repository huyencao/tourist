@extends('frontend.layouts.master')

@section('title', __('label.news'))

@section('content')
<section class="new">
    <div class="container">
        <div class="row">
            <h3 class="titlecate">{{ $result->name }}</h3>
            @if (!empty($data_news))
            @foreach ($data_news as $news)
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="box_new">
                        <img src="{{ asset($news->media->link_url) }}" alt="">
                        <div class="new_content">
                            <a href="{{ route('news.detail', $news->slug) }}">
                                <h3>{{ str_limit($news->name, 50) }}</h3>
                            </a>
                            <p>{{ str_limit($news->description, 60) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
        {{ $data_news->links() }}
    </div>
</section>
@endsection
