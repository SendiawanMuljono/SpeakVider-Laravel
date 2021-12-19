@extends('layout')

@section('yieldPlace')
<div class="container-fluid mb-5 mt-5">
    <div class="d-flex justify-content-center mb-5">
        <h3 class="bg-black text-white pt-1 pb-1 pl-4 pr-4 font-weight-bold">ALL SPEAKERS</h3>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
        @foreach ($speakers as $speaker)
            <div class="col d-flex justify-content-center mb-5">
                <div class="card" style="width: 18rem;">
                    <a href="/speakerdetail/{{ $speaker->id }}/Monday">
                        <img src="{{ asset('assets/speakers/'.$speaker->photo) }}" class="card-img-top" width="250px" height="250px">
                        <div class="card-body d-flex flex-column align-items-center">
                            <h5 class="card-title">{{ $speaker->name }}</h5>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-3 d-flex justify-content-center">
        {{ $speakers->withQueryString()->links() }}
    </div>
</div>
@endsection
