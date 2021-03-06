<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pedidodelivery_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get pedidodelivery by idpedidodelivery
     */
    function get_pedidodelivery($idpedidodelivery)
    {
        return $this->db->get_where('pedidodelivery',array('idpedidodelivery'=>$idpedidodelivery))->row_array();
    }
    
    /*
     * Get all pedidosdelivery count
     */
    function get_all_pedidosdelivery_count()
    {
        $this->db->from('pedidodelivery');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all pedidosdelivery
     */
    function get_all_pedidosdelivery($params = array())
    {
        $this->db->order_by('idpedidodelivery', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('pedidodelivery')->result_array();
    }
        
    /*
     * function to add new pedidodelivery
     */
    function add_pedidodelivery($params)
    {
        $this->db->insert('pedidodelivery',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update pedidodelivery
     */
    function update_pedidodelivery($idpedidodelivery,$params)
    {
        $this->db->where('idpedidodelivery',$idpedidodelivery);
        return $this->db->update('pedidodelivery',$params);
    }
    
    /*
     * function to delete pedidodelivery
     */
    function delete_pedidodelivery($idpedidodelivery)
    {
        return $this->db->delete('pedidodelivery',array('idpedidodelivery'=>$idpedidodelivery));
    }
}
