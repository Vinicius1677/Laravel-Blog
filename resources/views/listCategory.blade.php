<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categoria</title>
</head>
<body>
    <h2><b>Aqui estão as categorias cadastradas e seus respectivos artigos</b></h2>
    <p>{{$category->id}} {{$category->title}}</p>
    @php
        if ($posts) {
            echo "<h3>Aqui estão os artigos relacionados a esta categoria</h3>";
            foreach ($posts as $post) {
                echo "<p>$post->title, $post->subtitle</p>";
            }
        }   
    @endphp
</body>
</html>