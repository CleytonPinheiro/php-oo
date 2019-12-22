<?php


class Titular
{
    private $cpf;
    private $nome;

    public function __construct(string $cpf,$nome)
    {

        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;
    }

    public function recuperaNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit;
        }
    }

}
