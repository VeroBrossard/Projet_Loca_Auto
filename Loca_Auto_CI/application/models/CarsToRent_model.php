<?php
class CarsToRent_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
//there are two methods to view all carsToRent items (if slug empty) and one for a specific carToRent item (if parametre NOT empty)
        public function get_carsToRent($id = FALSE)
{
        if ($id === FALSE)
        {
                $query = $this->db->get('carsToRent');
                return $query->result_array();
                //echo $query->num_rows();

        }
        else {
        $query = $this->db->get_where('carsToRent', array('u_id' => $id));
        return $query->row_array();
        }
}
//méthode qui écrit les données dans la base de données. Vous allez utiliser la classe Query Builder pour insérer les informations et utiliser la bibliothèque d'entrée pour obtenir les données publiées

public function recup_post(){
        $this->load->helper('url');

        //Supprime la chaîne passée, en remplaçant tous les espaces par des tirets (-) et s'assure que tout est en minuscules.
       // ex slug  // $phone = url_title($this->input->post('phone'), 'dash', TRUE);
    
        $data = array(
            'u_toArchive' => $this->input->post('toArchive'),
             'u_lastname' => $this->input->post('lastname'),
            'u_firstname' => $this->input->post('firstname'),
            'u_mail' => $this->input->post('mail'),
            'u_pwd' => $this->input->post('pwd'),
            'u_phone' => $this->input->post('phone'),
            'u_birthdate' => $this->input->post('birthdate'),
            'u_fonction' => $this->input->post('fonction')
        //    ******  a finir  *** terminer le remplissage après modif de la base 
        );
        return $data;
}

public function set_carToRent()
{

       $data =  $this -> recup_post();

    return $this->db->insert('carsToRent', $data);
    echo 'insert réalisé par set_carToRent';
}

public function update_carToRent($id)
{
        $data =  $this -> recup_post();
        $this -> db -> where ('u_id',$id);
        return $this->db->update('carsToRent', $data);
        echo 'update réalisée par update_carToRent';
        // , array('id' => $id));
}    

public function delete_carToRent($id){
        // $this -> db -> where ('id',$id);
        // $this->db->delete('carsToRent');
        $this->db->query("delete from carsToRent where u_id='".$id."'");
        echo 'delete  réalisé par delete_carToRent';
}

}