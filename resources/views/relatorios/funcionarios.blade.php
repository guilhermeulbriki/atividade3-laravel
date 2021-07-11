<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatorio</title>
</head>
<body>
    <h1>Escolha um cargo:</h1>

    <form action="{{ url('relatorios/funcionarios') }}">
        <label>Escolha o cargo</label>
        <select name="id">
            @foreach ($cargos as $cargos)
                <option value="{{ $cargos->id }}">{{ $cargos->nome }}</option>
            @endforeach
        </select>
        <button type="submit">Pesquisar</button>
    </form>

    <br> <br>

    @if($funcionarios_cargos != null)
        <h2>Funcionarios neste cargo</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ano Admissão</th>
            </tr>

            @foreach ($funcionarios_cargos as $funcionario)
                <tr>
                    <td>{{ $funcionario->id }}</td>
                    <td>{{ $funcionario->nome }}</td>
                    <td>{{ $funcionario->ano_admissao }}</td>
                </tr>
            @endforeach
        </table>
    @endif
</body>
</html>
