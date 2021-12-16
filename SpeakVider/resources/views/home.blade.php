@extends('layout')

@section('yieldPlace')
    <div class="container">
        <div class="d-flex justify-content-center">OUR SPEAKERS</div>
        <div class="row row-cols-1 row-cols-md-3 justify-content-center">
            @foreach ($speakers as $speaker)
                <div>
                    <a class="d-flex justify-content-center" href="/aboutus">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('assets/speakers/'.$speaker->photo) }}" class="card-img-top" width="250px" height="250px">
                            <div class="card-body d-flex justify-content-center">
                                <h5 class="card-title">{{ $speaker->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
