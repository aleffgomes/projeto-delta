<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AlunoModel;
use CodeIgniter\Files\File;

class Alunos extends Controller
{
    private $aluno_model;

    function __construct()
    {
        $this->aluno_model = new AlunoModel();
    }

    public function index()
    {
        $alunos = $this->aluno_model->findAll();

        $data['alunos'] = $alunos;

        // Enviando dados para o HTML renderizar na tabela 

        echo View('templates/header');
        echo View('alunos/index', $data);
        echo View('templates/footer');
    }

    public function novo()
    {
        echo View('templates/header'); 
        echo View('alunos/novo');
        echo View('templates/footer');
    }

    public function editar($id_aluno)
    {
        $aluno = $this->aluno_model->where('id_aluno', $id_aluno)->first();

        $data['aluno'] = $aluno;

        echo View('templates/header');
        echo View('alunos/editar', $data);
        echo View('templates/footer');
    }

    public function store() 
    {
        $dados = $this->request->getVar();

        if (!empty($_FILES['img']['name'])) {
            // UPLOAD ARQUIVO DE IMAGEM
            $validationRule = [
                'img' => [
                    'label' => 'image',
                    'rules' => 'uploaded[img]'
                        . '|is_image[img]'
                        . '|mime_in[img,image/png]'
                        . '|max_size[img,5000]'
                        . '|max_dims[img,1024,768]',
                ],
            ];
            $name = $dados['nome'] . '-' .  rand() . '.png';

            $img = $this->request->getFile('img');

            if ($img->isValid()) {
                $img->move('./img',str_replace(' ','',$name));
            }
            $dados['foto'] = str_replace(' ','',$name);
        }

        if(isset($dados['id_aluno'])){
            // Retornado dados do usuário 
            $aluno = $this->aluno_model->where('id_aluno', $dados['id_aluno'])->first();

            // Verificando se a imagem existe e se existe o array 'foto' para apagar
            if (!empty($aluno['foto']) && array_key_exists('foto',$dados)) {
                if(file_exists(FCPATH.'img/'.$aluno['foto'])){
                    unlink(FCPATH.'img/'.$aluno['foto']);
                }
            }

            // editando dados no banco  
            $this->aluno_model->where('id_aluno', $dados['id_aluno'])->set($dados)->update();
        } else {

            // inserindo dados no banco
            $this->aluno_model->insert($dados);
        }

    }

     public function excluir($id_aluno)
    {
        $dados = $this->request->getVar();

        // Retornado dados do usuário 
        $aluno = $this->aluno_model->where('id_aluno', $dados['id_aluno'])->first();

        if (!empty($aluno['foto'])) {
            if(file_exists(FCPATH.'img/'.$aluno['foto'])){
                unlink(FCPATH.'img/'.$aluno['foto']);
            }
        }

        $this->aluno_model->where('id_aluno', $dados['id_aluno'])->delete();

        $session = session();
        $session->setFlashdata('alert', 'success_delete');

        return redirect()->to('/alunos');

    }

     public function ver($id_aluno)
    {
        $aluno = $this->aluno_model->where('id_aluno', $id_aluno)->first();

        $data['aluno'] = $aluno;
        
        echo View('templates/header');
        echo View('alunos/visualizar', $data);
        echo View('templates/footer');
    }


}

?>