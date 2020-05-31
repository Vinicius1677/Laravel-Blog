<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <h2>Listagem de Usuário</h2>
    <p>O nome do usuário é: {{$user->name}} e o email é: {{$user->email}}</p>
    @php
        //Condicional para a exibição de usuários que possuem endereços cadastrados
        if ($address) {
            echo "<h3>Endereço</h3>";
            echo "<p>$address->street, $address->number, $address->city/$address->state</p>";
        }
        if ($posts) {
            echo "<h3>Artigos</h3>";
            foreach ($posts as $post) {
                echo "<p>$post->title, $post->subtitle</p>";
            }   
        }

    @endphp
</body>
</html>