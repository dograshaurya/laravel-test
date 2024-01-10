@extends('layout')

@section('content')

    <div class="container py-4">
        <div class="card">
            <img src="https://placehold.co/1100x400" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="{{ route('home') }}" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
@endsection
