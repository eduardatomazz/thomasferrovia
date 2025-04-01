function validaLogin(){
    const login = document.getElementById('login').value.trim;
    const senha = document.getElementById('senha').value.trim;

    console.log(login);
    console.log(senha);

    if(!login){
        alert('Por favor, preencha com seu login');
        return;
    } else if (!senha || senha > 7 ||isNaN(senha)){
        alert('Por favor, insira sua senha');
        return;
    }
}