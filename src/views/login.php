<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Infoserv - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</head>
<body class="d-flex justify-content-center align-items-center min-vh-100">

    <main class="card bg-1 p-5 w-100" style="max-width: 400px;">
        <h1 class="h3 text-center mb-4">Sistema Infoserv</h1>
        <h2 class="h4 text-center mb-4">Tela de Login</h2>

        <form action="" method="post">
            <div class="mb-4">
                <label for="nome" class="form-label">Usuário</label>
                <input
                    type="text"
                    class="form-control"
                    name="nome"
                    id="nome"
                    placeholder="Digite seu usuário"
                    required
                >
            </div>

            <div class="mb-5">
                <label for="senha" class="form-label">Senha</label>
                <input
                    type="password"
                    class="form-control"
                    name="senha"
                    id="senha"
                    placeholder="Digite sua senha"
                    required
                >
            </div>

            <button type="submit" class="btn btn-solid theme-primary w-100">Entrar</button>
        </form>
    </main>

</body>
</html>
