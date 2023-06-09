<?php
require_once 'src/conexao.php';
require_once 'src/cachorro.php';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Instancia a classe Cachorro
    $cachorro = new Cachorro();

    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $raca = $_POST['raca'];
    $cor = $_POST['cor'];
    $sexo = $_POST['sexo'];

    // Chama a função incluir para adicionar um novo cachorro
    $cachorro->incluir($nome, $raca, $cor, $sexo);

    // Redireciona para a página de listagem
    header('Location: listar.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar cachorro</title>
    <link rel="stylesheet" href="style/register.css">
</head>
<body>
    <h1>Cadastrar cachorro</h1>
    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required><br>

        <label>Raça:</label>
        <input type="text" name="raca" required><br>

        <label>Cor:</label>
        <input type="text" name="cor" required><br>

        <label>Sexo:</label>
        <input type="radio" name="sexo" value="Macho" required> Macho
        <input type="radio" name="sexo" value="Femea" required> Fêmea<br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
