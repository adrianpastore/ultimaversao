<?php require('../base/header.php'); ?>


<h3 class="display-4 text-center"> Cadastro de Projetos </h3>
<hr class="bg-dark mb-4 w-25">
<div class="container container mt-4 mb-5">
    <div class="container">
      <form action="../alterar/projetoAltera.php?idProjeto=<?php echo $_GET['idProjeto'] ?>" method="post">
          <div class="form-group">
            <label>Empresa Responsável:</label>
              <select required name="empresa" class="form-control" id="empresa" >
                <option value="" disabled selected>Selecionar</option>
                  <?php
                    require_once('../DAO/empresaDAO.php');
                    $emp = new EmpresaDao();
                    $listEmp = $emp->lista();
                    foreach($listEmp as $e) {
                        echo
                        '<option value='.$e['CNPJ'].'>'.$e['nome'] .'  ('.$e['CNPJ'].')'.'</option>';
                    }
                  ?>
              </select>
          </div>
          <div class="form-group">
            <label>Nome do Projeto</label>
            <input required name="nomeProjeto" type="text" class="form-control" placeholder="Projeto">
          </div>
          <div class="form-group">
            <label>Descrição:</label><br>
            <textarea required name="descricao" rows="8" cols="80" class="form-control" placeholder="Descreva o projeto"></textarea>
          </div>

        <br>
        </div>
        <input id="cadastrar" name="cadastrar" class="btn btn-outline-info" type="submit" value="Cadastrar Projeto">

      </form>
      <br>

    </div>
</div>

<?php require('../base/footer.php'); ?>
