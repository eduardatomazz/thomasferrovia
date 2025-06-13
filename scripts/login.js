const botaoAcessar = document.querySelector('.botao3');

  botaoAcessar.addEventListener('click', function (e) {
    const usuario = document.getElementById('usuario').value.trim();
    const senha = document.getElementById('senha').value.trim();
    const erroUsuario = document.getElementById('erroUsuario');
    const erroSenha = document.getElementById('erroSenha');

    // Limpar mensagens anteriores
    erroUsuario.textContent = '';
    erroSenha.textContent = '';

    let valido = true;

    if (usuario === '') {
      erroUsuario.textContent = 'Preencha o usuário.';
      valido = false;
    } else if (usuario.length < 3) {
      erroUsuario.textContent = 'Usuário deve ter ao menos 3 letras.';
      valido = false;
    }

    if (senha === '') {
      erroSenha.textContent = 'Preencha a senha.';
      valido = false;
    } else if (senha.length < 4) {
      erroSenha.textContent = 'Senha deve ter ao menos 4 caracteres.';
      valido = false;
    }

    if (!valido) {
      e.preventDefault(); // Impede o redirecionamento
    }
  });
