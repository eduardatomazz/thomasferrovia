
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
    <MAIn>
        <section>
            <section id="entrar">
                <div class="azul">
                    <div class="inf_azul">
                        <h3>REDEFINIÇÂO DE <br> SENHA</h3>
                        <div>
                            <label for="mensagem">Insira sua nova senha:</label>
                            <br>
                            <textarea id="mensagem" name="mensagem"></textarea>
                            <br>
                            <br>
                            <label for="senha">Confirmar nova senha:</label>
                            <br>
                            <input type="password" id="senha" name="senha">
                        </div>
                        <a href="../public/login.php" class="botao3">CONFIRMAR</a>
                    </div>
                </div>
            </section>
        </section>
    </MAIn>    
</body>
</html>