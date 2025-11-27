<?php
include("../config/db2.php");
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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Foto de Perfil</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <form action="upload_foto.php" method="POST" enctype="multipart/form-data">
        <h2>Upload de Foto:</h2>
        <input type="file" name="foto_perfil" required>
        <button type="submit">Upload</button>
        <br>
        <a href="index.php">Home</a>
    </form>
</body>
</html>
