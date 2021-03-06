<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Contasareceber_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get contaareceber by idcontasareceber
     */
    function get_contaareceber($idcontasareceber)
    {
        return $this->db->get_where('contasareceber',array('idcontasareceber'=>$idcontasareceber))->row_array();
    }
    
    /*
     * Get all contasareceber count
     */
    function get_all_contasareceber_count()
    {
        $this->db->from('contasareceber');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all contasareceber
     */
    function get_all_contasareceber($params = array())
    {
        $this->db->order_by('idcontasareceber', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('contasareceber')->result_array();
    }
        
    /*
     * function to add new contaareceber
     */
    function add_contaareceber($params)
    {
        $this->db->insert('contasareceber',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update contaareceber
     */
    function update_contaareceber($idcontasareceber,$params)
    {
        $this->db->where('idcontasareceber',$idcontasareceber);
        return $this->db->update('contasareceber',$params);
    }
    
    /*
     * function to delete contaareceber
     */
    function delete_contaareceber($idcontasareceber)
    {
        return $this->db->delete('contasareceber',array('idcontasareceber'=>$idcontasareceber));
    }
}
