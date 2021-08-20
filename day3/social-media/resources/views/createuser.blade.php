<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Create User | Social Media</title>
    <!-- styling etc. -->
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <form method="POST" action="{{ config('app.url')}}/users">
        @csrf <!-- {{ csrf_field() }} -->
            <h1> Enter Details to create a User</h1>
            <div class="form-input">
                <label>Name</label> <input type="text" name="name">
            </div>

            <div class="form-input">
                <label>User ID</label> <input type="text" name="user_id">
            </div>
            <div class="form-input">
                <label>Password</label> <input type="text" name="password">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
</body>
</html>
