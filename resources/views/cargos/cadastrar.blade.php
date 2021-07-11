<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargos - Cadastrar</title>
</head>
<body>
    <form action="{{ route('cargos.store') }}" method="POST">
        @csrf
        <br> <label>Nome:</label>
        <input type="text" name="nome" placeholder="Nome">
        <br><label>Descrição:</label>
        <textarea name="descricao" placeholder="Descrição"></textarea>
        <br><button type="submit">Cadastrar</button>
    </form>
</body>
</html>
