<?php 
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once("../models/projetoConsultorio.php");
  require_once("../DAO/ConsultorioDAO.php");
  
  ConsultorioDAO::getInstance()->save(new projetoConsultorio($_POST['nome'], $_POST['CPF'], $_POST['dataNasc'], $_POST['telefone'], $_POST['email'], $_POST['senha']));

  session_start();
  $_SESSION['novo_cliente'] = $novoCliente->nome;
  header("Location: pageCadstro.php");
    
?>