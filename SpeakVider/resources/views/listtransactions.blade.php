@extends('layoutadmin')

@section('yieldPlace')
    <div class="container-fluid mt-5 mb-5">
        <h3>List Transactions</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Schedule ID</th>
                    <th scope="col">Transaction Date</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->userID }}</td>
                        <td>{{ $transaction->scheduleID }}</td>
                        <td>{{ $transaction->transactionDate }}</td>
                        @if ($transaction->status == 'undone')
                            <td class="text-danger">{{ $transaction->status }}</td>
                        @else
                            <td class="text-success">{{ $transaction->status }}</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
