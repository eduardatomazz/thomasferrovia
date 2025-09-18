
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
    <div class="inf_azul">
      <div class="esqueceu">
        <div class="senha">
          <h2>ENVIAMOS UM CÓDIGO <br> PARA SEU E-MAIL</h2>
          <p>Insira no campo abaixo o codigo <br> de verificação de 4 digitos </p>

          <form>

            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            <a href="novasenha.php" class="botao3">ENVIAR</a>
          </form>
          <p>Caso não encontre o e-mail na sua caixa de <br> entrada, verifique a pasta de Spam!</p>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>

