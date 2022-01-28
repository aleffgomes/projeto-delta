<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tabela de Alunos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/Home">Início</a></li>
              <li class="breadcrumb-item active">Alunos</li>
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
                        <a href="/alunos/novo" style="float:right;" class="btn btn-sm btn-secondary"><i class="fas fa-user-plus"></i> Novo aluno</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Cód.:</th>
                                <th>Nome</th>
                                <th>CEP</th>
                                <th>Logradouro</th>
                                <th>Número</th>
                                <th>Complemento</th>
                                <th>Bairro</th>
                                <th>Estado</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody style="font-size:14px;">
                            
                            <?php if(!empty($alunos)): ?>
                              <?php foreach($alunos as $aluno): ?>
                                <tr>
                                    <td><?= $aluno['id_aluno'] ?></td>
                                    <td><?= $aluno['nome'] ?></td>
                                    <td><?= $aluno['cep'] ?></td>
                                    <td><?= $aluno['logradouro'] ?></td>
                                    <td><?= $aluno['numero'] ?></td>
                                    <td><?= $aluno['complemento'] ?></td>
                                    <td><?= $aluno['bairro'] ?></td>
                                    <td><?= $aluno['estado'] ?></td>
                                    <td style="display:flex;padding:20 0;">
                                      <a style="margin:6px;" href="/alunos/ver/<?= $aluno['id_aluno'] ?>" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                                      <a style="margin:6px;" href="/alunos/editar/<?= $aluno['id_aluno'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                      <button type='button' style="margin:6px;" value='<?= $aluno['id_aluno'] ?>' class="btn btn-sm btn-danger delete"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                              <?php endforeach; ?>
                            <?php else: ?>
                              <tr>
                                <td colspan="7">Nenhum aluno cadastrado!</td>
                              </tr>
                            <?php endif; ?>

                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- My scripts  -->
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script src="../js/alunos.js"></script>
