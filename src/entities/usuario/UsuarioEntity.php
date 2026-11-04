<?php

class UsuarioEntity
{
    private ?int $id = null;
    private string $nomeDeUsuario = "";
    private string $senha = "";
    private float $status = 0;
    private float $cadastroCompleto = 0;

    public static function criarPorDados(object|array $dados): self
    {
        $usuario = new self();

        $usuario->preencher($dados);

        return $usuario;
    }

    public function preencher(object|array $dados): void
    {
        $dados = (object) $dados;

        $this->id = isset($dados->id) ? (int) $dados->id : $this->id;
        $this->nomeDeUsuario = $dados->nomeDeUsuario ?? $this->nomeDeUsuario;
        $this->senha = $dados->senha ?? $this->senha;
        $this->status = isset($dados->status) && $dados->status !== "" ? (float) $dados->status : $this->status;
        $this->cadastroCompleto = isset($dados->cadastroCompleto) && $dados->cadastroCompleto !== "" ? (float) $dados->cadastroCompleto : $this->cadastroCompleto;
    }

    public function toArrayParaBanco(): array
    {
        return [
            "nomeDeUsuario" => $this->nomeDeUsuario,
            "senha" => $this->senha,
            "status" => $this->status,
            "cadastroCompleto" => $this->cadastroCompleto,
        ];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomeDeUsuario(): string
    {
        return $this->nomeDeUsuario;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function getStatus(): float
    {
        return $this->status;
    }

    public function getCadastroCompleto(): float
    {
        return $this->cadastroCompleto;
    }
}