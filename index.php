<?php
session_start();
require 'conexao.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistema de Login PHP</title>
</head>
<body>
<h1>Sistema de Login PHP</h1>
<?php if (isLoggedIn()): ?>
<p>Olá, <?php echo $_SESSION['user_name']; ?>. 
<a href="principal.php">Painel</a> | <a href="logout.php">Sair</a></p>
<?php else: ?>
<p>Olá, visitante. <a href="form-verifica.php">Login</a></p>
<?php endif; ?>
</body>
</html>