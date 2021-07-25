@extends('layout')

@section('content')

@foreach ($news as $item)
<div class="news-card">
    <h3>{{ $item->title }}</h3>
    <p class="my-4">{{ $item->short_text }}</p>
    <a href="{{ route('news.view',  $item->slug) }}">Подробнее</a>
</div>
@endforeach
{{ $news->links('vendor.pagination.bootstrap-5') }}

@endsection
