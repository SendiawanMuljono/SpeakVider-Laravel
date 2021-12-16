@extends('layout')

@section('yieldPlace')
    <div class="container-fluid mb-5 mt-5">
        <div class="d-flex justify-content-center mb-3">
            <h4 class="bg-black text-white pt-1 pb-1 pl-4 pr-4 font-weight-bold">OUR SPEAKERS</h4>
        </div>
        <div class="d-flex justify-content-end mb-2">
            <a href="/allSpeakers">SEE MORE ></a>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            @foreach ($speakers as $speaker)
                <div class="col d-flex justify-content-center mb-5">
                    <div class="card" style="width: 18rem;">
                        <a href="/aboutus">
                            <img src="{{ asset('assets/speakers/'.$speaker->photo) }}" class="card-img-top" width="250px" height="250px">
                            <div class="card-body d-flex justify-content-center">
                                <h5 class="card-title">{{ $speaker->name }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-start mt-5 mb-3">
            <h4 class="bg-black text-white pt-1 pb-1 pl-4 pr-4 font-weight-bold">ABOUT US</h4>
        </div>
    </div>
@endsection
