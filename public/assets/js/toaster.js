// Ativar Toaster por meio de botões de qualquer página como operação de informação
const loading = (messagem) => {
  toastr.options = {
      progressBar: true,
      timeOut: "60000",
      positionClass: "toast-top-center",
  };
  toastr["info"](messagem);
};


// Ativar Toaster ao receber uma mensagem de sessão de qualquer controller como operação de sucesso
const message = (mensagem) => {
    toastr.options = {
        progressBar: true,
        timeOut: "5000",
        positionClass: "toast-top-center",
    };
    toastr["success"](mensagem);
};
