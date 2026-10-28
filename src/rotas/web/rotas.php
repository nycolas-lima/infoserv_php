<?php

return [
    ['GET', '/', function () {
        echo "<h1>Página inicial</h1>";
        echo "<a href='" . url("/funcionarios") . "'>Funcionários</a>";
        echo "<br>";
        echo "<a href='" . url("/pessoas") . "'>Pessoas</a>";
        echo "<br>";
        echo "<a href='" . url("/usuarios") . "'>Usuarios</a>";
    }],

    ['GET', '/funcionarios', [$funcionarioController, 'listar']],
    ['GET', '/funcionarios/novo', [$funcionarioController, 'novo']],
    ['POST', '/funcionarios', [$funcionarioController, 'criar']],
    ['GET', '/funcionarios/{id}/editar', [$funcionarioController, 'editar']],
    ['POST', '/funcionarios/{id}', [$funcionarioController, 'atualizar']],
    ['POST', '/funcionarios/{id}/deletar', [$funcionarioController, 'deletar']],

    ['GET', '/pessoas', [$pessoaController, 'listar']],
    ['GET', '/pessoas/nova', [$pessoaController, 'novo']],
    ['POST', '/pessoas', [$pessoaController, 'criar']],
    ['GET', '/pessoas/{id}/editar', [$pessoaController, 'editar']],
    ['POST', '/pessoas/{id}', [$pessoaController, 'atualizar']],
    ['POST', '/pessoas/{id}/deletar', [$pessoaController, 'deletar']],

    ['GET', '/usuarios', [$usuarioController, 'listar']],
    ['GET', '/usuarios/novo', [$usuarioController, 'novo']],
    ['POST', '/usuarios', [$usuarioController, 'criar']],
    ['GET', '/usuarios/{id}/editar', [$usuarioController, 'editar']],
    ['POST', '/usuarios/{id}', [$usuarioController, 'atualizar']],
    ['POST', '/usuarios/{id}/deletar', [$usuarioController, 'deletar']],
];