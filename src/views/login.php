<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Infoserv - Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" defer></script>
</head>

<body class="d-flex justify-content-center align-items-center min-vh-100 bg-white p-3">

    <main class="card bg-light p-5 w-100" style="max-width: 450px;">
        <h1 class="h3 text-center mb-4">Sistema Infoserv</h1>
        <h2 class="h4 text-center mb-4">Tela de Login</h2>

        <form action="" method="post">
            <div class="mb-4">
                <label for="usuario" class="form-label">Usuário</label>
                <input
                    type="text"
                    class="form-control"
                    name="usuario"
                    id="usuario"
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
                <div class="form-text">
                    Nunca compartilhe sua senha com outras pessoas.
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Entrar</button>
        </form>
    </main>

</body>
</html>