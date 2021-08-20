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
            <td>UserID</td>
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
    <div>
        <h1>Available Actions</h1>
        <h2>Create a Post</h2>
        <form method="GET" action="{{ config('app.url')}}/user/{user_id}/posts/create">
        @csrf <!-- {{ csrf_field() }} -->
            <input type="hidden" id="user_id" name="user_id" value={{$user_id}}>
            <button type="submit">Create Post</button>
        </form>
        <h2>Get posts for specific user:</h2>
        <form method="GET" action="{{ config('app.url')}}/post/{user_id}">
        @csrf <!-- {{ csrf_field() }} -->
            <div class="form-input">
                <label>UserID</label> <input type="text" name="user_id_get">
            </div>
            <button type="submit">Get Posts</button>
        </form>
        <h2>Get all comments from post</h2>
        <form method="GET" action="{{ config('app.url')}}/post/{post_id}/comments">
        @csrf <!-- {{ csrf_field() }} -->
            <div class="form-input">
                <label>PostID</label> <input type="text" name="post_id">
            </div>
            <button type="submit">Get Comments</button>
        </form>
        <h2>Create a comment on post</h2>
        <form method="POST" action="{{ config('app.url')}}/post/{post_id}/comments">
        @csrf <!-- {{ csrf_field() }} -->
            <input type="hidden" id="user_id" name="user_id" value={{$user_id}}>
            <div class="form-input">
                <label>PostID</label> <input type="text" name="post_id"><br>
                <label>CommentID</label><input type="text" name="comment_id"><br>
                <label>Comment Content</label><input type="text" name="content">
            </div>
            <button type="submit">Comment</button>
        </form>
    </div>
</div>
</body>
</html>
