<?php

class Conta
{
    private $titular;
    private $saldo;
    private static $numeroDeContas = 0;


    public function __construct (Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo=0;

        self::$numeroDeContas ++; // Poderia ser Conta:: (Classe)
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar){
        if ($valorASacar > $this->saldo){
            echo"Saldo indisponivel";
            return;
        }
        $this->saldo-=$valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if($valorADepositar < 0){
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transferir(float $ValorATransferir, Conta $contaDestino): void
    {
        if ($ValorATransferir > $this->saldo){
            echo "Saldo indisponível";
            return;
        }
        $this->sacar($ValorATransferir);
        $contaDestino->depositar($ValorATransferir);
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}
