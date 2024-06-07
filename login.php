<?php
// Iniciar a sessão
session_start();

// Incluir a configuração do banco de dados
include_once('config.php');

// Processar o formulário de login quando submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if ($email != '' && $senha != '') {
        // Consulta ao banco de dados
        $sql = "SELECT * FROM login WHERE email = ? AND senha = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $resultado = $stmt->get_result();

        // Verificar se encontrou um registro
        if ($resultado->num_rows == 1) {
            // Login bem-sucedido
            echo "Login bem-sucedido! Redirecionando...";
            header("Location: formulario.php");
            exit();
        } else {
            // Login inválido
            echo "Email ou senha incorretos.";
        }

        // Fechar a conexão
        $stmt->close();
        $conexao->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Login.css">
    <title>Login</title>
</head>
<body>
  <div class="login-card">
    <img src="../Img/Vlz.png" alt="Logo" width="150px">
    <h2>Página de Login</h2>
    <h3>Coloque suas credenciais</h3>

    <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="senha" placeholder="Senha">
        <button type="submit" name="submit">Entrar</button>
    </form>
  </div>
</body>
</html>
