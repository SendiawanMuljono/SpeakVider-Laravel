@extends('layoutadmin')

@section('yieldPlace')
    <div class="container-fluid mt-5 mb-5">
        <h2>Insert Schedule</h2>
        <form action="/admin/schedules/insertschedule" method="POST">
            @csrf
            <div class="d-flex flex-column">
                <label for="speakerID">Speaker ID</label>
                <input type="number" name="speakerID" required><br>
                <label for="day">Day</label>
                <select name="day" id="day" required>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select><br>
                <label for="startTime">Start Time</label>
                <input type="time" name="startTime" placeholder="start time" required><br>
                <label for="endTime">End Time</label>
                <input type="time" name="endTime" placeholder="end time" required><br>
                <label for="price">Price</label>
                <input type="number" name="price" placeholder="price" required><br>
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
