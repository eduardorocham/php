<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    protected string $nome;
    private string $cpf;

    public function __construct(string $nome, string $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarCpf(): string
    {
        return $this->cpf;
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    protected function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}