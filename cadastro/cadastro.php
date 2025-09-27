<?php

include "../config/db2.php";


$register_msg = "";
if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['register'])){
    $new_user = $_POST['new_username'] ?? "";
    $new_pass = $_POST['new_password'] ?? "";
    $new_func = $_POST['new_func'] ?? "";
    if($new_user && $new_pass){
        $stmt = $mysqli -> prepare("INSERT INTO usuario (id_usuario, nome, usuario, email, idade, senha) VALUES (?,?,?)");
        $stmt -> bind_param("sss", $new_user, $new_pass,$new_func);
        
        if($stmt->execute()) {
            $register_msg = "Usuário cadastrado com sucesso!";
        }else{
            $register_msg = "Erro ao cadastrar novo usuário.";
        };

        $stmt->close();
    }else{
        $register = "Preencha todos os campos.";
    };
};
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Novo Usuário do Sistema</title>
    <link rel="stylesheet" href="../style.css" />
</head>
    <body id="comfundo">

    <body>
        <header>
            <div id="navbar">
                <img id="icon" src="../img/logo_cabecalho.png" alt="">
            </div>
            <div class="cor">
            </div>
        </header>


        <div class="azul">
            <div class="inf_azul">
                <form method="post" action="cadastrarUsuario.php">
                    <h2>Bem-vindo <?php= $_SESSION["username"] ?>!</h2>
                    <h3>Cadastro Novo Usuário</h3>
                    <?php if($register_msg):  ?> <p> <?php= $register_msg ?> </p> <?php endif; ?>
                    <input class="input" type="text" name="new_username" placeholder="Novo Usuário" required> 
                    <br>
                    <input class="input" type="password" name="new_password" placeholder="Nova Senha" required>
                    <select class="botao3" name="new_func">
                        <option value="1">ADM</option>
                        <option value="0" selected>FUNC</option>
                    </select>
                    <button class="botao2" type="submit" name="register" value="1">Cadastrar</button>
                </form>
                <p><a href="../public/inicioadm.php">Voltar</a></p>
                
            </div>
        </div>
    </body>
    
</body>
</html>
    