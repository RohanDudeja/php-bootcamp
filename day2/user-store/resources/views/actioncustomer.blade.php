<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Delete Customer | Customer Store</title>
    <!-- styling etc. -->
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div>
        <form method="POST" action="{{route('customers.destroy',0)}}">
        {{ method_field('DELETE') }}
        @csrf <!-- {{ csrf_field() }} -->
            <div class="form-input">
                <label>ID</label> <input type="text" name="id_number">
            </div>
                <button type="submit">Delete</button>
        </form>
        </div>
        <div>
        <form method="GET" action="{{route('customers.show',0)}}">
        @csrf <!-- {{ csrf_field() }} -->
            <div class="form-input">
                <label>ID</label> <input type="text" name="id_number">
            </div>
            <button type="submit">View</button>
        </form>
        </div>
    </div>
</div>
</body>
</html>
