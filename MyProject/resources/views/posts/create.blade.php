<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('admin.posts.store')}}" method="post">
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <button>Crea Post</button>
    </form>
</body>
</html>
