<?php

  require_once('../classes/patrocinador.php');
  require_once('../DAO/patrocinadorDAO.php');
  $patrocinadorDao = new patrocinadorDao();
  $patrocinador = new Patrocinador($_POST['nomePatrocinador'],$_POST['tipoPatrocinador']);
  $patrocinadorDao->alterar($_GET['idPatrocinador'], $patrocinador->getNome(),$patrocinador->getTipo());
  require_once('../navegacao/patrocinador.php');

?>
