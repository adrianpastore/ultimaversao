<?php

  require_once('../classes/projeto.php');
  require_once('../DAO/projetoDAO.php');
  require_once('../DAO/empresaDAO.php');
  $projetoDao = new ProjetoDao();
  $projeto = new Projeto($_POST['nomeProjeto'],$_POST['descricao'],$_POST['cnpj']);
  $projetoDao->alterar($_GET['idProjeto'], $projeto->getNome(), $projeto->getDesc(), $projeto->getEmpresa()->getcnpj());
  require_once('../navegacao/projetos.php');
?>
