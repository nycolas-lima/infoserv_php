<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Formulário do Funcionário</title>
</head>
<body>
    <h1>Cadastro</h1>   

    <form method="POST" action="receber.php">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6"> 
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <br>
        <div>
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email">
        </div>
        <br>
        <button type="submit">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
