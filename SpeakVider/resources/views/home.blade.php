@extends('layout')

@section('yieldPlace')
    <div class="container">
        <div class="justify-content-center">OUR SPEAKERS</div>
        <div class="row row-cols-1 row-cols-md-3">
            @foreach ($speakers as $speaker)
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('assets/speakers').$speaker->photo }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $speaker->name }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
