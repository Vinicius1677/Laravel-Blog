<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <form action="{{ route('admin.login.do') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" value="viniciusbarros694@gmail.com" 
          placeholder="Informe seu email" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="pwd">Senha:</label>
          <input type="password" class="form-control" 
          placeholder="Informe sua senha" id="pwd" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>