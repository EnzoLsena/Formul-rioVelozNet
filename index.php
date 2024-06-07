<?php

// Obtém os dados do formulário
$email = $_POST['email'] ?? "";
$senha = $_POST['senha'] ?? "";

if ($email != "" && $senha != "") {
    // Tenta incluir o arquivo de configuração
    if (!file_exists('formulario.php')) {
        die('Arquivo de configuração ausente');
    }

    include_once('formulario.php'); 

    // Verifica se $conexao está definido e é uma conexão válida
    if (!isset($conexao) || !$conexao instanceof mysqli) {
        die('Erro de conexão com o banco de dados');
    }

    // Consulta para verificar se o email e senha correspondem a um registro na tabela de login
    $sql = "SELECT * FROM login WHERE email = ? AND senha = ?";
    
    // Preparar a consulta para evitar SQL Injection
    if ($stmt = $conexao->prepare($sql)) {
        $stmt->bind_param('ss', $email, $senha);
        $stmt->execute();
        $resultado = $stmt->get_result();

        // Verifica se encontrou um registro correspondente
        if ($resultado->num_rows == 1) {
            // Login válido
            echo "Login bem-sucedido! Redirecionando...";
            // Redireciona para a próxima página após o login
            header("Location: formulario.php");
            exit();
        } else {
            // Login inválido
            echo "Email ou senha incorretos.";
        }

        // Fecha a declaração
        $stmt->close();
    } else {
        echo "Erro na preparação da consulta: " . $conexao->error;
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Img/ico-vlz2.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/Login.css">
    <title>Login</title>
</head>
<body>
  <div class="login-card">
    <img src="../Img/Vlz.png" alt="Logo" width="150px">
    <h2> Página de Login </h2>
    <h3> Coloque suas credenciais </h3>

    <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="senha" placeholder="Senha">
        <button type="submit" name="submit"> Entrar </button>
    </form>
  </div>  
</body>
</html>
