<?php

return [
    ['GET', '/', function () {
        echo "<h1>Página inicial</h1>";
        echo "<a href='" . url("/funcionarios") . "'>Funcionários</a>";
        echo "<a href='" . url("/pessoas") . "'>Pessoas</a>";
    }],

    ['GET', '/funcionarios', [$funcionarioController, 'listar']],
    ['GET', '/funcionarios/novo', [$funcionarioController, 'novo']],
    ['POST', '/funcionarios', [$funcionarioController, 'criar']],
    ['GET', '/funcionarios/{id}/editar', [$funcionarioController, 'editar']],
    ['POST', '/funcionarios/{id}', [$funcionarioController, 'atualizar']],
    ['POST', '/funcionarios/{id}/deletar', [$funcionarioController, 'deletar']],

    ['GET', '/pessoa', [$pessoaController, 'listar']],
    ['GET', '/pessoa/nova', [$pessoaController, 'novo']],
    ['POST', '/pessoa', [$pessoaController, 'criar']],
    ['GET', '/pessoa/{id}/editar', [$pessoaController, 'editar']],
    ['POST', '/pessoa/{id}', [$pessoaController, 'atualizar']],
    ['POST', '/pessoa/{id}/deletar', [$pessoaController, 'deletar']],
];