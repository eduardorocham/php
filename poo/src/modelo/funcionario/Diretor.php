<?php

namespace Alura\Banco\Modelo\Funcionario;

class Diretor extends Funcionario
{
    public function calcularBonificacao(): float
    {
        return $this->recuperarSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}