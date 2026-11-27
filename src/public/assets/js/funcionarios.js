$(document).ready(function () {

    const urlBase = "http://localhost/infoserv_php/";
    const urlListarFuncionarios = urlBase + "funcionarios";

    $.get(urlListarFuncionarios).done(function(response) {
        // montarTabela(response);
        console.log("Listar Funcionários: " + JSON.stringify(response));

    }).fail(function(error) {
        console.log("Deu erro: " + JSON.stringify(error));
    });

    $(".cadastrarFuncionario").on("click", function() {

        $("#tituloModal").text("Cadastrar Funcionário");

    });

    $("#tabelaFuncionarios").on("click", ".btnEditar", function() {

        var id = $(this).val();

        $("#tituloModal").text("Editar Funcionário");

        $.get(urlListarFuncionarios + "/js").done(function(dados) {
            console.log(dados);

        }).fail(function(error) {
            console.log("Deu erro: " + JSON.stringify(error));
        });

        $("#modalFuncionario").modal("show");

    });

    $("#tabelaFuncionarios").on("click", ".btnExcluir", function() {

        var id = $(this).val();

        // Remove o HTML da tabela, no caso a linha clicada
        $(this).closest("tr").remove();

    });

});