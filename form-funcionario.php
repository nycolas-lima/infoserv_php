<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Funcionário</title>
</head>
<body>
    <h1>Cadastrar Funcionário</h1>
    <form method="POST" action="salvar-funcionario.php"  class="form-control">

        <div>
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o seu nome">
        </div>
        <br>

        <div>
            <label for="sobrenome">Sobrenome</label>
            <input class="form-control" type="text" name="sobrenome" id="sobrenome" placeholder="Digite o seu sobrenome">
        </div>
        <br>

        <div>
            <label for="cargo">Cargo</label>
            <input class="form-control" type="text" name="cargo" id="cargo" placeholder="Digite o seu cargo">
        </div>
        <br>

        <div>
            <label for="setor">Setor</label>
            <input class="form-control" type="text" name="setor" id="setor" placeholder="Digite o seu setor">
        </div>
        <br>

        <div>
            <label for="salario">Salário</label>
            <input class="form-control" type="text" name="salario" id="salario" placeholder="Digite o seu salário">
        </div>
        <br>

        <div>
            <label for="cracha">Crachá</label>
            <input class="form-control" type="text" name="cracha" id="cracha" placeholder="Digite o seu crachá">
        </div>
        <br>
        
        <div>
            <button class="btn btn-primary" type="submit">Salvar</button>
        </div>
        <br>
    </form>
</body>
</html>