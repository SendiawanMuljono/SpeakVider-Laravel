@extends('layoutadmin')

@section('yieldPlace')
    <div class="container-fluid mt-5 mb-5">
        <h2>Update Speaker</h2>
        <form action="/admin/speakers/updatespeaker/{{ $speaker->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="d-flex flex-column">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="name" value="{{ $speaker->name }}" required><br>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="email@email.com" value="{{ $speaker->email }}" required><br>
                <label for="phoneNumber">Phone Number</label>
                <input type="number" name="phoneNumber" placeholder="min. 9 numbers" value="{{ $speaker->phoneNumber }}" required><br>
                <label for="about">About</label>
                <input type="text" name="about" placeholder="describe about speaker" value="{{ $speaker->about }}" required><br>
                <label for="image">Photo</label>
                <input type="file" name="photo" id="photo" placeholder="1" value="{{ $speaker->photo }}"><br>
                <label for="skill">Skill</label>
                <input type="text" name="skill" placeholder="Communicative, Sociable, etc"  value="{{ $speaker->skill }}" required><br>
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
