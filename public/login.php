
<?php 

require_once (__DIR__. '/../partials/header.php');

?>

<body id="comfundo">
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
                        <div>
                            <h3>CONECTE-SE AGORA</h3>
                            <form id="formLoginAdm">
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
                </div>
            </section>
        </section>
    </main>
    <script src="../scripts/login.php"></script>    
</body>
</html>
