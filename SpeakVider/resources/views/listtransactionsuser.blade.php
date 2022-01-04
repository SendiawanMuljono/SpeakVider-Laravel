@extends('layout')

@section('yieldPlace')
    <div class="container-fluid mt-5 mb-5">
        <div class="d-flex justify-content-center mb-4">
            <h3 class="bg-black text-white pt-1 pb-1 pl-4 pr-4 font-weight-bold">LIST TRANSACTIONS</h3>
        </div>

         <!-- Button trigger modal -->
         <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-lg btn-primary font-weight-bold" data-bs-toggle="modal" data-bs-target="#historyModal">
                Transaction History
            </button>
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
            @php
               $number = 1
            @endphp
            <div class="navbar-nav-scroll">
                @foreach ($transactions as $transaction)
                @if (($transaction->status) == 'undone')
                    <div class="card mb-3">
                        <div class="card-header text-right font-weight-bold">
                            <div class="align-self-center">
                                Transaction Date: {{Carbon\Carbon::parse($transaction->transactionDate)->format('d F Y')}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-start flex-row">
                                <div class="align-self-center">
                                    <img src="{{ asset('assets/speakers/'.$transaction->schedule->speakers->photo) }}" width="150px" height="200px" alt="...">
                                </div>
                                <div id="card-body-content" class="align-self-center ml-3">

                                    <h3 class="card-title">Transaction {{$number}}</h3>

                                        <table class="table-borderless card-text">
                                            <tbody>
                                                <tr>
                                                    <td>Speaker Name</td>
                                                    <td>: <span class="font-weight-bold">{{ $transaction->schedule->speakers->name}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Schedule</td>
                                                    <td>: <span class="font-weight-bold">{{$transaction->schedule->startTime}}-{{$transaction->schedule->endTime}} ({{$transaction->schedule->day}})</span></td>
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
                                                <img src="../assets/image/notchecklist.png" width="20px" height="20px" alt="...">
                                                <span class="text-danger">
                                                    ({{ $transaction->status }})
                                                </span> 
                                            </h5>
                                        </div>

                                        <div class="col-sm-2">
                                            <div>
                                                <form action="/transactions/updatestatus/{{$transaction->id}}" method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <button class="btn btn-lg btn-success btn-block font-weight-bold" type="submit">Pay Now</button> 
                                                </form>  
                                            </div>
                                        </div>
                                    
                                    </div>
                    
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                    @php
                        $number++
                    @endphp
                @endif
            @endforeach
            </div>
            
        @endif

    </div>

    <!-- Modal -->
    <div class="modal fade" id="historyModal" data-bs-backdrop="static"  
        data-bs-keyboard="false" 
        tabindex="-1" 
        aria-labelledby="staticBackdropLabel" 
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Transaction History</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if($countTransactions == 0)
                        <div class="card text-center">
                            <div class="card-header">
                            Transactions
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">No Transaction History</h5>
                            </div>
                        </div>
                    @else
                        @php
                            $number = 1
                        @endphp

                        @foreach ($transactions as $transaction)
                            @if (($transaction->status) == 'done')
                                <div class="card mb-3">
                                    <div class="card-header text-right font-weight-bold">
                                        <div class="align-self-center">
                                            Transaction Date: {{Carbon\Carbon::parse($transaction->transactionDate)->format('d F Y')}}
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-start flex-row">
                                            <div class="align-self-center">
                                                <img src="{{ asset('assets/speakers/'.$transaction->schedule->speakers->photo) }}" width="150px" height="200px" alt="...">
                                            </div>
                                            <div id="card-body-content" class="align-self-center ml-3">
                
                                                <h3 class="card-title">Transaction {{$number}}</h3>
                
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
                                                            <img src="../assets/image/checklist.png" width="20px" height="20px" alt="...">
                                                                <span class="text-success">
                                                                    ({{ $transaction->status }}) 
                                                                </span>  
                                                        </h5>
                                                    </div>
                                                </div>
                
                                                <p class="card-text text-right mr-3 mt-lg-n3"><small class="text-muted">Already Paid on {{Carbon\Carbon::parse($transaction->updated_at)->format('d F Y H:i')}}</span></small></p>
                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                               @php
                                $number++
                                @endphp
                            @endif   
                        @endforeach
              
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger font-weight-bold" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
