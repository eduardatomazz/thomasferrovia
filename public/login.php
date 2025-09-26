
<?php 

require_once (__DIR__. '/../partials/header.php');



?>

<body >
    <header>
        <div id="navbar">
            <img id="icon" src="../img/logo_cabecalho.png" alt="">
        </div>
        <div class="cor">
        </div>
    </header>
    <main>
        <section>
            <section id="entrar">
                <div class="azul">
                    <div class="inf_azul">
                        <?php

                            include("../config/db.php");
                            $msg = "";
                            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                                $email =  $_POST['email'] ?? "";
                                $pass = $_POST['senha'] ?? "";

                                $stmt = $mysqli->prepare("SELECT id_usuario, nome, usuario, email, idade, senha FROM usuario_adm WHERE email=? AND senha=?");
                                $stmt->bind_param("ss", $email, $pass);
                                $stmt->execute();
                                $result = $stmt->get_result();
                                $dados = $result->fetch_assoc();
                                $stmt->close();


                               if ($dados) {
                                    $_SESSION["id_usuario"] = $dados["id_usuario"];
                                    $_SESSION["usuario"] = $dados["usuario"];
                                    header("Location: inicioadm.php");
                                    exit;
                                } else {
                                    echo "<div>
                                    <p>Usuário ou senha incorretos!</p>
                                    </div>";
                                } 

                            }
                        ?>

                        <div>
                        <h3>CONECTE-SE AGORA</h3>
                            <form id="formLogin" method="POST">
                                <label for="usuario">Email:</label><br>
                                <input type="email" id="email" name="email" required>
                                <div class="error" id="erroUsuario"></div><br><br>
                                
                                <label for="senha">Senha:</label><br>
                                <input type="password" id="senha" name="senha" required>
                                <div class="error" id="erroSenha"></div><br><br>
                                <a href="../public/senha.php">Esqueceu a senha?</a>
                                <input class="botao3" type="submit" name="submit" value="Login" required>                             
                            </form>
                        </div>
    
                    </div>
                    
                </div>
            </section>
        </section>
    </main>    
</body>
</html>
