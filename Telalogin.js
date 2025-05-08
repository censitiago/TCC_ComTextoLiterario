function login(event){
    event.preventDefault();

    const email =  document.getElementById('email').value;
    const senha = document.getElementById('senha').value;

    /*Cadastro Banco de dados*/
    let tipo = "";
    if(email === "coordenador@gmail.com" && senha === "1234"){
        tipo = "coordenador";
        localStorage.setItem("usuarioLogado","coordenador");

    } else if (email === "bolsista@gmail.com" && senha === "1234"){
        tipo = "bolsista";
        localStorage.setItem("usuarioLogado", "bolsista");
    } else{
        alert("Login Inválido");
        return;
    }


localStorage.setItem("tipoUsuario", tipo);
window.location.href = "PáginaInicial.html"
}