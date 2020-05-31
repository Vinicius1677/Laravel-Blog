<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar novo artigo</title>
</head>
<body>
<form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="">Titulo</label>
        <input type="text" name="title">

        <br>

        <label for="">Subtitulo</label>
        <input type="text" name="subtitle">

        <br>

        <label for="">Conteúdo</label>
        <textarea name="content" cols="30" rows="10"></textarea>
        
        <br>

        <input type="submit" value="Cadastrar Artigo">
    </form>
</body>
</html>