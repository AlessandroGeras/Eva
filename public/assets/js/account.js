//Mostrar o formulário de Avisos Gerais para Profissionais e Administradores na página Minha Conta
const warning = () => {    
    
    let warning_styled_input_container=document.getElementById("warning_styled_input_container");

    if (warning_styled_input_container.className != "hidden") {
        warning_styled_input_container.className = "hidden"       
    }    

    else {
        warning_styled_input_container.className="visible mt-2.5 mb-5";
    }
};

//Fechar o Aviso Geral na página inicial, caso exista
const warning_close = () => {
    
    let index_warning=document.getElementById("index_warning");

    index_warning.style.display="none";
};

//Mostrar o formulário de pesquisa de usuários para Profissionais e Administradores na página Minha Conta
const users = () => {    
    
    let users_styled_input_container=document.getElementById("users_styled_input_container");

    if (users_styled_input_container.className != "hidden") {
        users_styled_input_container.className = "hidden"       
    }    

    else {
        users_styled_input_container.className="block -mt-2.5";
    }
};