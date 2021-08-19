<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Social Media</title>

</head>
<body class="antialiased">
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">DashBoard</div>
        <div class="links">
            <form method="GET" action="{{ config('app.url')}}/users/create">
            @csrf <!-- {{ csrf_field() }} -->
                <button type="submit">Create User</button>
            </form>
            <form method="GET" action="{{ config('app.url')}}/users">
            @csrf <!-- {{ csrf_field() }} -->
                <button type="submit">View All Users</button>
            </form>
            <form method="POST" action="{{ config('app.url')}}/login">
            @csrf <!-- {{ csrf_field() }} -->
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
