<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cargos</title>
</head>
<body>

    <a href="{{url('cargos/create')}}">Adicionar Novo</a>

    <br>

    @foreach ($cargos as $cargos)
        <br>
        {{ $cargos->id }}
        {{ $cargos->nome }}
        {{ $cargos->descricao }}

        <form action="{{ route('cargos.destroy',$cargos->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>

        <a href="{{url('cargos/'.$cargos->id.'/edit')}}">
            <button> Editar</button>
        </a>
    @endforeach

</body>
</html>
