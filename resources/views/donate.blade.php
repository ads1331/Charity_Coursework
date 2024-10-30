@extends('layouts.app')
@include('layouts.header')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h3 class="mb-4 text-cursive">Donate Now</h3>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('donate.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="amount" class="form-control" placeholder="Amount in dollar" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Donate Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
