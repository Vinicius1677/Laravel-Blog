<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Endereço</title>
</head>
<body>
    <h3>Endereço:</h3>
    <p>{{$address->street}}, {{$address->number}}, {{$address->city}}/{{$address->state}}</p>
    @php
        if ($user) {
            echo "<p>Este endereço pertence ao Usuário: $user->name, $user->email</p>";
        }
    @endphp
</body>
</html>