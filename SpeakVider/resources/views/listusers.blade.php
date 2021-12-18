@extends('layoutadmin')

@section('yieldPlace')
    <div class="container-fluid mt-5 mb-5">
        <h3><a href="/admin/users/insertuser">Click here to insert user</a></h3>
        <h3>List Users</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Role</th>
                    <th scope="col">Phone Number</th>
                    <th class="text-center" scope="col" colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->phoneNumber }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="/admin/users/updateuser/{{ $user->id }}">
                                    <button class="bg-success text-white font-weight-bold border-0">UPDATE</button>
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <form action="/admin/users/deleteuser/{{ $user->id }}" method="POST">
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
