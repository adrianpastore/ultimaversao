<?php
require_once('../classes/projeto.php');
require_once('../classes/patrocinador.php');
require_once('projetoDAO.php');
require_once('patrocinadorDAO.php');
require_once('absdao.php');

class projPatDao extends dao{
    public function lista() {
        $conn = $this->criaConexao();
        $sql = 'SELECT * FROM projetos';
        $res = pg_query($conn,$sql);
        $projetopats = array();
        while($projetopat = pg_fetch_assoc($res)){
            array_push($projetopats,$projetopat);
        }
        pg_close($conn);
        return $projetopats;
    }
    public function add($projetopat){
        $conn = $this->criaConexao();
        $sql = 'INSERT INTO "projetoPatrocinador" ("idProjeto", "idPatrocinador", "valorInvestimento") VALUES ($1, $2, $3)';
        $vetor = array($projetopat->getprojeto()->getIdProjeto(), $projetopat->getpatrocinador()->getIdPatrocinador(), $projetopat->getvalorinvestimento());
        pg_query_params($conn,$sql,$vetor);
        pg_close($conn);
    }
    public function deletar($id) {
        $conn = $this->criaConexao();
        $sql2 = 'delete from projetos where "idProjeto" = $1';
        pg_query_params($conn, $sql2, array($id));
        pg_close($conn);
    }
    public function busca($id) {
        $conn = $this->criaConexao();
        $sql3 = 'SELECT * FROM projetos WHERE "idProjeto" = $1';
        $vetor2 = array($id);
        $res = pg_query_params($conn,$sql3,$vetor2);
        $buscaprojetopat = array();
        while($projetopat = pg_fetch_assoc($res)){
            array_push($buscaprojetopat,$projetopat);
        }
        pg_close($conn);
        return $buscaprojetopat;
    }
}

?>
