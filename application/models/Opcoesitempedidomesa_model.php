<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Opcoesitempedidomesa_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get opcoesitempedidomesa by idopcoesitempedidomesa
     */
    function get_opcoesitempedidomesa($idopcoesitempedidomesa)
    {
        return $this->db->get_where('opcoesitempedidomesa',array('idopcoesitempedidomesa'=>$idopcoesitempedidomesa))->row_array();
    }
        
    /*
     * Get all opcoesitempedidomesa
     */
    function get_all_opcoesitempedidomesa()
    {
        $this->db->order_by('idopcoesitempedidomesa', 'desc');
        return $this->db->get('opcoesitempedidomesa')->result_array();
    }
        
    /*
     * function to add new opcoesitempedidomesa
     */
    function add_opcoesitempedidomesa($params)
    {
        $this->db->insert('opcoesitempedidomesa',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update opcoesitempedidomesa
     */
    function update_opcoesitempedidomesa($idopcoesitempedidomesa,$params)
    {
        $this->db->where('idopcoesitempedidomesa',$idopcoesitempedidomesa);
        return $this->db->update('opcoesitempedidomesa',$params);
    }
    
    /*
     * function to delete opcoesitempedidomesa
     */
    function delete_opcoesitempedidomesa($idopcoesitempedidomesa)
    {
        return $this->db->delete('opcoesitempedidomesa',array('idopcoesitempedidomesa'=>$idopcoesitempedidomesa));
    }
}
