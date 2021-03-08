<?php
class Patients_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
//there are two methods to view all news items (if slug empty) and one for a specific news item (if slug NOT empty)
        public function get_patients($id = FALSE)
{
        if ($id === FALSE)
        {
                $query = $this->db->get('patients');
                return $query->result_array();
                //echo $query->num_rows();

        }

        $query = $this->db->get_where('patients', array('id' => $id));
        return $query->row_array();
}
//méthode qui écrit les données dans la base de données. Vous allez utiliser la classe Query Builder pour insérer les informations et utiliser la bibliothèque d'entrée pour obtenir les données publiées
public function recup_post(){
        $this->load->helper('url');

        //Supprime la chaîne passée, en remplaçant tous les espaces par des tirets (-) et s'assure que tout est en minuscules.
       // ex slug  // $phone = url_title($this->input->post('phone'), 'dash', TRUE);
    
        $data = array(
                //Cette méthode post() garanti que les données sont nettoyées, vous protégeant des attaques malveillantes des autres
            'lastname' => $this->input->post('lastname'),
            'firstname' => $this->input->post('firstname'),
            'phone' => $this->input->post('phone'),
            'birthdate' => $this->input->post('birthdate'),
            'mail' => $this->input->post('mail'),
        );
        return $data;

}

public function set_patient()
{
       $data =  $this -> recup_post();

    return $this->db->insert('patients', $data);
}

public function update_patient($id)
{
        $data =  $this -> recup_post();
        $this -> db -> where ('id',$id);
        return $this->db->update('patients', $data);
        echo 'update réalisée par update_patient';
        // , array('id' => $id));
}    

public function delete_patient($id){
        // $this -> db -> where ('id',$id);
        // $this->db->delete('patients');
        $this->db->query("delete from patients where id='".$id."'");
        echo 'delete  réalisé par delete_patient';
}

}
