<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário do Funcionário</title>
</head>
<body>
    <h1>Cadastro</h1>   

    <form method="POST" action="salvar-funcionario.php">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <br>
        <div>
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="sobrenome">
        </div>
        <br>
        <div>
            <label for="cargo">Cargo</label>
            <input type="text" name="cargo" id="cargo">
        </div>
        <br>
        <div>
            <label for="setor">Setor</label>
            <input type="text" name="setor" id="setor">
        </div>
        <br>
        <div>
            <label for="salario">Salário</label>
            <input type="text" name="salario" id="calario">
        </div>
        <br>
        <div>
            <label for="cracha">Crachá</label>
            <input type="text" name="cracha" id="cracha">
        </div>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>