@extends('layoutadmin')

@section('yieldPlace')
    <form action="/admin/users/insertuser" method="POST">
        @csrf
        <label for="email">Email</label><br>
        <input type="email" name="email" placeholder="email@email.com"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" placeholder="min. 8 chars"><br>
        <label for="role">Role</label><br>
        <input type="radio" name="role">
        <label for="adminRole">Admin</label>
        <input type="radio" name="role">
        <label for="userRole">User</label><br>
        <label for="phoneNumber">Phone Number</label><br>
        <input type="number" name="phoneNumber" placeholder="min. 9 numbers"><br>
        <button type="submit">INSERT</button>
    </form>
@endsection
