<!-- resources/views/blogs/show.blade.php -->

@extends('layouts.app')
@include('layouts.header')
@section('content')
    <div class="container">
        <h1>{{ $blog->title }}</h1>
        <p>Автор: {{ $blog->author }}</p>
        <p>Дата публикации: {{ $blog->published_at->format('d M Y') }}</p>
        <img src="{{ asset($blog->image_url) }}" alt="{{ $blog->title }}" class="img-fluid rounded">
        <div class="content">
            <p>{{ $blog->content }}</p>
        </div>
        <p><a href="{{ route('donate.create') }}" class="btn btn-primary rounded-0 px-4">Donate Now</a></p>
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Назад к списку</a>
    </div>
    @include('layouts.footer')
@endsection
