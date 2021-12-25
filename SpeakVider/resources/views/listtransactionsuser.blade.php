@extends('layout')

@section('yieldPlace')
    <div class="container-fluid mt-5 mb-5">
        <div class="d-flex justify-content-center mb-4">
            <h3 class="bg-black text-white pt-1 pb-1 pl-4 pr-4 font-weight-bold">LIST TRANSACTIONS</h3>
        </div>
        {{-- <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Speaker Name</th>
                    <th scope="col">Transaction Date</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if($countTransactions == 0)
                    <tr> 
                        <td class="text-center" colspan="6">No Transaction</td>
                    </tr>
                @else
                    @foreach ($transactions as $index => $transaction)
                        <form action="/transactions/updatestatus/{{$transaction->id}}" method="POST">
                            @csrf
                            @method('put')
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{ $transaction->schedule->speakers->name}}</td>
                                <td>{{ $transaction->transactionDate}} {{$transaction->schedule->startTime}}-{{$transaction->schedule->endTime}}</td>
                                <td>Rp. {{number_format($transaction->schedule->price, 0,'.','.') }}</td>
                                @if (($transaction->status) == 'undone')
                                    <td class="text-danger">
                                        {{ $transaction->status }}
                                    </td>  
                                @else
                                    <td class="text-success">
                                        {{ $transaction->status }}
                                    </td>    
                                @endif
                                <td>
                                    @if (($transaction->status) == 'undone')
                                        <button class="rounded-sm btn-success border-0 font-weight-bold" type="submit">Pay Now</button>            
                                    @endif
                                </td>
                            </tr>
                        </form>
                    @endforeach    
                @endif
            </tbody>

            <div class="mt-3 d-flex justify-content-center">
                {{ $transactions->withQueryString()->links() }}
            </div>
        </table> --}}

        
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
    </div>
@endsection
