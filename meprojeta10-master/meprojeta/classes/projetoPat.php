<?php
class ProjetoPat{
  private $projeto;
  private $patrocinador;
  private $valorinvestimento;
  public function projetoPatr($valorinvestimento){
      $this->valorinvestimento=$valorinvestimento;
  }

  //Getter's
  public function getprojeto(){return $this->projeto;}
  public function getpatrocinador(){return $this->patrocinador;}
  public function getvalorinvestimento(){return $this->valorinvestimento;}

  //Setter's
  public function setprojeto($projeto){$this->projeto = $projeto;}
  public function setpatrocinador($patrocinador){$this->patrocinador = $patrocinador;}
  public function setvalorinvestimento($valorinvestimento){$this->valorinvestimento = $valorinvestimento;}
}
?>
