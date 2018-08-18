<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Usuario extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model');
    } 

    /*
     * Listing of usuarios
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('usuario/index?');
        $config['total_rows'] = $this->Usuario_model->get_all_usuarios_count();
        $this->pagination->initialize($config);

        $data['usuarios'] = $this->Usuario_model->get_all_usuarios($params);
        
        $data['_view'] = 'usuario/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new usuario
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'login' => $this->input->post('login'),
				'senha' => $this->input->post('senha'),
				'permissoes' => $this->input->post('permissoes'),
				'habilitado' => $this->input->post('habilitado'),
				'nomepermissao' => $this->input->post('nomepermissao'),
				'datacadastro' => $this->input->post('datacadastro'),
				'comissao' => $this->input->post('comissao'),
				'taxacomissao' => $this->input->post('taxacomissao'),
            );
            
            $usuario_id = $this->Usuario_model->add_usuario($params);
            redirect('usuario/index');
        }
        else
        {            
            $data['_view'] = 'usuario/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a usuario
     */
    function edit($idusuarios)
    {   
        // check if the usuario exists before trying to edit it
        $data['usuario'] = $this->Usuario_model->get_usuario($idusuarios);
        
        if(isset($data['usuario']['idusuarios']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'login' => $this->input->post('login'),
					'senha' => $this->input->post('senha'),
					'permissoes' => $this->input->post('permissoes'),
					'habilitado' => $this->input->post('habilitado'),
					'nomepermissao' => $this->input->post('nomepermissao'),
					'datacadastro' => $this->input->post('datacadastro'),
					'comissao' => $this->input->post('comissao'),
					'taxacomissao' => $this->input->post('taxacomissao'),
                );

                $this->Usuario_model->update_usuario($idusuarios,$params);            
                redirect('usuario/index');
            }
            else
            {
                $data['_view'] = 'usuario/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The usuario you are trying to edit does not exist.');
    } 

    /*
     * Deleting usuario
     */
    function remove($idusuarios)
    {
        $usuario = $this->Usuario_model->get_usuario($idusuarios);

        // check if the usuario exists before trying to delete it
        if(isset($usuario['idusuarios']))
        {
            $this->Usuario_model->delete_usuario($idusuarios);
            redirect('usuario/index');
        }
        else
            show_error('The usuario you are trying to delete does not exist.');
    }
    
}
