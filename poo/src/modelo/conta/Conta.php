<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar)
    {   
        $tarifaDeSaque = $valorASacar * 0.05;
        $valorSaque = $valorASacar + $tafifaDeSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        
        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorADepositar) {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositarvalor;
    }
    

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public static function recuperarNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
}