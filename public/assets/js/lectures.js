// Mostrar formulário de Criação de Palestras para Profissionais e Administradores na página Minha Conta

const create_lecture = () => {

    let create_lecture_styled_input_container = document.getElementById(
        "create_lecture_styled_input_container"
    );

    if (create_lecture_styled_input_container.className != "hidden") {
        create_lecture_styled_input_container.className = "hidden"       
    }
    
    else {
        let create_lecture_styled_input_container = document.getElementById("create_lecture_styled_input_container");
        create_lecture_styled_input_container.className = "visible mt-2.5 mb-5";        
    }
};

// Mostrar formulário de Edição de Palestras para Profissionais e Administradores na página Palestra
const edit_lecture = (name, info, date, link) => {
    let edit_lecture = document.getElementById("edit_lecture");

    if (edit_lecture.className == "hidden") {
        edit_lecture.className = "block mb-2 -mt-2.5";

        let edit_lecture_name = document.getElementById("edit_lecture_name");
        edit_lecture_name.value = name;

        let edit_lecture_info = document.getElementById("edit_lecture_info");
        edit_lecture_info.value = info;

        let edit_lecture_date = document.getElementById("edit_lecture_date");
        edit_lecture_date.value = date;

        let edit_lecture_link = document.getElementById("edit_lecture_link");
        edit_lecture_link.value = link;
    }
    
    else {
        edit_lecture.className = "hidden";
    }
};

/* Função desabilitada
const excluir_curso = (id,name) => {

    if (confirm('Deseja realmente apagar "'+name+'"?') == true) {
        loading("Excluindo curso");
        window.location.href = "/courses/destroy/"+id;
      }
}
*/
