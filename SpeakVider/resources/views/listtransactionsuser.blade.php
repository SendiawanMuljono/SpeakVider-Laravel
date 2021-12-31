@extends('layout')

@section('yieldPlace')
    <div class="container-fluid mt-5 mb-5">
        <div class="d-flex justify-content-center mb-4">
            <h3 class="bg-black text-white pt-1 pb-1 pl-4 pr-4 font-weight-bold">LIST TRANSACTIONS</h3>
        </div>

        @if($countTransactions == 0)
            <div class="card text-center">
                <div class="card-header">
                Transactions
                </div>
                <div class="card-body">
                    <h5 class="card-title">No Data</h5>
                    <p class="card-text">Let's make Transaction with our Speakers</p>
                    <a href="/allspeakers" class="btn btn-lg btn-primary font-weight-bold">See All Speakers</a>
                </div>
            </div>
        @else
            @foreach ($transactions as $index => $transaction)
                <div class="card mb-3">
                    <div class="card-header text-right font-weight-bold">
                        <div class="align-self-center">
                            Transaction Date: {{ $transaction->transactionDate}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-start flex-row">
                            <div class="align-self-center">
                                <img src="{{ asset('assets/speakers/'.$transaction->schedule->speakers->photo) }}" width="150px" height="200px" alt="...">
                            </div>
                            <div id="card-body-content" class="align-self-center ml-3">

                                <h3 class="card-title">Transaction</h3>

                                    <table class="table-borderless card-text">
                                        <tbody>
                                            <tr>
                                                <td>Speaker Name</td>
                                                <td>: <span class="font-weight-bold">{{ $transaction->schedule->speakers->name}}</span></td>
                                            </tr>
                                            <tr>
                                                <td>Time</td>
                                                <td>: <span class="font-weight-bold">{{$transaction->schedule->startTime}}-{{$transaction->schedule->endTime}}</span></td>
                                            </tr>
                                            <tr>
                                                <td>Price</td>
                                                <td>: <span class="font-weight-bold">Rp. {{number_format($transaction->schedule->price, 0,'.','.') }}</span></td>
                                            </tr>
                                        </tbody>
                                    </table>


                                <div class="d-flex justify-content-between mt-3">
                                    <div>
                                        <h5>
                                            Status Payment:  
                                            @if (($transaction->status) == 'undone')
                                                <img src="../assets/image/notchecklist.png" width="20px" height="20px" alt="...">
                                                <span class="text-danger">
                                                    ({{ $transaction->status }})
                                                </span>
                                            @else
                                                <img src="../assets/image/checklist.png" width="20px" height="20px" alt="...">
                                                <span class="text-success">
                                                    ({{ $transaction->status }}) 
                                                </span>    
                                            @endif
                                        </h5>
                                    </div>

                                    <div class="col-sm-2">
                                        <div>
                                            @if (($transaction->status) == 'undone')
                                            <form action="/transactions/updatestatus/{{$transaction->id}}" method="POST">
                                                @csrf
                                                @method('put')
                                                <button class="btn btn-lg btn-success btn-block font-weight-bold" type="submit">Pay Now</button> 
                                            </form>             
                                            @else
                                                <button class="btn btn-lg btn-primary btn-block font-weight-bold disabled">Paid</button>                       
                                            @endif
                                        </div>
                                    </div>
                                
                                </div>

                                <p class="card-text text-right mr-3 mt-lg-n3"><small class="text-muted">Last updated 3 mins ago</small></p>
                
                            </div>
                        </div>
                    </div>
                    
                </div>
            @endforeach 
            
            <div class="mt-3 d-flex justify-content-center">
                {{ $transactions->withQueryString()->links() }}
            </div>
            
        @endif

    </div>
@endsection
