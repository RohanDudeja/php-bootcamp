<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Create Customer | Customer Store</title>
    <!-- styling etc. -->
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <form method="POST" action="{{ config('app.url')}}/customers">
        @csrf <!-- {{ csrf_field() }} -->
            <h1> Enter Details to create a Customer</h1>
            <div class="form-input">
                <label>First Name</label> <input type="text" name="first_name">
            </div>

            <div class="form-input">
                <label>Last Name</label> <input type="text" name="last_name">
            </div>

            <div class="form-input">
                <label>ID</label> <input type="text" name="id_number">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
</body>
</html>
