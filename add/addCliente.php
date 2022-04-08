<?php 
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once("../models/Usuario.php");
  require_once("../models/UsuarioDAO.php");
  var_dump($_POST);
  UsuarioDAO::getInstance()->save(new Usuario($_POST['nome'], $_POST['CPF'], $_POST['telefone'], $_POST['dataNasc'], $_POST['email'], $_POST['senha']));

  session_start();
  $_SESSION['novo_cliente'] = $novoCliente->nome;
  header("Location: ../pages/pageCadastro.php");
    
?>