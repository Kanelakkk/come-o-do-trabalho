<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Cadastro</title>
    <link rel="stylesheet" href="css/login-cadrastro.css">
</head>
<body>
    <div class="container">
        <div class="form-container login-container">
            <form action="login.php" method="post">
                <h2>Login</h2>
                <label for="login-email">Email:</label>
                <input type="email" id="login-email" name="email" required>

                <label for="login-senha">Senha:</label>
                <input type="password" id="login-senha" name="senha" required>

                <button type="submit">Entrar</button>
                <p>Não tem uma conta? <a href="#cadastrar">Cadastre-se</a></p>
            </form>
        </div>

        <div class="form-container cadastro-container" id="cadastrar">
            <form action="cadastrar.php" method="post">
                <h2>Cadastro</h2>
                <label for="cadastro-nome">Nome:</label>
                <input type="text" id="cadastro-nome" name="nome" required>

                <label for="cadastro-email">Email:</label>
                <input type="email" id="cadastro-email" name="email" required>

                <label for="cadastro-senha">Senha:</label>
                <input type="password" id="cadastro-senha" name="senha" required>

                <button type="submit">Cadastrar</button>
                <p>Já tem uma conta? <a href="#login">Faça login</a></p>
            </form>
        </div>
    </div>
</body>
</html>
