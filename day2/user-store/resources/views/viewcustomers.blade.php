<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>View Products | Product Store</title>
    <!-- Styles etc. -->
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1>Here's a list of available products</h1>
        <table>
            <thead>
            <td>FirstName</td>
            <td>LastName</td>
            <td>ID</td>
            </thead>
            <tbody>
            @foreach ($allCustomers as $customer)
                <tr>
                    <td>{{ $customer->first_name }}</td>
                    <td class="inner-table">{{ $customer->last_name }}</td>
                    <td class="inner-table">{{ $customer->id_number }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
