<?php

class Conta
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo;
    private static $numeroDeContas = 0;


    public function __construct (string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular=$cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular=$nomeTitular;
        $this->saldo=0;

        self::$numeroDeContas ++; // Poderia ser Conta:: (Classe)
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
        return $this->cpfTitular;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit;
        }
    }
    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}
