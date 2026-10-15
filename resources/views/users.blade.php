<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a> |
        <a href="{{ url('/about') }}">About</a> |
        <a href="{{ url('/customers') }}">Customer Accounts</a> |
        <a href="{{ url('/users') }}">User Accounts</a>
    </nav>
    <hr>
    <h1>User Accounts List</h1>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Role</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user['id'] }}</td>
            <td>{{ $user['username'] }}</td>
            <td>{{ $user['role'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>