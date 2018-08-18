<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Pedidopdv_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get pedidopdv by idpedidopdv
     */


    function get_pedidopdv($idpedidopdv)
    {
        return $this->db->get_where('pedidopdv',array('idpedidopdv'=>$idpedidopdv))->row_array();
    }
    public function novavenda($params){


      $this->db->insert('pedidopdv',$params);

    return $this->db->insert_id();

    }

    public function getvenda($id){

      $this->db->select('*');
     $this->db->from('pedidopdv');
     $this->db->where('idpedidopdv', $id);

     $query = $this->db->get();

     if ($query->num_rows() == 1){


    $row = $query->row();


    return $row;
    }
      }
    /*
     * Get all pedidopdv
     */

     function getpagamento($idpedidopdv){
       $this->db->select('*');
      $this->db->from('pagamentopedidopdv');
      $this->db->where('idpedidopdv', $idpedidopdv);
        $query = $this->db->get();
    

    $array = $query->result_array();
    return $array;

     }
    function get_all_pedidopdv()
    {
        $this->db->order_by('idpedidopdv', 'desc');
        return $this->db->get('pedidopdv')->result_array();
    }

    /*
     * function to add new pedidopdv
     */
    function add_pedidopdv($params)
    {
        $this->db->insert('pedidopdv',$params);
        return $this->db->insert_id();
    }
    function get_all_pedido_count()
    {
        $this->db->from('pedidopdv');
        return $this->db->count_all_results();
    }
    /*
     * function to update pedidopdv
     */
     function descontovlr($idpedidopdv){

       $this->db->select('*');
      $this->db->from('pedidopdv');
      $this->db->where('idpedidopdv', $idpedidopdv);

      $query = $this->db->get();

      if ($query->num_rows() == 1){


     $row = $query->row();


     return $row->desconto;
}
     }
    function desconto($idpedidopdv,$params)
    {
        $this->db->set('desconto',$params);
        $this->db->where('idpedidopdv',$idpedidopdv);
        return $this->db->update('pedidopdv');
    }

    /*
     * function to delete pedidopdv
     */
    function delete_pedidopdv($idpedidopdv)
    {
        return $this->db->delete('pedidopdv',array('idpedidopdv'=>$idpedidopdv));
    }
}