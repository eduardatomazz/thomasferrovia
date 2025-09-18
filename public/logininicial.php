
<?php 

require_once (__DIR__. '/../partials/header.php');
require_once (__DIR__. '/../php/login.php');
?>

<body>
    <form id="paginainicial"  method="post">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required>
        <div class="error" id="erroUsuario"></div>
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <div class="error" id="erroSenha"></div>
        <br>
        <br>
        <button type="submit">Entrar</button>
        <a href="../public/senha.php">Esqueceu a senha?</a>
    </form>
    <script src="../scripts/logininicial.php"></script>
</body>

</html>