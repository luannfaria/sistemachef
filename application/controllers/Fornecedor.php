<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Fornecedor extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Fornecedor_model');
    } 

    /*
     * Listing of fornecedores
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('fornecedor/index?');
        $config['total_rows'] = $this->Fornecedor_model->get_all_fornecedores_count();
        $this->pagination->initialize($config);

        $data['fornecedores'] = $this->Fornecedor_model->get_all_fornecedores($params);
        
        $data['_view'] = 'fornecedor/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new fornecedor
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('razaosocial','Razaosocial','required');
		$this->form_validation->set_rules('nomefantasia','Nomefantasia','required');
		$this->form_validation->set_rules('cnpj','Cnpj','numeric|required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'razaosocial' => $this->input->post('razaosocial'),
				'nomefantasia' => $this->input->post('nomefantasia'),
				'cnpj' => $this->input->post('cnpj'),
				'rua' => $this->input->post('rua'),
				'numero' => $this->input->post('numero'),
				'bairro' => $this->input->post('bairro'),
				'cidade' => $this->input->post('cidade'),
				'telefonefixo' => $this->input->post('telefonefixo'),
				'celular' => $this->input->post('celular'),
				'observacao' => $this->input->post('observacao'),
            );
            
            $fornecedor_id = $this->Fornecedor_model->add_fornecedor($params);
            redirect('fornecedor/index');
        }
        else
        {            
            $data['_view'] = 'fornecedor/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a fornecedor
     */
    function edit($idfornecedor)
    {   
        // check if the fornecedor exists before trying to edit it
        $data['fornecedor'] = $this->Fornecedor_model->get_fornecedor($idfornecedor);
        
        if(isset($data['fornecedor']['idfornecedor']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('razaosocial','Razaosocial','required');
			$this->form_validation->set_rules('nomefantasia','Nomefantasia','required');
			$this->form_validation->set_rules('cnpj','Cnpj','numeric|required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'razaosocial' => $this->input->post('razaosocial'),
					'nomefantasia' => $this->input->post('nomefantasia'),
					'cnpj' => $this->input->post('cnpj'),
					'rua' => $this->input->post('rua'),
					'numero' => $this->input->post('numero'),
					'bairro' => $this->input->post('bairro'),
					'cidade' => $this->input->post('cidade'),
					'telefonefixo' => $this->input->post('telefonefixo'),
					'celular' => $this->input->post('celular'),
					'observacao' => $this->input->post('observacao'),
                );

                $this->Fornecedor_model->update_fornecedor($idfornecedor,$params);            
                redirect('fornecedor/index');
            }
            else
            {
                $data['_view'] = 'fornecedor/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The fornecedor you are trying to edit does not exist.');
    } 

    /*
     * Deleting fornecedor
     */
    function remove($idfornecedor)
    {
        $fornecedor = $this->Fornecedor_model->get_fornecedor($idfornecedor);

        // check if the fornecedor exists before trying to delete it
        if(isset($fornecedor['idfornecedor']))
        {
            $this->Fornecedor_model->delete_fornecedor($idfornecedor);
            redirect('fornecedor/index');
        }
        else
            show_error('The fornecedor you are trying to delete does not exist.');
    }
    
}
