<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Tamanhopizza_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get tamanhopizza by idtamanhopizza
     */
    function get_tamanhopizza($idpizza)
    {
        return $this->db->get_where('tamanhopizza',array('idpizza'=>$idpizza))->result_array();
    }

    /*
     * Get all tamanhopizza
     */
    function get_all_tamanhopizza()
    {
        $this->db->order_by('idtamanhopizza', 'desc');
        return $this->db->get('tamanhopizza')->result_array();
    }

    /*
     * function to add new tamanhopizza
     */
    function add_tamanhopizza($params)
    {
        $this->db->insert('tamanhopizza',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update tamanhopizza
     */
    function update_tamanhopizza($idtamanhopizza,$params)
    {
        $this->db->where('idtamanhopizza',$idtamanhopizza);
        return $this->db->update('tamanhopizza',$params);
    }

    /*
     * function to delete tamanhopizza
     */
    function delete_tamanhopizza($idtamanhopizza)
    {
        return $this->db->delete('tamanhopizza',array('idtamanhopizza'=>$idtamanhopizza));
    }
}
