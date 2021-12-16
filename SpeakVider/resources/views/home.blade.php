@extends('layout')

@section('yieldPlace')
    <div class="container-fluid mb-5 mt-5">
        <div class="d-flex justify-content-center mt-5 mb-5">
            <h3 class="bg-black text-white pt-1 pb-1 pl-4 pr-4 font-weight-bold">ABOUT US</h3>
        </div>
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="d-flex justify-content-center">
                <img src="assets/image/banner_aboutus1.png" alt="" width="500px" height="500px">
            </div>
            <div>
                <h4>Speakvider is a website that provides speakers for seminars or workshops. Everyone who needs speakers to hold seminars or workshops, can find trusted and professional speakers on this website. That way, this website will benefit both the speaker and the customer.</h4>
                <div class="mt-5">
                    <a href="/aboutus">
                        <button class="rounded-pill btn-lg bg-success border-0 font-weight-bold text-white">Learn More</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5 mt-5">
        <div class="d-flex justify-content-center mb-3">
            <h3 class="bg-black text-white pt-1 pb-1 pl-4 pr-4 font-weight-bold">OUR SPEAKERS</h3>
        </div>
        <div class="d-flex justify-content-end mb-2">
            <a href="/allspeakers">SEE MORE ></a>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            @foreach ($speakers as $speaker)
                <div class="col d-flex justify-content-center mb-5">
                    <div class="card" style="width: 18rem;">
                        <a href="#">
                            <img src="{{ asset('assets/speakers/'.$speaker->photo) }}" class="card-img-top" width="250px" height="250px">
                            <div class="card-body d-flex justify-content-center">
                                <h5 class="card-title">{{ $speaker->name }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
