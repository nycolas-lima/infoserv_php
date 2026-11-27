$(document).ready(function () {

    const urlBase = "http://localhost/infoserv_php/";
    const urlListarUsuarios = urlBase + "usuarios";

    $.get(urlListarUsuarios).done(function(response) {
        // montarTabela(response);
        console.log("Listar Usuários: " + JSON.stringify(response));

    }).fail(function(error) {
        console.log("Deu erro: " + JSON.stringify(error));
    });

    $(".cadastrarUsuario").on("click", function() {

        $("#tituloModal").text("Cadastrar Usuário");

    });

    $("#tabelaUsuarios").on("click", ".btnEditar", function() {

        var id = $(this).val();

        $("#tituloModal").text("Editar Usuário");

        $.get(urlListarUsuarios + "/js").done(function(dados) {
            console.log(dados);

        }).fail(function(error) {
            console.log("Deu erro: " + JSON.stringify(error));
        });

        $("#modalUsuario").modal("show");

    });

    $("#tabelaUsuarios").on("click", ".btnExcluir", function() {

        var id = $(this).val();

        // Remove o HTML da tabela, no caso a linha clicada
        $(this).closest("tr").remove();

    });

});