
<?php 

require_once (__DIR__. '/../partials/header.php');

?>

<body id="semfundo">
    <header>
        <div id="navbar">
            <button type="submit" class="seta_sair">
             <a href="dashboard.php" ><</a>
            </button>
            <img id="icon" src="../img/logo_cabecalho.png" alt="">
        </div>

    </header>

    <div class="rotas">
        <p>DASHBOARD</p>
    </div>

    <div class="flex">
        <div class="numero">
            <h3>6754</h3>
            <div class="flex"><img class="verde" src="../img/circulovermelho.png" alt="">
                <p>PARADO</h1>
                </p>
            </div>
            <br>
            <p>VELOCIDADE:</p>
            <p>400KM/H</p>
            <br>
            <p>HORÁRIOS:</p>
            <p>Saída:</p>
            <p class="horario">05:12</p>
            <p>Previsão de chegada:</p>
            <p class="horario">21:25</p>
        </div>
    </div>

    </div>
    <div class="destino">
        <p>DESPACHO: SALVADOR</p>
        <p>DESTINO: ITAPOÁ</p>
    </div>

        <script src="../scripts/script.php"></script>
    
</body>
</html>
