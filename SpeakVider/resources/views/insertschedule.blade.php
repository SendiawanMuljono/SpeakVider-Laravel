@extends('layoutadmin')

@section('yieldPlace')
    <div class="container-fluid mt-5 mb-5">
        <h2>Insert Schedule</h2>
        <form action="/admin/schedules/insertschedule" method="POST">
            @csrf
            <div class="d-flex flex-column">
                <label for="day">Day</label>
                <input type="text" name="day" placeholder="Monday/Tuesday/..." required><br>
                <label for="startTime">Start Time</label>
                <input type="text" name="startTime" placeholder="start time" required><br>
                <label for="endTime">End Time</label>
                <input type="text" name="endTime" placeholder="end time" required><br>
                <label for="price">Price</label>
                <input type="number" name="price" placeholder="price" required><br>
                <label for="status">Status</label>
                <input type="number" name="status" placeholder="0 or 1" required><br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="submit">INSERT</button>
            </div>
        </form>
    </div>
@endsection
