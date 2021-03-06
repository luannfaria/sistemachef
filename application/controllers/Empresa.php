<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Empresa extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Empresa_model');
    } 

    /*
     * Listing of empresa
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('empresa/index?');
        $config['total_rows'] = $this->Empresa_model->get_all_empresa_count();
        $this->pagination->initialize($config);

        $data['empresa'] = $this->Empresa_model->get_all_empresa($params);
        
        $data['_view'] = 'empresa/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new empresa
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('razaosocial','Razaosocial','required');
		$this->form_validation->set_rules('nomefantasia','Nomefantasia','required');
		
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
				'taxaservico' => $this->input->post('taxaservico'),
				'numeromesas' => $this->input->post('numeromesas'),
				'tipoitemmeio' => $this->input->post('tipoitemmeio'),
            );
            
            $empresa_id = $this->Empresa_model->add_empresa($params);
            redirect('empresa/index');
        }
        else
        {            
            $data['_view'] = 'empresa/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a empresa
     */
    function edit($idempresa)
    {   
        // check if the empresa exists before trying to edit it
        $data['empresa'] = $this->Empresa_model->get_empresa($idempresa);
        
        if(isset($data['empresa']['idempresa']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('razaosocial','Razaosocial','required');
			$this->form_validation->set_rules('nomefantasia','Nomefantasia','required');
		
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
					'taxaservico' => $this->input->post('taxaservico'),
					'numeromesas' => $this->input->post('numeromesas'),
					'tipoitemmeio' => $this->input->post('tipoitemmeio'),
                );

                $this->Empresa_model->update_empresa($idempresa,$params);            
                redirect('empresa/index');
            }
            else
            {
                $data['_view'] = 'empresa/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The empresa you are trying to edit does not exist.');
    } 

    /*
     * Deleting empresa
     */
    function remove($idempresa)
    {
        $empresa = $this->Empresa_model->get_empresa($idempresa);

        // check if the empresa exists before trying to delete it
        if(isset($empresa['idempresa']))
        {
            $this->Empresa_model->delete_empresa($idempresa);
            redirect('empresa/index');
        }
        else
            show_error('The empresa you are trying to delete does not exist.');
    }
    
}
