<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();

    }

    function index()
    {
      if( (!session_id()) || (!$this->session->userdata('logado'))){
        $this->load->view('login/login');



      }

    }


    	public function verificarLogin(){

          header('Access-Control-Allow-Origin: '.base_url());
          header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
          header('Access-Control-Max-Age: 1000');
          header('Access-Control-Allow-Headers: Content-Type');

          $this->load->library('form_validation');
          $this->form_validation->set_rules('login','Login','required|trim');
          $this->form_validation->set_rules('senha','Senha','required|trim');
          if ($this->form_validation->run() == false) {
              $json = array('result' => false, 'message' => validation_errors());
              echo json_encode($json);
          }
          else {
              $login = $this->input->post('login');
              $senha = $this->input->post('senha');
              $this->load->model('Dashboard_model');
              $user = $this->Dashboard_model->check_credentials($login);

              if($user){


                  $password_stored =  $user->senha;

                  if($senha == $password_stored){
                      $session_data = array('login' => $user->login, 'id' => $user->idusuarios,'permissao' => $user->permissoes ,'logado' => TRUE);
                      $this->session->set_userdata($session_data);
                      $json = array('result' => true);
      echo json_encode($json);

                  }
                  else{
                      $json = array('result' => false, 'message' => 'Os dados de acesso estão incorretos.');
                      echo json_encode($json);
                  }
              }
              else{
                  $json = array('result' => false, 'message' => 'Usuário não encontrado, verifique se suas credenciais estão corretass.');
                  echo json_encode($json);
              }
          }
          die();
      }

      public function painel(){

        if( (!session_id()) || (!$this->session->userdata('logado'))){
            redirect('dashboard/index');
        }
    $this->load->model('Controlesistema_model');

        $data['empresa']= $this->Controlesistema_model->getsistema();


          $data['_view'] = 'dashboard';
          $this->load->view('layouts/main',$data);


      }

      public function sair(){
          $this->session->sess_destroy();
          redirect('dashboard/index');
      }
}