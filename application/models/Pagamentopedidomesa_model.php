<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Pagamentopedidomesa_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get pagamentopedidomesa by idpagamentopedidomesa
     */
    function get_pagamentopedidomesa($idpagamentopedidomesa)
    {
        return $this->db->get_where('pagamentopedidomesa',array('idpagamentopedidomesa'=>$idpagamentopedidomesa))->row_array();
    }

    /*
     * Get all pagamentopedidomesa
     */

     function pago($idpedidomesa){

       $sql = "SELECT sum(valor) as pago from pagamentopedidomesa where idpedidomesa='$idpedidomesa'";
       $query = $this->db->query($sql);

       if ($query->num_rows() == 1)
       {
       //Use row() to get a single result
       $row = $query->row();

       //$row will now have if you printed the contents:
       //print_r( $row );
       //stdClass Object ( [email] => example@gmail.com )

       //Pass $query->email directly to reset_password

       return $row->pago;
     }
     }
    function get_all_pagamentopedidomesa()
    {
        $this->db->order_by('idpagamentopedidomesa', 'desc');
        return $this->db->get('pagamentopedidomesa')->result_array();
    }

    /*
     * function to add new pagamentopedidomesa
     */
    function add_pagamentopedidomesa($params)
    {
        $this->db->insert('pagamentopedidomesa',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update pagamentopedidomesa
     */
    function update_pagamentopedidomesa($idpagamentopedidomesa,$params)
    {
        $this->db->where('idpagamentopedidomesa',$idpagamentopedidomesa);
        return $this->db->update('pagamentopedidomesa',$params);
    }

    /*
     * function to delete pagamentopedidomesa
     */
    function delete_pagamentopedidomesa($idpagamentopedidomesa)
    {
        return $this->db->delete('pagamentopedidomesa',array('idpagamentopedidomesa'=>$idpagamentopedidomesa));
    }
}