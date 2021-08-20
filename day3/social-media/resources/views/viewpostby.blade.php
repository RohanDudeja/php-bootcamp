<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>User Section | Social Media</title>
    <!-- Styles etc. -->
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1>Here's a list of all Posts</h1>
        <table>
            <thead>
            <td>#</td>
            <td>UserName</td>
            <td>PostID</td>
            <td>Content</td>
            </thead>
            <tbody>
            @foreach ($allPosts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td class="inner-table">{{ $post->user_id }}</td>
                    <td class="inner-table">{{ $post->post_id }}</td>
                    <td class="inner-table">{{ $post->content }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
