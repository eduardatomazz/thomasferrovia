<?php

function openLeftMenu() {
    echo '<script>document.getElementById("leftMenu").style.display = "block";</script>';
}

function closeLeftMenu() {
    echo '<script>document.getElementById("leftMenu").style.display = "none";</script>';
}

function openRightMenu() {
    echo '<script>document.getElementById("rightMenu").style.display = "block";</script>';
}

function closeRightMenu() {
    echo '<script>document.getElementById("rightMenu").style.display = "none";</script>';
}

function abrirMenu() {
    echo '<script>document.getElementById("menuLateral").style.left = "0";</script>';
}

function fecharMenu() {
    echo '<script>document.getElementById("menuLateral").style.left = "-260px";</script>';
}

// Button to go back
echo '<script>
document.getElementById("backBtn").addEventListener("click", function () {
    history.back();
});
</script>';

// Monitoring
function mostrarDetalhes($tipo) {
    $detalhes = '<div id="detalhes"></div>'; // Placeholder for the details section
    $html = '';

    if ($tipo === 'manutencao') {
        $html = '
            <section class="manutencao">
            <h2>ALERTA PARA MANUTENÇÃO!</h2>
            <img src="../img/trem.png" alt="Trem" style="width: 300px; height: 500px;">
            <h2>MANUTENÇÃO DO ÓLEO DAS ENGRENAGENS</h2>
            <h3>Modelo do trem:</h3><p>LNER Class A4 4468 Mallard</p>
            <h3>Ano:</h3><p>1938</p>
            <h3>Data da manutenção:</h3><p>01/04/2025</p>
            <h3>Horário:</h3><p>10hrs</p>
            <h3>Nome do Terceiro:</h3><p>Ícaro Botelho</p>
            <h3>Monitor do terceiro:</h3><p>João Bornelli</p>
            <h3>Renovação:</h3><p>6 meses ou 50.000 km</p>
            </section>
        ';

        echo '<script>
            document.getElementById("detalhes").innerHTML = ' . json_encode($html) . ';
            document.getElementById("detalhes").classList.remove("hidden");
        </script>';
    }
}

// Uncomment if needed
// function voltar() {
//     echo '<script>document.getElementById("detalhes").classList.add("hidden");</script>';
// }

?>