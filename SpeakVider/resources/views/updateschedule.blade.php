@extends('layoutadmin')

@section('yieldPlace')
    <div class="container-fluid mt-5 mb-5">
        <h2>Update Schedule</h2>
        <form action="/admin/schedules/updateschedule/{{ $schedule->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="d-flex flex-column">
                <label for="speakerID">Speaker ID</label>
                <input type="number" name="speakerID" value="{{ $schedule->speakerID }}" required><br>
                <label for="day">Day</label>
                <input type="text" name="day" placeholder="Monday/Tuesday/..." value="{{ $schedule->day }}" required><br>
                <label for="startTime">Start Time</label>
                <input type="time" name="startTime" placeholder="start time" value="{{ $schedule->startTime }}" required><br>
                <label for="endTime">End Time</label>
                <input type="time" name="endTime" placeholder="end time" value="{{ $schedule->endTime }}" required><br>
                <label for="price">Price</label>
                <input type="number" name="price" placeholder="price" value="{{ $schedule->price }}" required><br>
                <label for="status">Status</label>
                <input type="number" name="status" placeholder="0 or 1 (1 = available)" value="{{ $schedule->status }}" required><br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="submit">UPDATE</button>
            </div>
        </form>
    </div>
@endsection
