<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Itenspedidodelivery extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Itenspedidodelivery_model');
    } 

    /*
     * Listing of itenspedidodelivery
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('itempedidodelivery/index?');
        $config['total_rows'] = $this->Itenspedidodelivery_model->get_all_itenspedidodelivery_count();
        $this->pagination->initialize($config);

        $data['itenspedidodelivery'] = $this->Itenspedidodelivery_model->get_all_itenspedidodelivery($params);
        
        $data['_view'] = 'itenspedidodelivery/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new itempedidodelivery
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'idpedidodelivery' => $this->input->post('idpedidodelivery'),
				'produto_id' => $this->input->post('produto_id'),
				'quantidade' => $this->input->post('quantidade'),
				'preco' => $this->input->post('preco'),
				'impresso' => $this->input->post('impresso'),
				'usuario_id' => $this->input->post('usuario_id'),
				'nomeitem' => $this->input->post('nomeitem'),
				'horapedidoitem' => $this->input->post('horapedidoitem'),
				'precoadicional' => $this->input->post('precoadicional'),
				'timstamp' => $this->input->post('timstamp'),
            );
            
            $itempedidodelivery_id = $this->Itenspedidodelivery_model->add_itempedidodelivery($params);
            redirect('itenspedidodelivery/index');
        }
        else
        {            
            $data['_view'] = 'itenspedidodelivery/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a itempedidodelivery
     */
    function edit($iditenspedidodelivey)
    {   
        // check if the itempedidodelivery exists before trying to edit it
        $data['itempedidodelivery'] = $this->Itenspedidodelivery_model->get_itempedidodelivery($iditenspedidodelivey);
        
        if(isset($data['itempedidodelivery']['iditenspedidodelivey']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'idpedidodelivery' => $this->input->post('idpedidodelivery'),
					'produto_id' => $this->input->post('produto_id'),
					'quantidade' => $this->input->post('quantidade'),
					'preco' => $this->input->post('preco'),
					'impresso' => $this->input->post('impresso'),
					'usuario_id' => $this->input->post('usuario_id'),
					'nomeitem' => $this->input->post('nomeitem'),
					'horapedidoitem' => $this->input->post('horapedidoitem'),
					'precoadicional' => $this->input->post('precoadicional'),
					'timstamp' => $this->input->post('timstamp'),
                );

                $this->Itenspedidodelivery_model->update_itempedidodelivery($iditenspedidodelivey,$params);            
                redirect('itenspedidodelivery/index');
            }
            else
            {
                $data['_view'] = 'itenspedidodelivery/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The itempedidodelivery you are trying to edit does not exist.');
    } 

    /*
     * Deleting itempedidodelivery
     */
    function remove($iditenspedidodelivey)
    {
        $itempedidodelivery = $this->Itenspedidodelivery_model->get_itempedidodelivery($iditenspedidodelivey);

        // check if the itempedidodelivery exists before trying to delete it
        if(isset($itempedidodelivery['iditenspedidodelivey']))
        {
            $this->Itenspedidodelivery_model->delete_itempedidodelivery($iditenspedidodelivey);
            redirect('itenspedidodelivery/index');
        }
        else
            show_error('The itempedidodelivery you are trying to delete does not exist.');
    }
    
}
