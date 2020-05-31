<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artigos</title>
</head>
<body>
    <h2>Artigo:</h2>
    <p>{{$post->title}}, {{$post->subtitle}}</p>
    @php
        if ($author) {
            echo "<h3>Autoria:</h3>";
            echo $author->name, $author->email;
        }

        if ($categories) {
            echo "<h3>Categorias</h3>";
            foreach ($categories as $category) {
                echo "<p>$category->id $category->title</p>";
            }
        }
    @endphp

</body>
</html>