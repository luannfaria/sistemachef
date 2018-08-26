<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Pedidodelivery extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pedidodelivery_model');
        $this->load->model('Produto_model');
            $this->load->model('Categoria_model');
            $this->load->model('Taxaentrega_model');
            $this->load->model('Adicional_model');
              $this->load->model('Observaco_model');
    }

    /*
     * Listing of pedidosdelivery
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('pedidodelivery/index?');
        $config['total_rows'] = $this->Pedidodelivery_model->get_all_pedidosdelivery_count();
        $this->pagination->initialize($config);

        $data['pedidosdelivery'] = $this->Pedidodelivery_model->get_all_pedidosdelivery($params);

        $data['_view'] = 'pedidodelivery/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new pedidodelivery
     */
    function add()
    {
      $data['observacoes']=$this->Observaco_model->get_todas_observacoes();
      $data['adicionais']=$this->Adicional_model->get_all_adicionais();
       $data['taxaentrega'] = $this->Taxaentrega_model->get_all_taxaentrega();
       $data['produtos'] = $this->Produto_model->get_todos();
      $data['categoria'] = $this->Categoria_model->get_todos();
            $this->load->view('pedidodelivery/add',$data);

    }

    /*
     * Editing a pedidodelivery
     */
    function edit($idpedidodelivery)
    {
        // check if the pedidodelivery exists before trying to edit it
        $data['pedidodelivery'] = $this->Pedidodelivery_model->get_pedidodelivery($idpedidodelivery);

        if(isset($data['pedidodelivery']['idpedidodelivery']))
        {
            if(isset($_POST) && count($_POST) > 0)
            {
                $params = array(
					'status' => $this->input->post('status'),
					'timestamp' => $this->input->post('timestamp'),
					'troco' => $this->input->post('troco'),
					'identregador' => $this->input->post('identregador'),
					'idtaxaentrega' => $this->input->post('idtaxaentrega'),
					'idclientes' => $this->input->post('idclientes'),
					'data' => $this->input->post('data'),
					'subtotal' => $this->input->post('subtotal'),
					'taxaentrega' => $this->input->post('taxaentrega'),
					'desconto' => $this->input->post('desconto'),
                );

                $this->Pedidodelivery_model->update_pedidodelivery($idpedidodelivery,$params);
                redirect('pedidodelivery/index');
            }
            else
            {
                $data['_view'] = 'pedidodelivery/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The pedidodelivery you are trying to edit does not exist.');
    }

    /*
     * Deleting pedidodelivery
     */
    function remove($idpedidodelivery)
    {
        $pedidodelivery = $this->Pedidodelivery_model->get_pedidodelivery($idpedidodelivery);

        // check if the pedidodelivery exists before trying to delete it
        if(isset($pedidodelivery['idpedidodelivery']))
        {
            $this->Pedidodelivery_model->delete_pedidodelivery($idpedidodelivery);
            redirect('pedidodelivery/index');
        }
        else
            show_error('The pedidodelivery you are trying to delete does not exist.');
    }

}
