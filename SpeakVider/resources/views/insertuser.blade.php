@extends('layoutadmin')

@section('yieldPlace')
    <div class="container-fluid mt-5 mb-5">
        <h2>Insert User</h2>
        <form action="/admin/users/insertuser" method="POST">
            @csrf
            <div class="d-flex flex-column">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="email@email.com"><br>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="min. 8 chars"><br>
                <label for="role">Role</label>
                <div>
                    <input type="radio" name="role" value="admin">
                    <label for="adminRole">Admin</label>
                    <input type="radio" name="role" value="user">
                    <label for="userRole">User</label>
                </div><br>
                <label for="phoneNumber">Phone Number</label>
                <input type="number" name="phoneNumber" placeholder="min. 9 numbers"><br>
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
