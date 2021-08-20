<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login | Social Media</title>
    <!-- styling etc. -->
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div>
            <form id="myForm" method="GET" action="{{route('posts.index',['user_id' => 'user_id'])}}">
            @csrf <!-- {{ csrf_field() }} -->
                <div class="form-input">
                    <label>UserName</label> <input type="text" name="user_id">
                </div>
                <div class="form-input">
                    <label>Password</label> <input type="text" name="password">
                </div>
                <button name="submit" type="submit">LogIn</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
