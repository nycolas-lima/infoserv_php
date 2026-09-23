<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Formulário do Funcionário</title>
</head>
<body>
    
    <div class="card">
        <div class="card-body">
            
        <h1>Cadastro</h1>
        <form method="POST" action="receber.php"  class="form-control">

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o seu nome">
            </div>
            <br>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6" >
                <label for="sobrenome">Sobrenome</label>
                <input class="form-control" type="text" name="sobrenome" id="sobrenome" placeholder="Digite o seu sobrenome">
            </div>
            <br>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6" >
                <label for="cargo">Cargo</label>
                <input class="form-control" type="text" name="cargo" id="cargo" placeholder="Digite o seu cargo">
            </div>
            <br>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6" >
                <label for="setor">Setor</label>
                <input class="form-control" type="text" name="setor" id="setor" placeholder="Digite o seu setor">
            </div>
            <br>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6" >
                <label for="salario">Salário</label>
                <input class="form-control" type="text" name="salario" id="salario" placeholder="Digite o seu salário">
            </div>
            <br>

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6" >
                <label for="cracha">Crachá</label>
                <input class="form-control" type="text" name="cracha" id="cracha" placeholder="Digite o seu crachá">
            </div>
            <br>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6" >
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
            <br>
        </form>

            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>