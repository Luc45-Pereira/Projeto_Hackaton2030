function togleMenu(){
    const nav = document.getElementById('nav');
    nav.classList.toggle('active');
}

function confirmacao(id,nome,valor){
    var resposta = confirm("Deseja resgatar" + "Produto:" + " " + nome + " " + "Valor em Pontos" + valor + "?");
    if(resposta == true)
    {
      window.location.href = "excluir1.php?id="+id;
    }

}