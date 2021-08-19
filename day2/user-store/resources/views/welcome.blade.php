<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Customer Store</title>

    </head>
    <body class="antialiased">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">Customer Store</div>
            <div class="links">
                <a href="{{ config('app.url')}}/customers/create">Create</a>
                <a href="{{ config('app.url')}}/customers">View</a>
                <a href="{{ config('app.url')}}/customers_actions">Actions</a>
            </div>
        </div>
    </div>
    </body>
</html>
