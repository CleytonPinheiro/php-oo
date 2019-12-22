<?php

class Conta
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo=0;

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

    public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }


}
