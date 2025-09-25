
<?php 

require_once (__DIR__. '/../partials/header.php');
require_once (__DIR__. '/../php/logininicial.php');


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
                            if(isset($_POST('submit'))){
                                $email = mysqli_real_escape_string($con, $_POST['email']);
                                $password = mysqli_real_escape_string($con, $_POST['password']);

                                $result = mysqli_query($con, "SELECT * FROM users WHERE email= '$email' AND senha='$password' ") or die("Select Error");
                                $row = mysqli_fetch_assoc($result);

                                if(is_array($row) && !empty($row)){
                                    $_SESSION['valid'] = $row['Email'];
                                    $_SESSION['username'] = $row['Username'];
                                    $_SESSION['age'] = $row['Age'];
                                    $_SESSION['id'] = $row['Id'];
                                }else{
                                    echo "<div calss='message'>
                                    <p>Wrong Username or Password</p>
                                    </div> <br> ";
                                    echo "<a href='index.php'><button class='btn' >Go Back</buttom> ";

                                    }
                                if(isset($_SESSION['valid'])){
                                    header("Location: iniciofuncionario.php");
                                }
                            }else{
                        ?>

                        <div>
                        <h3>CONECTE-SE AGORA</h3>
                            <form id="formLogin" method="post">
                                <label for="usuario">Login:</label><br>
                                <input type="text" id="usuario" name="usuario">
                                <div class="error" id="erroUsuario"></div><br><br>
                                
                                <label for="senha">Senha:</label><br>
                                <input type="password" id="senha" name="senha">
                                <div class="error" id="erroSenha"></div><br><br>
                                <a href="../public/senha.php">Esqueceu a senha?</a>
                                <button class="botao3" type="submit">ACESSAR</button>                               
                            </form>
                        </div>
    
                    </div>
                    <?php } ?>
                </div>
            </section>
        </section>
    </main>    
</body>
</html>