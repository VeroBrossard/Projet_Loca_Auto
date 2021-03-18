<?php
class CarsToRent_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
                
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


                //LEWEL voir par param différents
                // $query = $this->db->get_where('carsToRent', array('ctr_gamme' => $gamme));
                // return $query->result_array();

        }


        public function recup_post(){
                $this->load->helper('url');
        
                //Supprime la chaîne passée, en remplaçant tous les espaces par des tirets (-) et s'assure que tout est en minuscules.
               // ex slug  // $phone = url_title($this->input->post('phone'), 'dash', TRUE);
            
               $dataPOST = array(
                //     'u_toArchive' => $this->input->post('toArchive'),
                //      'u_lastname' => $this->input->post('lastname'),
                //     'u_firstname' => $this->input->post('firstname'),
                //     'u_mail' => $this->input->post('mail'),
                //     'u_pwd' => $this->input->post('pwd'),
                //     'u_phone' => $this->input->post('phone'),
                //     'u_birthdate' => $this->input->post('birthdate'),
                //     'u_fonction' => $this->input->post('fonction')
                        'ctr_gamme' => $this->input-> post('gamme'),
                //    ******  a finir  *** terminer le remplissage après modif de la base 
                );
                return $dataPOST;
        }




//there are two methods to view all carsToRent items (if slug empty) and one for a specific carToRent item (if parametre NOT empty)
        public function get_carsToRent_md($id = FALSE)
{
        if ($id === FALSE)
        {       //celle qui marche ..
                // $query = $this->db->get('carsToRent');
                // return $query->result_array();
                $this->db->select('*');        
                $this->db->from('carsToRent');
                $this->db->join ('carDetails','carDetails.cd_id = carsToRent.cd_id');
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
//méthode qui écrit les données dans la base de données. Vous allez utiliser la classe Query Builder pour insérer les informations et utiliser la bibliothèque d'entrée pour obtenir les données publiées


public function set_carToRent()
{

       $dataCars =  $this -> recup_post();

    return $this->db->insert('carsToRent', $dataCars);
    echo 'insert réalisé par set_carToRent';
}

public function update_carToRent($id)
{
        $dataCars =  $this -> recup_post();
        $this -> db -> where ('u_id',$id);
        return $this->db->update('carsToRent', $dataCars);
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

}