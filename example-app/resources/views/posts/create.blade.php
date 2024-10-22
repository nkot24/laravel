<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create post</h1>
    <form action="/post" method="post">
        @csrf
        <label for="author">Author:</label>
        Author: <input type="text" name="author" id="author"> <br>
        <label for="title">Title:</label>

        Title: <input type="text" name="title" id="title"><br>
        <label for="content">Content:</label>
        Content: <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <input type="submit" value="save">
    </form>
</body>
</html>