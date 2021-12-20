@extends('layoutadmin')

@section('yieldPlace')
    <div class="container-fluid mt-5 mb-5">
        <h3><a href="/admin/speakers/insertspeaker">Click here to insert speaker</a></h3>
        <h3>List Speakers</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">About</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Skill</th>
                    <th class="text-center" scope="col" colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($speakers as $speaker)
                    <tr>
                        <td>{{ $speaker->id }}</td>
                        <td>{{ $speaker->name }}</td>
                        <td>{{ $speaker->email }}</td>
                        <td>{{ $speaker->phoneNumber }}</td>
                        <td>{{ $speaker->about }}</td>
                        <td><img src="{{ asset('assets/speakers/'.$speaker->photo) }}" width="200px" height="200px"></td>
                        <td>{{ $speaker->skill }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="/admin/speakers/updatespeaker/{{ $speaker->id }}">
                                    <button class="bg-success text-white font-weight-bold border-0">UPDATE</button>
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <form action="/admin/speakers/deletespeaker/{{ $speaker->id }}" method="POST">
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
