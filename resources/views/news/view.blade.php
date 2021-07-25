@extends('layout')

@section('content')

<div class="news-card">
    <h3>{{ $news->title }}</h3>
    <p class="my-4">{{ $news->full_text }}</p>
</div>

@endsection
