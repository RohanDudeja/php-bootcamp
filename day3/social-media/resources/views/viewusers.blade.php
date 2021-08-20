<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>View Users | Social Media</title>
    <!-- Styles etc. -->
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1>Here's a list of all Users</h1>
        <table>
            <thead>
            <td>#</td>
            <td>Name</td>
            <td>UserName</td>
            </thead>
            <tbody>
            @foreach ($allUsers as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td class="inner-table">{{ $user->name }}</td>
                <td class="inner-table">{{ $user->user_id }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
