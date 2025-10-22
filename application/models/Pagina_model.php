<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina_model extends CI_Model{

    /*function consultar_seccion(){
        $this->db->select("Id, nombre_seccion, activo");
        $this->db->from("cat_secciones");
        $this->db->where("activo","1");
        $query=$this->db->get();
         if($query!=false){
            if($query->num_rows()>0){
                return $query->result();
            }
        }else{
            return false;
        }
    }*/

    function consultar_seccion($idcatseccion){
        $sql="exec pa_consultar_contenido_x_idseccion @idseccion='".$idcatseccion."'";
        $query=$this->db->query($sql);
        if($query!=false){
            return $query->result();
        }else{
            return false;
        }//Cierre del else
    }

    function consultar_librerias(){
        $sql="exec pa_consultar_librerias";
        $query=$this->db->query($sql);
        if($query!=false){
            return $query->result();
        }else{
            return false;
        }
    }
}
