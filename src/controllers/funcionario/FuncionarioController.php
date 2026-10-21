<?php

class FuncionarioController {
    protected FuncionarioModel $funcionarioModel;

    public function __construct(FuncionarioModel $funcionarioModel)
    {
        $this->funcionarioModel = $funcionarioModel;
    }
}