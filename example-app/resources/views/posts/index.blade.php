<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>all posts</h1>
    <ul>
         @foreach($allposts as $post)
            <li>
                Author:{{ $post->author }},
                Title:{{ $post->title }},
                Content:{{ $post->content }}

            </li>

        @endforeach
    </ul>
   
</body>
</html>