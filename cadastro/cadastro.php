<?php

include "../config/db.php";
session_start();

// Mensagem de registro
$register_msg = "";

// Buscar foto do usuário logado
$id_usuario_logado = $_SESSION['id_usuario'] ?? null;
$foto = "../img/default.jpg";

if ($id_usuario_logado) {
    $sql_foto = "SELECT foto_perfil FROM Usuario WHERE id_usuario = $id_usuario_logado";
    $result_foto = $mysqli->query($sql_foto);
    if ($result_foto && $row = $result_foto->fetch_assoc()) {
        if (!empty($row['foto_perfil'])) {
            $foto = "../img/" . $row['foto_perfil'];
        }
    }
}

// Processar cadastro
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['register'])) {
    $new_nome = $_POST['new_nome'] ?? "";
    $new_user = $_POST['new_username'] ?? "";
    $new_pass = $_POST['new_password'] ?? "";
    $new_func = $_POST['new_func'] ?? "";
    $new_email = $_POST['new_email'] ?? "";
    $new_idade = $_POST['new_idade'] ?? "";

    if ($new_user && $new_pass && $new_nome && $new_email && $new_idade !== "") {
        $stmt = $mysqli->prepare("INSERT INTO Usuario (nome, usuario, email, senha, adm, idade) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssii", $new_nome, $new_user, $new_email, $new_pass, $new_func, $new_idade);

        if ($stmt->execute()) {
            $register_msg = "Usuário cadastrado com sucesso!";
        } else {
            $register_msg = "Erro ao cadastrar novo usuário: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $register_msg = "Preencha todos os campos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Novo Usuário</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body id="comfundo">

<header>
    <div id="navbar">
            <img id="icon" src="../img/logo_cabecalho.png" alt="">
        </div>
    </div>
    <div class="cor"></div>
    <div id="menuLateral" class="menu-lateral">
        <button class="fechar-btn" onclick="fecharMenu()">X</button>
        <ul>
            <li><a href="../public/inicioadm.php">INÍCIO</a></li>
            <li><a href="../public/dashboard.php">DASHBOARD</a></li>
            <li><a href="../public/rotas.php">ROTAS</a></li>
            <li><a href="../public/monitoramento.php">MONITORAMENTO</a></li>
            <li><a href="../public/relatorioeanalise.php">RELATÓRIO E ANÁLISE</a></li>
            <li><a href="../public/alertaenotificacoes.php">ALERTAS E NOTIFICAÇÕES</a></li>
            <li><a href="../cadastro/cadastro.php">CADASTRAR NOVOS USUÁRIOS</a></li>
            <li><a href="../index.php">SAIR</a></li>
        </ul>
    </div>
    <button id="abrirMenu" class="abrir-btn" onclick="abrirMenu()">☰</button>
</header>

<main>
    <div class="azul">
        <div class="inf_azull">
            <form method="post">
                <div>
                    <br>
                    <img src="<?= $foto ?>" alt="Foto de Perfil" style="width:100px; height:100px; border-radius:50%;">
                    <br><br>
                    <a href="../public/upload_foto.php" class="trocarfoto">Trocar Foto de Perfil</a>
                    <br><br>
                </div>

                <h3>Cadastro Novo Usuário</h3>
                <?php if($register_msg): ?>
                    <p><?= $register_msg ?></p>
                <?php endif; ?>

                <div class="flex">
                    <div>
                        <input class="inputt" type="text" name="new_nome" placeholder="Nome" required>
                        <br>
                        <input class="inputt" type="text" name="new_username" placeholder="Novo Usuário" required>
                        <br>
                        <input class="inputt" type="password" name="new_password" placeholder="Nova Senha" required>
                        <br>
                        <input class="inputt" type="text" name="new_email" placeholder="E-mail" required>
                        <br>
                        <input class="inputt" type="number" name="new_idade" placeholder="Idade" required>
                        <br>
                    </div>
                </div>

                <select class="botao3" name="new_func">
                    <option value="1">ADM</option>
                    <option value="0" selected>FUNC</option>
                </select>

                <button class="botao2" type="submit" name="register" value="1">Cadastrar</button>
            </form>
            <p><a href="../public/inicioadm.php">Voltar</a></p>
        </div>
    </div>
</main>

<script src="../scripts/menu.js"></script>
</body>
</html>
