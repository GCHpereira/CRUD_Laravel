<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <a href="{{ route('user.index') }}">Listar</a><br>
    <h2>Cadastrar Novo Usuário</h2>

    @if($errors->any())
        @foreach ($errors->all() as $error)
        <p style="color: #f00;">
        {{ $error }}
        @endforeach
        </p>
    
    @endif
    <form action="{{ route('user-store') }}" method="POST">
        @csrf
        @method('POST')

        <label>Nome: </label>
    <input type="text"name="name" placeholder="Nome Completo" value="{{ old('name') }}"> <br><br>
    <label>Email: </label>
    <input type="email"name="email" placeholder="Melhor Email" value="{{ old('email') }}"> <br><br>
    <label>Senha: </label>
    <input type="password"name="password" placeholder="Senha do Usuário" value="{{ old('password') }}"> <br><br>

    <button type="submit">Castrar Novo Usuário</button>

    </form>
    
</body>
</html>