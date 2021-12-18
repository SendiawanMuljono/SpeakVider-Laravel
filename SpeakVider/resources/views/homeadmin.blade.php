@extends('layoutadmin')

<link rel="stylesheet" href="{{ asset('/assets/css/homeadmin.css') }}">
@section('yieldPlace')
    <div class="d-flex flex-column align-items-center">
        <h1 class="mt-3 font-weight-bold text-center">Welcome to Admin Page</h1>
        <h2 class="text-center">Below are current SpeakVider data:</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mt-5">
            <div class="col d-flex justify-content-center mb-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold">Total Users:</h4>
                        <h1 class="display-4 card-text font-weight-bold d-flex justify-content-end">{{ $countUsers }}</h1>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center mb-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold">Total Speakers:</h4>
                        <h1 class="display-4 card-text font-weight-bold d-flex justify-content-end">{{ $countSpeakers }}</h1>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center mb-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold">Total Transactions:</h4>
                        <h1 class="display-4 card-text font-weight-bold d-flex justify-content-end">{{ $countTransactions }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
