<!DOCTYPE html>
<html lang="py-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>

<a href="{{ route('user.index') }}">Listar</a><br>
<a href="{{ route('user.show', ['user' => $user->id]) }}">Visualizar</a><br>
<h2>Editar Usuário</h2>

    <form action="{{ route('user-update', ['user' => $user->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome: </label>
    <input type="text"name="name" placeholder="Nome Completo" value="{{ old('name', $user->name) }}"> <br><br>
    <label>Email: </label>
    <input type="email"name="email" placeholder="Melhor Email" value="{{ old('email',$user->email) }}"> <br><br>
    <label>Senha: </label>
    <input type="password"name="password" placeholder="Senha do Usuário" value="{{ old('password') }}"> <br><br>

    <button type="submit">Salvar Edição</button>

    </form>
    
</body>
</html>