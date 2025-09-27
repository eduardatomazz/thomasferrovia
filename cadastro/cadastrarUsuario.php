<?php
    include "../config/db.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $_POST['new_username'];
        $senha = $_POST['new_password'];
        $adm = $_POST['new_func'];

        $sqlInsert = 'Insert Into Usuario ( usuario, senha, adm) VALUES ($usuario, $senha, $adm)';

        if ($mysqli->query($sqlInsert) === true) {
        echo "Novo registro criado com sucesso.";
        } else {
            echo "Erro " . $sqlInsert . '<br>' . $mysqli->error;
        }
        $conn->close();
        }

?>