<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Comments | Social Media</title>
    <!-- Styles etc. -->
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1>Here's a list of all Comments</h1>
        <table>
            <thead>
            <td>#</td>
            <td>PostID</td>
            <td>UserName</td>
            <td>Comments</td>
            </thead>
            <tbody>
            @foreach ($allComments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td class="inner-table">{{ $comment->post_id }}</td>
                    <td class="inner-table">{{ $comment->user_id }}</td>
                    <td class="inner-table">{{ $comment->content }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
