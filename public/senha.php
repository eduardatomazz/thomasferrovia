
<?php 

require_once (__DIR__. '/../partials/header.php');

?>

<body id="comfundo">

  <header>
  </header>
  <div id="navbar">
    <img id="icon" src="../img/logo_cabecalho.png" alt="">
  </div>
  <div class="azul">
 
      <div class="esqueceu">
        <div class="senha">
          <h2>ESQUECEU A SENHA?</h2>
          <p>Informe seu e-mail e enviaremos o código para recuperação de senha</p>
          <form>
            <label for="email">E-mail:</label>
            <input type="email" id="email" placeholder="Digite seu e-mail" required />
            <a href="codigo.php" class="botao3">ENVIAR</a>
          </form>
          <a href="../public/entrar.php" class="login-link">Fazer login</a>
        </div>
      </div>
    
  </div>
</body>
</html>