<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Pizza extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pizza_model');
            $this->load->model('Tamanhopizza_model');
    }

    /*
     * Listing of pizza
     */
    function index()
    {
        $data['pizza'] = $this->Pizza_model->get_all_pizza();
        $data['tamanhos'] = $this->Tamanhopizza_model->get_all_tamanhopizza();
        $data['_view'] = 'pizza/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new pizza
     */
    function add()
    {
        if(isset($_POST) && count($_POST) > 0)
        {
            $params = array(
				'nome' => $this->input->post('nome'),
				'categoriaid' => $this->input->post('idcategoria'),
		//		'tipocobranca' => $this->input->post('tipocobranca'),
				'impressora' => $this->input->post('impressora'),
            );

            $pizza_id = $this->Pizza_model->add_pizza($params);
            $count = count($this->input->post('vendapizza'));
  $nome= $this->input->post('nome');
foreach($_POST['pizza'] as $piz) {

  $tamanhopizza = array(
      'idpizza'=> $pizza_id,
      'tamanho'=> $nome.' '.$_POST['nometam'][$piz],
      	'custo' => $_POST['custopizza'][$piz],
        'venda'=> $_POST['vendapizza'][$piz],
        'siglatamanho'=> $_POST['sigla'][$piz],
        'valuetamanho'=> $piz

  );

  $this->Tamanhopizza_model->add_tamanhopizza($tamanhopizza);

}
        /*    for($i=0;$i<$count;$i++){

            $tam= $this->input->post('nometam')[$i];
$tamanhopizza = array(
    'idpizza'=> $pizza_id,
    'tamanho'=> $nome.' '.$tam,
    	'custo' => $this->input->post('custopizza')[$i],
      'venda'=> $this->input->post('vendapizza')[$i],
      'siglatamanho'=> $this->input->post('sigla')[$i]

);

$this->Tamanhopizza_model->add_tamanhopizza($tamanhopizza);
}*/
            redirect('pizza/index');
        }

        else
        {

          $this->load->model('Categoria_model');
          $data['all_categorias'] = $this->Categoria_model->get_all_categorias();
            $data['_view'] = 'pizza/add';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Editing a pizza
     */
    function edit($idpizza)
    {
        // check if the pizza exists before trying to edit it
        $data['pizza'] = $this->Pizza_model->get_pizza($idpizza);
        $data['tamanhos'] = $this->Tamanhopizza_model->get_tamanhopizza($idpizza);

        if(isset($data['pizza']['idpizza']))
        {
            if(isset($_POST) && count($_POST) > 0)
            {
                $params = array(
					'nome' => $this->input->post('nome'),
					'categoriaid' => $this->input->post('categoriaid'),
					'tipocobranca' => $this->input->post('tipocobranca'),
					'impressora' => $this->input->post('impressora'),
                );

                $this->Pizza_model->update_pizza($idpizza,$params);
                redirect('pizza/index');
            }
            else
            {
              $this->load->model('Categoria_model');
              $data['all_categorias'] = $this->Categoria_model->get_all_categorias();
                $data['_view'] = 'pizza/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The pizza you are trying to edit does not exist.');
    }

    /*
     * Deleting pizza
     */
    function remove($idpizza)
    {
        $pizza = $this->Pizza_model->get_pizza($idpizza);

        // check if the pizza exists before trying to delete it
        if(isset($pizza['idpizza']))
        {
            $this->Pizza_model->delete_pizza($idpizza);
            redirect('pizza/index');
        }
        else
            show_error('The pizza you are trying to delete does not exist.');
    }

}
