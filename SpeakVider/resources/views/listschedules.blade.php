@extends('layoutadmin')

@section('yieldPlace')
    <div class="container-fluid mt-5 mb-5">
        <h3><a href="/admin/schedules/insertschedule">Click here to insert schedule</a></h3>
        <h3>List Schedules</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Speaker ID</th>
                    <th scope="col">Day</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">End Time</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th class="text-center" scope="col" colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schedules as $schedule)
                    <tr>
                        <td>{{ $schedule->id }}</td>
                        <td>{{ $schedule->speakers->id }}</td>
                        <td>{{ $schedule->day }}</td>
                        <td>{{ $schedule->startTime }}</td>
                        <td>{{ $schedule->endTime }}</td>
                        <td>{{ $schedule->price }}</td>
                        <td>{{ $schedule->status }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="/admin/schedules/updateschedule/{{ $schedule->id }}">
                                    <button class="bg-success text-white font-weight-bold border-0">UPDATE</button>
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <form action="/admin/schedules/deleteschedule/{{ $schedule->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="bg-danger text-white font-weight-bold border-0">DELETE</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
