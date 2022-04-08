<?php
require_once("../utils/Banco.php");
require_once("Usuario.php");

class UsuarioDAO{
    private static $instance;

    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function save(Usuario $usuario){
        $stm = Banco::getConnection()->prepare("INSERT INTO usuario (nome, CPF, telefone, dataNasc, email, senha) VALUES (:nome, :CPF, :telefone, :dataNasc, :email, :senha)");
        $stm->bindParam('nome', $usuario->nome);
        $stm->bindParam('CPF', $usuario->CPF);
        $stm->bindParam('telefone', $usuario->telefone);
        $stm->bindParam('dataNasc', $usuario->dataNasc);
        $stm->bindParam('email', $usuario->email);
        $stm->bindParam('senha', $usuario->senha);

        $stm->execute();
    }
}


?>