<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Mesasaberta extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mesasaberta_model');
    } 

    /*
     * Listing of mesasabertas
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('mesasaberta/index?');
        $config['total_rows'] = $this->Mesasaberta_model->get_all_mesasabertas_count();
        $this->pagination->initialize($config);

        $data['mesasabertas'] = $this->Mesasaberta_model->get_all_mesasabertas($params);
        
        $data['_view'] = 'mesasaberta/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new mesasaberta
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'numeromesa' => $this->input->post('numeromesa'),
				'idpedidomesa' => $this->input->post('idpedidomesa'),
				'dataabertura' => $this->input->post('dataabertura'),
				'horaabertura' => $this->input->post('horaabertura'),
				'subtotal' => $this->input->post('subtotal'),
            );
            
            $mesasaberta_id = $this->Mesasaberta_model->add_mesasaberta($params);
            redirect('mesasaberta/index');
        }
        else
        {            
            $data['_view'] = 'mesasaberta/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a mesasaberta
     */
    function edit($idmesasabertas)
    {   
        // check if the mesasaberta exists before trying to edit it
        $data['mesasaberta'] = $this->Mesasaberta_model->get_mesasaberta($idmesasabertas);
        
        if(isset($data['mesasaberta']['idmesasabertas']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'numeromesa' => $this->input->post('numeromesa'),
					'idpedidomesa' => $this->input->post('idpedidomesa'),
					'dataabertura' => $this->input->post('dataabertura'),
					'horaabertura' => $this->input->post('horaabertura'),
					'subtotal' => $this->input->post('subtotal'),
                );

                $this->Mesasaberta_model->update_mesasaberta($idmesasabertas,$params);            
                redirect('mesasaberta/index');
            }
            else
            {
                $data['_view'] = 'mesasaberta/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The mesasaberta you are trying to edit does not exist.');
    } 

    /*
     * Deleting mesasaberta
     */
    function remove($idmesasabertas)
    {
        $mesasaberta = $this->Mesasaberta_model->get_mesasaberta($idmesasabertas);

        // check if the mesasaberta exists before trying to delete it
        if(isset($mesasaberta['idmesasabertas']))
        {
            $this->Mesasaberta_model->delete_mesasaberta($idmesasabertas);
            redirect('mesasaberta/index');
        }
        else
            show_error('The mesasaberta you are trying to delete does not exist.');
    }
    
}
