<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = isset($_POST['usuario']) ? trim($_POST['usuario']) : '';
    $senha = isset($_POST['senha']) ? trim($_POST['senha']) : '';
    $erros = [];

    if (strlen($usuario) < 7) {
        $erros['usuario'] = 'Usuário inválido';
    }
    $senhaRegex = '/^(?=.\d)(?=.[a-z])(?=.[A-Z])(?=.[$&@#])[0-9a-zA-Z$&@#]{8,}$/';
    if (!preg_match($senhaRegex, $senha)) {
        $erros['senha'] = 'Senha inválida. Deve ter pelo menos 8 caracteres, sendo eles pelo menos 1 letra maiúscula, 1 número, 1 símbolo';
    }

    // Exemplo de usuário e senha fixos (substitua por consulta ao banco de dados)
    $usuarioCorreto = 'funcuser';
    $senhaCorreta = 'Func@123';

    if (empty($erros)) {
        if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
            $_SESSION['funcionario'] = $usuario;
            header('Location: ../public/iniciofuncionario.php');
            exit();
        } else {
            $erros['geral'] = 'Usuário ou senha incorretos.';
        }
    }
}
?>
<!-- Exemplo de exibição de erros e formulário (adicione ao seu HTML) -->
<?php if (!empty($erros)): ?>
    <div style="color:red;">
        <?php foreach ($erros as $erro) echo '<p>' . $erro . '</p>'; ?>
    </div>
<?php endif; ?>