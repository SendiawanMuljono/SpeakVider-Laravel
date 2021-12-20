@extends('layoutadmin')

@section('yieldPlace')
    <div class="container-fluid mt-5 mb-5">
        <h2>Update User</h2>
        <form action="/admin/users/updateuser/{{ $user->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="d-flex flex-column">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="email@email.com" value="{{ $user->email }}" required><br>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="min. 8 chars" value="{{ $user->password }}" required><br>
                <label for="role">Role</label>
                <div>
                    @if ($user->role === 'user')
                        <input type="radio" name="role" value="user" checked>
                        <label for="userRole">User</label>
                    @else
                        <input type="radio" name="role" value="user">
                        <label for="userRole">User</label>
                    @endif
                    @if ($user->role === 'admin')
                        <input type="radio" name="role" value="admin" required checked>
                        <label for="adminRole">Admin</label>
                     @else
                        <input type="radio" name="role" value="admin" required>
                        <label for="adminRole">Admin</label>
                    @endif
                </div><br>
                <label for="phoneNumber">Phone Number</label>
                <input type="number" name="phoneNumber" placeholder="min. 9 numbers" value="{{ $user->phoneNumber }}" required><br>
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
