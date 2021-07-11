<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionarios - Editar</title>
</head>
<body>
    <form action="{{ route('funcionarios.update', $funcionarios->id) }}" method="POST">
        @csrf
        @method('PUT')
        <br> <label>Nome:</label>
        <input type="text" name="nome" value="{{ $funcionarios->nome }}">
        <br> <label>CPF:</label>
        <input type="text" name="cpf" value="{{ $funcionarios->cpf }}">
        <br> <label>E-mail:</label>
        <input type="email" name="email" value="{{ $funcionarios->email }}">
        <br> <label>Salário Base:</label>
        <input type="text" name="salario_base" value="{{ $funcionarios->salario_base }}">
        <br> <label>Disciplina:</label>
        <select name="cargos_id">
          @foreach ($cargos as $cargos)
            <option value="{{ $cargos->id }}">{{ $cargos->nome }}</option>
          @endforeach
        </select>
        <br> <label>Ano Admissão:</label>
        <input type="number" name="ano_admissao" value="{{ $funcionarios->ano_admissao }}">
        <br><button type="submit">Atualizar</button>
    </form>
</body>
</html>
