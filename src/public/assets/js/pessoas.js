$(document).ready(function () {

    const urlBase = "http://localhost/infoserv_php/";
    const urlListarPessoas = urlBase + "pessoas";

    $.get(urlListarPessoas).done(function(response) {
        // montarTabela(response);
        console.log("Listar Pessoas: " + JSON.stringify(response));

    }).fail(function(error) {
        console.log("Deu erro: " + JSON.stringify(error));
    });

    $(".cadastrarPessoa").on("click", function() {

        $("#tituloModal").text("Cadastrar Pessoa");

    });

    $("#tabelaPessoas").on("click", ".btnEditar", function() {

        var id = $(this).val();

        $("#tituloModal").text("Editar Pessoa");

        $.get(urlListarPessoas + "/js").done(function(dados) {
            console.log(dados);

        }).fail(function(error) {
            console.log("Deu erro: " + JSON.stringify(error));
        });

        $("#modalPessoa").modal("show");

    });

    $("#tabelaPessoas").on("click", ".btnExcluir", function() {

        var id = $(this).val();

        // Remove o HTML da tabela, no caso a linha clicada
        $(this).closest("tr").remove();

    });

});