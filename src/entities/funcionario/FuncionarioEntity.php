<?php

class FuncionarioEntity {
    public $id = null;
    public $nome = "";
    public $sobrenome = "";
    private $salario = 0;
    public $cargo = "";
    public $setor = "";
    protected $cracha = "";

    public function criarPorDados(object|array $dados): self {
       $funcionario = new self();
       $funcionario->preencher($dados);

       return $funcionario;
    }

    public function preencher(object|array $dados) {
        $dados = (object) $dados;

        $this->id = isset($dados->id) ? (int) $dados->id : $this->id;
        $this->nome =  $dados->nome ?? $this->nome;
        $this->sobrenome = $dados->sobrenome ?? $this->sobrenome;
        $this->salario = isset($dados->salario) ? (float) $dados->salario : $this->salario;
        $this->cargo = $dados->cargo ?? $this->cargo;
        $this->setor = $dados->setor ?? $this->setor;
        $this->cracha = $dados->cracha ?? $this->cracha;
    }

    public function toArrayParabanco() {
        return  [
            "nome"=> $this->nome,
            "sobrenome"=> $this->sobrenome,
            "salario"=> $this->salario,
            "cargo"=> $this->cargo,
            "setor"=> $this->setor,
            "cracha"=> $this->cracha,
        ];
    } 

    public function obterId() {
        return $this->id;
    }

    public function obterNome() {
        return $this->nome;
    }

    public function obterSobrenome() {
        return $this->sobrenome;
    }

    public function obterSalario() {
        return $this->salario;
    }

    public function obterCargo() {
        return $this->cargo;
    }

    public function obterSetor() {
        return $this->setor;
    }

    public function obterCracha() {
        return $this->cracha;
    }
}