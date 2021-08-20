<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Create Post| User | Social Media</title>
    <!-- styling etc. -->
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <form method="POST" action="{{ config('app.url')}}/ post/{post_id}/comments">
        @csrf <!-- {{ csrf_field() }} -->
            <h1> Create Post</h1>
            <input type="hidden" id="user_id" name="user_id" value={{$user_id}}>
            <div class="form-input">
                <label>PostID</label> <input type="text" name="post_id">
            </div>

            <div class="form-input">
                <label>Content</label> <input type="text" name="post_content" value="">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
</body>
</html>
