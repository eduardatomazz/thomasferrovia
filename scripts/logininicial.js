document.addEventListener("DOMContentLoaded", function () {
    const formulario = document.getElementById("formLoginFuncionario");

    formulario.addEventListener("submit", function(e) {
        e.preventDefault();

        let valido = true;

        document.getElementById("erroUsuario").textContent = "";
        document.getElementById("erroSenha").textContent = "";

        const usuario = document.getElementById("login").value.trim();
        const senha = document.getElementById("senha").value.trim();

        if (usuario.length < 7)
        document.getElementById("erroUsuario").textContent = "Usuário invalido"
        valido = false;

        const senhaRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[$*&@#])[0-9a-zA-Z$*&@#]{8,}$/;

        if (!senhaRegex.test(senha)) {
            document.getElementById("erroSenha").textContent = "Senha inválida.Deve ter pelo menos 8 caracteres, sendo eles pelo menos 1 letra maiuscula, 1 numero, 1 simbolo";
            valido = false;
        }

        if (valido) {
            alert("Formulário enviado com sucesso!");
            formulario.reset();
            window.location.href = "../public/inicio.html";
        }
    });
});