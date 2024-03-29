<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa
{
    private $endereco;

    public function __construct(string $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperarEndereco(): Endereco
    {
        return $this->endereco;
    }
}