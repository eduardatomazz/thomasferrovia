
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
            <h3>7658</h3>
            <div class="flex"><img class="verde" src="../img/circuloverde.png" alt="">
                <p>EM MOVIMENTO</h1>
                </p>
            </div>
            <br>
            <p>VELOCIDADE:</p>
            <p>200KM/H</p>
            <br>
            <p>HORÁRIOS:</p>
            <p>Saída:</p>
            <p class="horario">13:30</p>
            <p>Previsão de chegada:</p>
            <p class="horario">16:44</p>
        </div>
        <div class="vermelho">
            <p>A falta de sinalização esta causando 1 hora de atraso do horário previsto de chegada</p>
        </div>
    </div>

    </div>
    <div class="destino">
        <p>DESPACHO: JOINVILLE</p>
        <p>DESTINO: INÁCIO MARTINS</p>
    </div>

        <script src="../scripts/script.php"></script>
    
</body>
</html>

