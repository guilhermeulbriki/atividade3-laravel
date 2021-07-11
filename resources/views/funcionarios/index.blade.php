<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionarios</title>
</head>
<body>

    <a href="{{url('funcionarios/create')}}">Adicionar Novo</a>

    <br>

    @foreach ($funcionarios as $funcionarios)
        <br>
        {{ $funcionarios->id }}
        {{ $funcionarios->nome }}
        {{ $funcionarios->cargos->nome }}

        <form action="{{ route('funcionarios.destroy',$funcionarios->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>

        <a href="{{url('funcionarios/'.$funcionarios->id.'/edit')}}">
            <button> Editar</button>
        </a>
    @endforeach

</body>
</html>
