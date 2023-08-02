<?php 

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function subirdeNivel()
    {
        $this->receberAumento($this->recuperarSalario() * 0.75);
    }
}