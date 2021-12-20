@extends('layout')

@section('yieldPlace')
    <div class="container-fluid mt-5 mb-5">
        <h3>List Transactions</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Schedule ID</th>
                    <th scope="col">Transaction Date</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($countTransactions == 0)
                    <tr> 
                        <td  class="text-center" colspan="6">No Transaction</td>
                    </tr>
                @else
                    @foreach ($transactions as $transaction)
                        <form action="/transactions/updatestatus/{{$transaction->id}}" method="POST">
                            @csrf
                            @method('put')
                            <tr>
                                <td>{{ $transaction->id }}</td>
                                <td>{{ $transaction->schedule->speakerID}}</td>
                                <td>{{ $transaction->transactionDate}} {{$transaction->schedule->startTime}}-{{$transaction->schedule->endTime}}</td>
                                <td>Rp. {{ $transaction->schedule->price }}</td>
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
        </table>
    </div>
@endsection