<?php
class CarsToRent_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
                
        }

        public function get_gammes_md(){
        $this->db->select('ctr_gamme');
        $this->db->from('carsToRent');
        $this->db->group_by('ctr_gamme'); 
        $this->db->order_by('ctr_gamme', 'ASC'); 
        $query = $this->db->get(); 
        return $query->result_array();   
        }

        
        public function researchCars_md($gamme){
// recherche de voitures à louer
// select *, l_startDate,l_endDate, cd_brandSerie,ctr_gamme from carstorent
// left join locations 
// ON locations.ctr_id=carstorent.ctr_id
// join cardetails
// ON carstorent.cd_id=cardetails.cd_id;

                $this->db->select('*, l_startDate,l_endDate, cd_brandSerie, ctr_gamme , carsToRent.ctr_id');        
                $this->db->from('carsToRent');
                $this->db->join ('carDetails','carDetails.cd_id = carsToRent.cd_id');
                $this->db->join ('locations','carsToRent.ctr_id = locations.ctr_id', 'left');
                !empty($gamme)? $this->db->where('ctr_gamme',$gamme) :'';
                $query = $this->db->get();
                return $query->result_array();
        }

//there are two methods to view all carsToRent items (if slug empty) and one for a specific carToRent item (if parametre NOT empty)
        public function get_carsToRent_md($id = FALSE) //
{
        if ($id === FALSE)
        {       //celle qui marche ..
                // $query = $this->db->get('carsToRent');
                // return $query->result_array();
                $this->db->select('*');        
                $this->db->from('carsToRent');
                $this->db->join ('carDetails','carDetails.cd_id = carsToRent.cd_id');
                $this->db->order_by('ctr_immatriculation', 'ASC');
                $query = $this->db->get();
                return $query->result_array();
        
        }
        else {
        // $query = $this->db->get_where('carsToRent', array('ctr_id' => $id));
                $this->db->select('*')
                        ->from('carsToRent')
                        ->where('ctr_id',$id)
                        ->join ('carDetails','carDetails.cd_id = carsToRent.cd_id');
                $query =  $this->db->get();
                return $query->row_array();
        }
}

public function set_carToRent()
{
     //  $dataCars =  $this -> recup_post();
   // return $this->db->insert('carsToRent', $dataCars);
    echo 'insert réalisé par set_carToRent';
}

public function update_carToRent_md($id,$dataCar)
{
        // $dataCars =  $this -> recup_post();
        $this -> db -> where ('ctr_id',$id);
        return $this->db->update('carsToRent', $dataCar);
        echo 'update réalisée par update_carToRent';
        // , array('id' => $id));
}    

// public function delete_1car($id){
//         // $this -> db -> where ('ctr_id',$id);
//         // $this->db->delete('carsToRent');
//         //verification de présence dans les locations  ou en cours
//         $dataDelete = $this->get_carsToRent_md($id);

//         $this->db->query("delete from carsToRent where ctr_id='".$id."'");
//         echo 'delete  réalisé par delete_carToRent';
// }

public function researchDetails_md($id){
        // recherche des carDétails sur une voiture pour gestion
 
        
                        $this->db->select('*');        
                        $this->db->from('carDetails');
                        $this->db->join ('carsToRent','carDetails.cd_id = carsToRent.cd_id');
                        $this->db->where('ctr_id',$id);
                        $query = $this->db->get();
                        return $query->result_array();
        
        
                        //LEWEL voir par param différents
                        // $query = $this->db->get_where('carsToRent', array('ctr_gamme' => $gamme));
                        // return $query->result_array();
        
                }
                
public function view_Gammes_md(){
        // recherche des différentes gammes 
        
                        $this->db->select('ctr_gamme');        
                        $this->db->from('carsToRent');
                        $this->db->distinct();
                        $this->db->order_by('ctr_gamme', 'ASC');
                        $query = $this->db->get();
                        return $query->result_array();
        
                }

public function researchModeles_md(){
        // recherche des modeles voitures pour gestion
       
                        $this->db->select('carDetails.cd_id,cd_brandSerie,cd_type,cd_seats,cd_gearbox,cd_energy, cd_toArchive, ctr_gamme'); 
                        $this->db->from('carDetails');
                        $this->db->join ('carsToRent','carsToRent.cd_id = carDetails.cd_id');
                        //$this->db->where('ctr_id',$id);
                        $this->db->distinct();
                        $this->db->order_by('cd_brandSerie ASC');
                        $query = $this->db->get();
                        return $query->result_array();
        
        
                        //LEWEL voir par param différents
                        // $query = $this->db->get_where('carsToRent', array('ctr_gamme' => $gamme));
                        // return $query->result_array();
        
                }
                                
}