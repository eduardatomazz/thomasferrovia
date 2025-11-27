<?php


include("../src/User.php");
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit();
}

$user = new User($mysqli);
$id_usuario = $_SESSION['id_usuario'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['foto_perfil'])) {

    // Pasta onde as imagens serão salvas
    $target_dir = "../img/";

    // Nome do arquivo original
    $nome_original = basename($_FILES["foto_perfil"]["name"]);

    // Gera nome único
    $novo_nome = uniqid() . "_" . $nome_original;

    // Caminho final
    $target_file = $target_dir . $novo_nome;

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Verifica se é imagem
    $check = getimagesize($_FILES["foto_perfil"]["tmp_name"]);
    if ($check === false) {
        die("O arquivo não é uma imagem.");
    }

    // Tamanho máximo
    if ($_FILES["foto_perfil"]["size"] > 500000) {
        die("Imagem muito pesada.");
    }

    // Permitir apenas certos formatos
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
        die("Apenas JPG, JPEG e PNG são permitidos.");
    }

    // Tenta mover a imagem
    if (move_uploaded_file($_FILES["foto_perfil"]["tmp_name"], $target_file)) {

        // Atualiza imagem no banco
        $sql = "UPDATE Usuario SET foto_perfil = '$novo_nome' WHERE id_usuario = $id_usuario";

        if ($mysqli->query($sql) === TRUE) {
            header("Location: ../cadastro/cadastro.php");
            exit();
        } else {
            echo "Erro no banco: " . $mysqli->error;
        }

    } else {
        echo "Erro ao enviar o arquivo.";
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

<body>
    <form action="upload_foto.php" method="POST" enctype="multipart/form-data">
        <div class="azull">
<h3>Upload de Foto:</h3>
<p>
        <input type="file" name="foto_perfil" required>

        <button type="submit">Upload</button>

        <br>
        <p><a href="../cadastro/cadastro.php">Voltar</a></p>
        </div>
    </form>
</body>
</html>
