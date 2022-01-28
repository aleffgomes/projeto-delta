 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0">Cadastro de Alunos</h1>
                 </div><!-- /.col -->
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="/Home">Início</a></li>
                         <li class="breadcrumb-item"><a href="/alunos">Alunos</a></li>
                         <li class="breadcrumb-item active">Cadastro</li>
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
                                <a style="float:right;" href="/alunos" class="btn btn-sm btn-secondary"><i class="fas fa-table"></i> Tabela</a>
                         </div>
                         <!-- /.card-header -->
                         <!-- form start -->
                         <form action='/alunos/store' id='dados' method='post' enctype='multipart/form-data'>
                             <div class="card-body row">
                                 <div class="form-group col-12">
                                     <label for="inputName">Nome</label>
                                     <input required type="text" class="form-control form-control-sm" id="inputName" name="nome" placeholder="Nome completo">
                                 </div>

                                 <div class="form-group col-4">
                                     <label for="inputCEP">Informe o CEP</label>
                                     <input required type="text" class="form-control form-control-sm" id="inputCEP" name="cep" placeholder="CEP">
                                 </div>

                                 <div class="form-group col-4">
                                     <label for="logradouro">Logradouro</label>
                                     <input required type="text" class="form-control form-control-sm" id="logradouro" name="logradouro" placeholder="Logradouro">
                                 </div>

                                 <div class="form-group col-4">
                                     <label for="numero">Número</label>
                                     <input required type="text" class="form-control form-control-sm" id="numero" name="numero" placeholder="Número">
                                 </div>

                                 <div class="form-group col-4">
                                     <label for="complemento">Complemento</label>
                                     <input type="text" class="form-control form-control-sm" id="complemento" name="complemento" placeholder="Complemento">
                                 </div>

                                 <div class="form-group col-4">
                                     <label for="bairro">Bairro</label>
                                     <input required type="text" class="form-control form-control-sm" id="bairro" name="bairro" placeholder="Bairro">
                                 </div>

                                 <div class="form-group col-4">
                                     <label for="uf">Estado</label>
                                     <input required type="text" class="form-control form-control-sm" id="uf" name="estado" placeholder="Estado">
                                 </div>

                                 <div class="form-group col">
                                     <label class="t_foto" for="img">Foto</label>
                                     <div class="input-group cascade">
                                         <div class="custom-file">
                                             <input accept="image/*" type="file" name="img" class="form-control form-control-sm" id="img">
                                             <label class="custom-file-label nameImg" for="img">Selecionar imagem</label>
                                         </div>
                                         <div>
                                             <div>
                                                <img width="100" id='previewImg'>
                                             </div>
                                             <div>
                                                 <p class='nameImg'></p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- /.card-body -->
                             <div class="card-footer">
                                 <button type="submit" class="btn btn-secondary">Cadastrar</button>
                             </div>

                             <div class="progress">
                                <div class="progress-bar bg-success" id="progressBarSubmit" role="progressbar"  aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                         </form>
                     </div>
                 </div>
                 <!-- /.col-md-6 -->
             </div>

             <!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

 <!-- My scripts  -->
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script src="../js/alunos.js"></script>