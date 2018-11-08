function valida() {
  if (document.dados.nome.value == "" || document.dados.nome.length < 8){
    alert("Preencha o campo nome corretamente!");

  }
  if (document.dados.senha.value == ""){
    alert("Preencha o campo de senha!");

  }
  if (document.dados.senha.value != document.dados.csenha.value){
    alert("Senhas diferentes!");
  }
}
