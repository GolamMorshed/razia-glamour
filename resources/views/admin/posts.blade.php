<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin-Posts</title>
</head>
<body>
    <p>This page is created to upload post</p>
    <form action="{{route('create_post')}}" method="POST">
        @csrf 
        <input type="file" name="image">
        <input type="text" name="name">
        <input type="text" name="color">
        <input type="number" name="price">
        <button type="btn">save</button>
    </form>
</body>
</html>