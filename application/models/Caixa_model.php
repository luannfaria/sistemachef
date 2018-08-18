<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Caixa_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get caixa by idcaixa
     */
    function get_caixa($idcaixa)
    {
        return $this->db->get_where('caixa',array('data'=>$idcaixa))->row_array();
    }

    /*
     * Get all caixa
     */

     function totaldia($data){
          $sql="select concat(formapagto,' R$ ',sum(valor)) as teste from caixa where data='$data' GROUP BY formapagto";
    //     $sql = "select formapagto, sum(valor) as valor, pgto from caixa where data='$data' group by formapagto";

//$sql ="select formapagto, sum(valor) as valor from caixa group by formapagto";

         return $this->db->query($sql)->result_array();
     }
    function get_all_caixa($data)
    {
      $this->db->where('data',$data);
        return $this->db->get('caixa')->result_array();
    }

    /*
     * function to add new caixa
     */
    function add_caixa($params)
    {
        $this->db->insert('caixa',$params);
        return $this->db->insert_id();
    }

function entrada($hoje){
    $sql="select sum(valor) as valor from caixa where data='$hoje' and tipomovimentacao='1'";


             return $this->db->query($sql)->row_array();

}

function semana($data){
  $sql="select sum(valor) as valor from caixa where data>'$data' and tipomovimentacao='1'";


           return $this->db->query($sql)->row_array();

}
function saida($hoje){
    $sql="select sum(valor) as valor from caixa where data='$hoje' and tipomovimentacao='2'";


             return $this->db->query($sql)->row_array();

}
    /*
     * function to update caixa
     */
    function update_caixa($idcaixa,$params)
    {
        $this->db->where('idcaixa',$idcaixa);
        return $this->db->update('caixa',$params);
    }

    /*
     * function to delete caixa
     */
    function delete_caixa($idcaixa)
    {
        return $this->db->delete('caixa',array('idcaixa'=>$idcaixa));
    }
}