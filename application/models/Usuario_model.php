<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Usuario_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get usuario by idusuarios
     */
    function get_usuario($idusuarios)
    {
        return $this->db->get_where('usuarios',array('idusuarios'=>$idusuarios))->row_array();
    }
    
    /*
     * Get all usuarios count
     */
    function get_all_usuarios_count()
    {
        $this->db->from('usuarios');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all usuarios
     */
    function get_all_usuarios($params = array())
    {
        $this->db->order_by('idusuarios', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('usuarios')->result_array();
    }
        
    /*
     * function to add new usuario
     */
    function add_usuario($params)
    {
        $this->db->insert('usuarios',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update usuario
     */
    function update_usuario($idusuarios,$params)
    {
        $this->db->where('idusuarios',$idusuarios);
        return $this->db->update('usuarios',$params);
    }
    
    /*
     * function to delete usuario
     */
    function delete_usuario($idusuarios)
    {
        return $this->db->delete('usuarios',array('idusuarios'=>$idusuarios));
    }
}