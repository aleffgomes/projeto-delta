<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Atualizar aluno</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/Home">Inicio</a></li>
              <li class="breadcrumb-item"><a href="/alunos">Alunos</a></li>
              <li class="breadcrumb-item active">Visualizar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h1 style="margin:0.5% 0;" class="card-title">Dados do cliente</h1>
                <a style="float:right;" href="/alunos" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Voltar</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body row">
                    <div class="col-12">
                      <div class="profile-pic text-center">
                        <?php if (empty($aluno['foto'])) : ?> 
                             <div class="img-usr">
                                <img id="imgUsr" class="just-profile-pic img-img-usr" src="../../img/default.png" Alt="Imagem">
                            </div>
                        <?php else: ?> 
                             <div class="img-usr">
                                <img id="imgUsr" class="just-profile-pic img-img-usr" src="../../img/<?= $aluno['foto'] ?>" Alt="Imagem">
                            </div>
                        <?php endif; ?> 
                      </div>
                    </div>
                     
                    <div class="form-group col-12">
                        <label for="inputName">Nome</label>
                        <input disabled value="<?= $aluno['nome'] ?>" required type="text" class="form-control form-control-sm" id="inputName" name="nome" placeholder="Nome completo">
                    </div>

                    <div class="form-group col-4">
                        <label for="inputCEP">Informe o CEP</label>
                        <input disabled value="<?= $aluno['cep'] ?>" required type="text" class="form-control form-control-sm" id="inputCEP" name="cep" placeholder="CEP">
                    </div>

                    <div class="form-group col-4">
                        <label for="logradouro">Logradouro</label>
                        <input disabled value="<?= $aluno['logradouro'] ?>" required type="text" class="form-control form-control-sm" id="logradouro" name="logradouro" placeholder="Logradouro">
                    </div>

                    <div class="form-group col-4">
                        <label for="numero">Número</label>
                        <input disabled value="<?= $aluno['numero'] ?>" required type="text" class="form-control form-control-sm" id="numero" name="numero" placeholder="Número">
                    </div>

                    <div class="form-group col-4">
                        <label for="complemento">Complemento</label>
                        <input disabled value="<?= $aluno['complemento'] ?>" type="text" class="form-control form-control-sm" id="complemento" name="complemento" placeholder="Complemento">
                    </div>

                    <div class="form-group col-4">
                        <label for="bairro">Bairro</label>
                        <input disabled value="<?= $aluno['bairro'] ?>" required type="text" class="form-control form-control-sm" id="bairro" name="bairro" placeholder="Bairro">
                    </div>

                    <div class="form-group col-4">
                        <label for="uf">Estado</label>
                        <input disabled value="<?= $aluno['estado'] ?>" required type="text" class="form-control form-control-sm" id="uf" name="estado" placeholder="Estado">
                    </div>
                  </div>
                </div>
            </div>
            <!-- /.card -->
          </div>
          <div id='previewRequest'></div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <!-- My scripts  -->
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script src="../../js/alunos.js"></script>