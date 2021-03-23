<?php
class Gestion_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }


//there are two methods to view all locations items (if slug empty) and one for a specific carToRent item (if parametre NOT empty)
        public function get_locations_md($id = FALSE)
{
        if ($id === FALSE)
        {       //celle qui marche ..
                // $query = $this->db->get('locations');
                // return $query->result_array();
                $this->db->select('*');        
                $this->db->from('locations');
                $this->db->join ('carsToRent','carsToRent.ctr_id = locations.ctr_id');
                $this->db->join ('carDetails','carDetails.cd_id = carsToRent.cd_id');
                $this->db->join ('locationStatement','locationStatement.ls_id = locations.ls_id');
                $query = $this->db->get();
                return $query->result_array();
        
        }
        else {
        // $query = $this->db->get_where('locations', array('ctr_id' => $id));
                $this->db->select('*')
                        ->from('locations')
                        ->where('ctr_id',$id)
                        ->join ('carDetails','carDetails.cd_id = locations.cd_id');
                $query =  $this->db->get();
                return $query->row_array();
        }
}


// public function view_Gammes_md(){
//         // recherche des différentes gammes 
        
//                         $this->db->select('ctr_gamme');        
//                         $this->db->from('carsToRent');
//                         $this->db->distinct();
//                         $this->db->order_by('ctr_gamme', 'ASC');
//                         $query = $this->db->get();
//                         return $query->result_array();
        
//                 }

}
 function hello(){
      echo "message depuis  controller Gestion.php" ;  
 }
?>