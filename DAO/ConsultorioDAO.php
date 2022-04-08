<?php
require_once("../utils/Banco.php");
require_once("../models/projetoConsultorio.php");

class ConsultorioDAO{
    private static $instance;

    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function save(projetoConsultorio $consultorio){
        $stm = Banco::getConnection()->prepare("INSERT INTO projetoConsultorio (nome, CPF, telefone, dataNasc, email, senha) VALUES (:nome, :CPF, :status, :telefone, :dataNasc, :email, :senha)");
        $stm->bindParam('nome', $consultorio->nome);
        $stm->bindParam('CPF', $consultorio->CPF);
        $stm->bindParam('telefone', $consultorio->telefone);
        $stm->bindParam('dataNasc', $consultorio->dataNasc);
        $stm->bindParam('email', $consultorio->email);
        $stm->bindParam('senha', $consultorio->senha);

        $stm->execute();
    }
}


?>