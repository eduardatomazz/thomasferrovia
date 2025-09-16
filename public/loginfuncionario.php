<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Funcionario</title>
        <link rel="stylesheet" href="../styles/style.css">
        <script src="../scripts/logininicial.js"></script>
</head>
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
                        <div>
                        <h3>CONECTE-SE AGORA</h3>
                            <form id="formLogin">
                                <label for="usuario">Login:</label><br>
                                <input type="text" id="usuario" name="usuario">
                                <div class="error" id="erroUsuario"></div><br><br>
                                
                                <label for="senha">Senha:</label><br>
                                <input type="password" id="senha" name="senha">
                                <div class="error" id="erroSenha"></div><br><br>
                                <a href="../public/senha.html">Esqueceu a senha?</a>
                                <button class="botao3" type="submit">ACESSAR</button>                               
                            </form>
                        </div>
    
                    </div>
                </div>
            </section>
        </section>
    </main>    
</body>
</html>