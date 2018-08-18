<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Empresa_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get empresa by idempresa
     */
    function get_empresa($idempresa)
    {
        return $this->db->get_where('empresa',array('idempresa'=>$idempresa))->row_array();
    }

    function get_empresamesa()
    {
        return $this->db->get('empresa')->row_array();
    }
    /*
     * Get all empresa count
     */
    function get_all_empresa_count()
    {
        $this->db->from('empresa');
        return $this->db->count_all_results();
    }

    /*
     * Get all empresa
     */

     function get_taxa(){
       $query = $this->db->get('empresa');

       if ($query->num_rows() == 1)
       {
       //Use row() to get a single result
       $row = $query->row();

       //$row will now have if you printed the contents:
       //print_r( $row );
       //stdClass Object ( [email] => example@gmail.com )

       //Pass $query->email directly to reset_password
       }
       return $row->taxaservico;
     }
    function get_all_empresa($params = array())
    {
        $this->db->order_by('idempresa', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('empresa')->result_array();
    }

    /*
     * function to add new empresa
     */
    function add_empresa($params)
    {
        $this->db->insert('empresa',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update empresa
     */
    function update_empresa($idempresa,$params)
    {
        $this->db->where('idempresa',$idempresa);
        return $this->db->update('empresa',$params);
    }

    /*
     * function to delete empresa
     */
    function delete_empresa($idempresa)
    {
        return $this->db->delete('empresa',array('idempresa'=>$idempresa));
    }
}