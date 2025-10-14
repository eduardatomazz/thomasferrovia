function openLeftMenu() {
    document.getElementById("leftMenu").style.display = "block";
}

function closeLeftMenu() {
    document.getElementById("leftMenu").style.display = "none";
}

function openRightMenu() {
    document.getElementById("rightMenu").style.display = "block";
}

function closeRightMenu() {
    document.getElementById("rightMenu").style.display = "none";
}

function abrirMenu() {
    document.getElementById("menuLateral").style.left = "0";
}

function fecharMenu() {
    document.getElementById("menuLateral").style.left = "-260px";
}

// Button to go back
document.getElementById("backBtn").addEventListener("click", function () {
    history.back();
});

// Monitoring
function mostrarDetalhes(tipo) {
    const detalhes = document.getElementById("detalhes");
    if (!detalhes) {
        // Create the detalhes element if it doesn't exist
        const div = document.createElement("div");
        div.id = "detalhes";
        document.body.appendChild(div);
    }

    if (tipo === 'manutencao') {
        const html = `
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
        `;

        document.getElementById("detalhes").innerHTML = html;
        document.getElementById("detalhes").classList.remove("hidden");
    }
}

// Uncomment if needed
// function voltar() {
//     document.getElementById("detalhes").classList.add("hidden");
// }