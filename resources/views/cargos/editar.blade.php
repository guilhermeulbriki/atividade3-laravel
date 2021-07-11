<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargos - Editar</title>
</head>
<body>
    <form action="{{ route('cargos.update',$cargos->id) }}" method="POST">
        @csrf
        @method('PUT')
        <br> <label>Nome:</label>
        <input type="text" name="nome" value="{{$cargos->nome}}">
        <br> <label>Descrição:</label>
        <textarea name="descricao">{{$cargos->descricao}}</textarea>
        <br><button type="submit">Alterar</button>
    </form>
</body>
</html>
