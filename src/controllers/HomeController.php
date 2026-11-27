<?php

class HomeController extends BaseController
{
    public function index() {
        $this->view("welcome");
    }
    
    public function listar(): void
    {
        $dados["pagina"] = "home";
        $dados["titulo"] = "Sistema Infoserv - Home";
        $dados["dados"] = [
            "funcionarios" => "Funcionários",
            "pessoas" => "Pessoas",
            "usuarios" => "Usuários"
        ];

        $this->view("principal", $dados);
    }

}