<?php
class LocationsSearch_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
//there are two methods to view all locations items (if slug empty) and one for a specific carToRent item (if parametre NOT empty)
        public function get_carGammes($id = FALSE)
{
        if ($id === FALSE)
        {       //celle qui marche ..
                // $query = $this->db->get('locations');
                // return $query->result_array();
                $this->db->select('ctr_gamme');        
                $this->db->from('carsToRent');
                $this->db->join ('carDetails','carDetails.cd_id = carsToRent.cd_id');
                $this->db->group_by ('carsToRent.ctr_gamme');
                $query = $this->db->get();
                return $query->result_array();
        
                //echo $query->num_rows();
//$this->db->select('title, description, length(audio), realname, creationdate, podid');


// $this->db->from('podcasts');
// $this->db->join('users', 'users.userid = podcasts.userid');
// $this->db->where('users.userid', $this->uri->rsegment(4));
// $query = $this->db->get();
        }
        else {
        $query = $this->db->get_where('locations', array('ctr_id' => $id));
        return $query->row_array();
        }
}
//méthode qui écrit les données dans la base de données. Vous allez utiliser la classe Query Builder pour insérer les informations et utiliser la bibliothèque d'entrée pour obtenir les données publiées

// public function recup_post(){
//         $this->load->helper('url');

//         //Supprime la chaîne passée, en remplaçant tous les espaces par des tirets (-) et s'assure que tout est en minuscules.
//        // ex slug  // $phone = url_title($this->input->post('phone'), 'dash', TRUE);
    
//        $dataCars = array(
//             'u_toArchive' => $this->input->post('toArchive'),
//              'u_lastname' => $this->input->post('lastname'),
//             'u_firstname' => $this->input->post('firstname'),
//             'u_mail' => $this->input->post('mail'),
//             'u_pwd' => $this->input->post('pwd'),
//             'u_phone' => $this->input->post('phone'),
//             'u_birthdate' => $this->input->post('birthdate'),
//             'u_fonction' => $this->input->post('fonction')
//         //    ******  a finir  *** terminer le remplissage après modif de la base 
//         );
//         return $dataCars;
// // }

// public function set_carToRent()
// {

//        $dataCars =  $this -> recup_post();

//     return $this->db->insert('locations', $dataCars);
//     echo 'insert réalisé par set_carToRent';
// }

// public function update_carToRent($id)
// {
//         $dataCars =  $this -> recup_post();
//         $this -> db -> where ('u_id',$id);
//         return $this->db->update('locations', $dataCars);
//         echo 'update réalisée par update_carToRent';
//         // , array('id' => $id));
// }    

// public function delete_carToRent($id){
//         // $this -> db -> where ('id',$id);
//         // $this->db->delete('locations');
//         $this->db->query("delete from locations where u_id='".$id."'");
//         echo 'delete  réalisé par delete_carToRent';
// }

}