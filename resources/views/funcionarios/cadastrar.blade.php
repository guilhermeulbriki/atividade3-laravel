<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionarios - Cadastrar</title>
</head>
<body>
    <form action="{{ route('funcionarios.store') }}" method="POST">
        @csrf
        <br> <label>Nome:</label>
        <input type="text" name="nome" placeholder="Nome">
        <br> <label>CPF:</label>
        <input type="text" name="cpf" placeholder="000-000-000-00">
        <br> <label>E-mail:</label>
        <input type="email" name="email" placeholder="email@email.com">
        <br> <label>Salário Base:</label>
        <input type="text" name="salario_base" placeholder="Salário Base">
        <br> <label>Disciplina:</label>
        <select name="cargos_id">
          @foreach ($cargos as $cargos)
            <option value="{{ $cargos->id }}">{{ $cargos->nome }}</option>
          @endforeach
        </select>
        <br> <label>Ano Admissão:</label>
        <input type="number" name="ano_admissao" placeholder="Ano Admissão">
        <br><button type="submit">Cadastrar</button>
    </form>
</body>
</html>
