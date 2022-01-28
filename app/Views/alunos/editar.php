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
              <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
              <li class="breadcrumb-item"><a href="/alunos">Alunos</a></li>
              <li class="breadcrumb-item active">Editar</li>
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
                <h1 style="margin:0.5% 0;" class="card-title">Dados</h1>
                <a style="float:right;" href="/alunos" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Voltar</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action='/alunos/store' id='edit' method='post' enctype='multipart/form-data'>
                <div class="card-body row">
                    <div class="form-group col-12">
                        <label for="inputName">Nome</label>
                        <input value="<?= $aluno['nome'] ?>" required type="text" class="form-control form-control-sm" id="inputName" name="nome" placeholder="Nome completo">
                    </div>

                    <div class="form-group col-4">
                        <label for="inputCEP">Informe o CEP</label>
                        <input value="<?= $aluno['cep'] ?>" required type="text" class="form-control form-control-sm" id="inputCEP" name="cep" placeholder="CEP">
                    </div>

                    <div class="form-group col-4">
                        <label for="logradouro">Logradouro</label>
                        <input value="<?= $aluno['logradouro'] ?>" required type="text" class="form-control form-control-sm" id="logradouro" name="logradouro" placeholder="Logradouro">
                    </div>

                    <div class="form-group col-4">
                        <label for="numero">Número</label>
                        <input value="<?= $aluno['numero'] ?>" required type="text" class="form-control form-control-sm" id="numero" name="numero" placeholder="Número">
                    </div>

                    <div class="form-group col-4">
                        <label for="complemento">Complemento</label>
                        <input value="<?= $aluno['complemento'] ?>" type="text" class="form-control form-control-sm" id="complemento" name="complemento" placeholder="Complemento">
                    </div>

                    <div class="form-group col-4">
                        <label for="bairro">Bairro</label>
                        <input value="<?= $aluno['bairro'] ?>" required type="text" class="form-control form-control-sm" id="bairro" name="bairro" placeholder="Bairro">
                    </div>

                    <div class="form-group col-4">
                        <label for="uf">Estado</label>
                        <input value="<?= $aluno['estado'] ?>" required type="text" class="form-control form-control-sm" id="uf" name="estado" placeholder="Estado">
                    </div>

                    <input type="hidden" name="id_aluno" value="<?= $aluno['id_aluno'] ?>">

                  <div class="form-group col-12">
                      <label class="t_foto" for="img">Foto</label>
                      <div class="input-group cascade">
                          <div class="custom-file">
                              <input accept="image/*" type="file" name="img" class="form-control form-control-sm" id="img">
                              <label class="custom-file-label nameImg" for="img">Atualizar imagem</label>
                          </div>
                          <div>
                            <?php if (empty($aluno['foto'])) : ?> 
                                <div class="img-usr">
                                    <img id="previewImg" class="just-profile-pic img-img-usr" src="../../img/default.png" Alt="Imagem">
                                </div>
                            <?php else: ?> 
                                <div class="img-usr">
                                    <img id="previewImg" class="just-profile-pic img-img-usr" src="../../img/<?= $aluno['foto'] ?>" Alt="Imagem">
                                </div>
                            <?php endif; ?> 
                              <div>
                                  <p class='nameImg'><?=$aluno['foto'] ?></p>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Atualizar</button>
                </div>

                <div class="progress">
                  <div class="progress-bar bg-success" id="progressBarSubmit" role="progressbar"  aria-valuemin="0" aria-valuemax="100"></div>
              </div>

            </form>
            </div>
            <!-- /.card -->
          </div>
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