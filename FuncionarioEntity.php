<?php

class FuncionarioEntity {
    private ?int $id = null;
    private string $nome = "";
    private string $sobrenome = "";
    private float $salario = 0;
    private string $cargo = "";
    private string $setor = "";
    private string $cracha = "";

    public static function criarPorDados(object|array $dados): self {
        $funcionario = new self();

        $funcionario->preencher($dados);

        return $funcionario;
    }

    public function preencher(object|array $dados): void {
        $dados = (object) $dados;

        $this->id = isset($dados->id) ? (int) $dados->id : $this->id;
        $this->nome = $dados->nome ?? $this->nome;
        $this->sobrenome = $dados->sobrenome ?? $this->sobrenome;
        $this->salario = isset($dados->salario) ? (float) $dados->salario : $this->salario;
        $this->cargo = $dados->cargo ?? $this->cargo;
        $this->setor = $dados->setor ?? $this->setor;
        $this->cracha = $dados->cracha ?? $this->cracha;
    }

    public function toArrayParaBanco(): array {
        return [
            "nome" => $this->nome,
            "sobrenome" => $this->sobrenome,
            "salario" => $this->salario,
            "cargo" => $this->cargo,
            "setor" => $this->setor,
            "cracha" => $this->cracha,
        ];
    }

    public function obterId(): ?int {
        return $this->id;
    }

    public function obterNome(): ?string {
        return $this->nome;
    }

    public function obterSobrenome(): ?string {
        return $this->sobrenome;
    }

    public function obterSalario(): ?float {
        return $this->salario;
    }

    public function obterCargo(): ?string {
        return $this->cargo;
    }

    public function obterSetor(): ?string {
        return $this->setor;
    }

    public function obterCracha(): ?string {
        return $this->cracha;
    }
}