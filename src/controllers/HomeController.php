<?php

class HomeController extends BaseController
{
    public function listar(): void
    {
        $dados = [
            "funcionarios" => "Funcionários",
            "pessoas" => "Pessoas",
            "usuarios" => "Usuários"
        ];

        $this->view("home", [
            "dados" => $dados,
        ]);
    }

}