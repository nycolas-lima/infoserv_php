$(document).ready(function () {
    const urlBase = "http://localhost/infoserv_php/";
    const urlListarPessoas = urlBase + "pessoas";

    $(".cadastrarPessoa").on("click", function() {

        $("#tituloModal").text("Cadastrar Pessoa");
    });

    $("#tabelaPessoas").on("click", ".btnEditar", function() {
        var id = $(this).val();
        
        $("#tituloModal").text("Editar Pessoa");

        $
    });

    $("#tabelaPessoas").on("click", ".btnExcluir", function () {
        var id = $(this).val();

        // remove o html da tabela, no caso a linha clicada
        $(this).closest("tr").remove();
    });
});