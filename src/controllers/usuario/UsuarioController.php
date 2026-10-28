<?php

class UsuarioController extends BaseController
{
    private UsuarioModel $usuarioModel;
    private string $entity = UsuarioEntity::class;

    public function __construct(UsuarioModel $usuarioModel)
    {
        $this->usuarioModel = $usuarioModel;
    }

    public function listar(): void
    {
        try {
            $registros = $this->usuarioModel->listar();
            $usuarios = $this->criarEntidades($this->entity, $registros);
        } catch (Exception $erro) {
            $usuarios = [];

            $this->mensagemErro("Erro ao listar usuários: " . $erro->getMessage());
        }

        $this->view("usuario/listar", [
            "usuarios" => $usuarios,
        ]);
    }

    public function novo(): void
    {
        $this->view("usuario/form", [
            "titulo" => "Novo usuario",
            "action" => url("/usuarios"),
            "usuario" => new UsuarioEntity(),
        ]);
    }

    public function criar(): void
    {
        try {
            $usuario = $this->criarEntidadePeloPost($this->entity);

            $this->salvarEntidade($this->usuarioModel, $usuario);

            $this->mensagemSucesso("Usuário cadastrado com sucesso!");

            $this->redirecionar("/usuarios");
        } catch (Exception $erro) {
            $this->mensagemErro("Erro ao cadastrar usuário: " . $erro->getMessage());

            $this->redirecionar("/usuarios/novo");
        }
    }

    public function editar(int|string $id): void
    {
        try {
            $registros = $this->usuarioModel->listarPorId((int) $id);

            if (empty($registros)) {
                $this->mensagemErro("Usuário não encontrado.");

                $this->redirecionar("/usuarios");
            }

            $usuario = $this->criarEntidade($this->entity, $registros[0]);

            $this->view("usuario/form", [
                "titulo" => "Editar usuário",
                "action" => url("/usuarios/{$id}"),
                "usuario" => $usuario,
            ]);
        } catch (Exception $erro) {
            $this->mensagemErro("Erro ao buscar usuário: " . $erro->getMessage());

            $this->redirecionar("/usuarios");
        }
    }

    public function atualizar(int|string $id): void
    {
        try {
            $usuario = $this->criarEntidadePeloPost($this->entity);

            $this->atualizarEntidade($this->usuarioModel, $id, $usuario);

            $this->mensagemSucesso("Usuário atualizado com sucesso!");

            $this->redirecionar("/usuarios");
        } catch (Exception $erro) {
            $this->mensagemErro("Erro ao atualizar usuário: " . $erro->getMessage());

            $this->redirecionar("/usuarios/{$id}/editar");
        }
    }

    public function deletar(int|string $id): void
    {
        try {
            $this->usuarioModel->excluir((int) $id);

            $this->mensagemSucesso("Usuário excluído com sucesso!");
        } catch (Exception $erro) {
            $this->mensagemErro("Erro ao excluir usuário: " . $erro->getMessage());
        }

        $this->redirecionar("/usuarios");
    }
}