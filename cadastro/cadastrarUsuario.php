<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $_POST['new_username'];
        $senha = $_POST['new_password'];
        $adm = $_POST['new_func'];

        $sqlInsert = Insert Into Usuario ( usuario, senha, adm)
    }

?>