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
                <select name="day" id="day" required>
                    @if ($schedule->day == "Monday")
                        <option value="Monday" selected>Monday</option>
                    @else
                        <option value="Monday">Monday</option>
                    @endif
                    @if ($schedule->day == "Tuesday")
                        <option value="Tuesday" selected>Tuesday</option>
                    @else
                        <option value="Tuesday">Tuesday</option>
                    @endif
                    @if ($schedule->day == "Wednesday")
                        <option value="Wednesday" selected>Wednesday</option>
                    @else
                        <option value="Wednesday">Wednesday</option>
                    @endif
                    @if ($schedule->day == "Thursday")
                        <option value="Thursday" selected>Thursday</option>
                    @else
                        <option value="Thursday">Thursday</option>
                    @endif
                    @if ($schedule->day == "Friday")
                        <option value="Friday" selected>Friday</option>
                    @else
                        <option value="Friday">Friday</option>
                    @endif
                    @if ($schedule->day == "Saturday")
                        <option value="Saturday" selected>Saturday</option>
                    @else
                        <option value="Saturday">Saturday</option>
                    @endif
                    @if ($schedule->day == "Sunday")
                        <option value="Sunday" selected>Sunday</option>
                    @else
                        <option value="Sunday">Sunday</option>
                    @endif
                </select><br>
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
