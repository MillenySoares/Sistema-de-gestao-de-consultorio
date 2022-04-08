<?php
    class Usuario{
        public int $id;
        public string $nome;
        public string $CPF;
        public string $telefone;
        public string $dataNasc;
        public string $email;
        public string $senha;

        public function __construct(string $nome, string $CPF, string $telefone, string $dataNasc, string $email, string $senha){
            $this->nome = $nome;
            $this->CPF = $CPF;
            $this->telefone = $telefone;
            $this->dataNasc = $dataNasc;
            $this->email = $email;
            $this->senha = $senha;
        }
    }
?>