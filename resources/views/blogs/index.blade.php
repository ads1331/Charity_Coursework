
@extends('layouts.app')
@include('layouts.header')
@section('content')
    <div class="owl-carousel-wrapper">
        <div class="box-92819">
            <h1 class="text-white mb-3">Blog</h1>
            <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt ab doloremque a quia laboriosam suscipit, iure illum perspiciatis!</p>
        </div>
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_2.jpg');"></div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="heading-20219 mb-5">
                <h2 class="title text-cursive">Latest Blog</h2>
            </div>

            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-6">
                        <div class="event-29191 mb-5">
                            <a href="{{ route('blogs.show', $blog->id) }}" class="d-block mb-3">
                                <img src="{{ asset($blog->image_url) }}" alt="Image" class="img-fluid rounded">
                            </a>
                            <div class="px-3 d-flex">
                                <div class="bg-primary p-3 d-inline-block text-center rounded mr-4 date">
                                    <span class="text-white h3 m-0 d-block">{{ $blog->published_at->format('d') }}</span>
                                    <span class="text-white small">{{ $blog->published_at->format('M Y') }}</span>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <span class="mr-3">
                                            <span class="icon-bookmark mr-2 text-muted"></span>
                                            <a href="#">Cause</a>, <a href="#">Event</a>
                                        </span>
                                        <span><span class="icon-person mr-2 text-muted"></span>{{ $blog->author }}</span>
                                    </div>
                                    <h3><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

    <div class="site-section">
        <div class="container">
            <div class="d-md-flex cta-20101 align-self-center bg-light p-5">
                <div class="">
                    <h2 class="text-cursive">Helping the Homeless, Hungry, and Hurtings Children</h2>
                </div>
                <div class="ml-auto">
                    <p><a href="{{ route('donate.create') }}" class="btn btn-primary rounded-0 px-4">Donate Now</a></p>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
