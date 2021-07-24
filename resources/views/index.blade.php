@extends('layout')

@section('content')

@foreach ($news as $item)
<div class="news-card">
    <h4>{{ $item->title }}</h4>
    <p>{{ $item->short_text }}</p>
    {{-- Я знаю что можно через router, но мне пох, я хочу спать, так что потом поменяю --}}
    <a href="/news/{{ $item->slug }}">Подробнее</a>
</div>
@endforeach

@endsection
