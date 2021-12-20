@extends('layoutadmin')

@section('yieldPlace')
    <div class="container-fluid mt-5 mb-5">
        <h2>Insert Speaker</h2>
        <form action="/admin/speakers/insertspeaker" method="POST">
            @csrf
            <div class="d-flex flex-column">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="name" required><br>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="email@email.com" required><br>
                <label for="phoneNumber">Phone Number</label>
                <input type="number" name="phoneNumber" placeholder="min. 9 numbers" required><br>
                <label for="about">About</label>
                <input type="text" name="about" placeholder="describe about speaker" required><br>
                <label for="image">Photo</label>
                <input type="file" name="photo" id="photo" placeholder="1" required><br>
                <label for="skill">Skill</label>
                <input type="text" name="skill" placeholder="Communicative, Sociable, etc" required><br>
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
