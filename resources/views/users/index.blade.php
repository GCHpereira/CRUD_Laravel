<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
<a href="{{ route('user.create') }}">Cadastrar</a><br>
    <h2>Listar Usuários</h2>
    @if(session('success'))
    <p style="color: #086;">
        {{session('success')}}
    </p>
    @endif

    @forelse ($users as $user)
    ID: {{$user->id}} <br>
    Nome: {{$user->name}} <br>
    E-mail: {{$user->email}} <br>
    <a href="{{ route('user.show', ['user' => $user->id])}}">Vizualizar</a><br>
    <a href="{{ route('user.edit', ['user' => $user->id])}}">Editar</a><br>
<form method ="POST" action="{{ route('user.destroy', ['user' => $user-> id]) }}">
    @csrf
    @method('delete')
    <button type="submit" onclick="return confirm('Tem certeza que deseja apagar esse Usuário?')">Apagar</button>
</form>
    <hr>
@empty

    @endforelse

</body>
</html>
