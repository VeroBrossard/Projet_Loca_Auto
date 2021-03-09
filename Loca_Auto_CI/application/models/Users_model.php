<?php
class Users_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
//there are two methods to view all users items (if slug empty) and one for a specific user item (if parametre NOT empty)
        public function get_users($id = FALSE)
{
        if ($id === FALSE)
        {
                $query = $this->db->get('users');
                return $query->result_array();
                //echo $query->num_rows();

        }

        $query = $this->db->get_where('users', array('u_id' => $id));
        return $query->row_array();
}
//méthode qui écrit les données dans la base de données. Vous allez utiliser la classe Query Builder pour insérer les informations et utiliser la bibliothèque d'entrée pour obtenir les données publiées
public function recup_post(){
        $this->load->helper('url');

        //Supprime la chaîne passée, en remplaçant tous les espaces par des tirets (-) et s'assure que tout est en minuscules.
       // ex slug  // $phone = url_title($this->input->post('phone'), 'dash', TRUE);
    
        $data = array(
                //Cette méthode post() garanti que les données sont nettoyées, vous protégeant des attaques malveillantes des autres
            'u_lastname' => $this->input->post('lastname'),
            'u_firstname' => $this->input->post('firstname'),
            'u_phone' => $this->input->post('phone'),
            'u_birthdate' => $this->input->post('birthdate'),
            'u_mail' => $this->input->post('mail'),
        );
        return $data;

}

public function set_user()
{
       $data =  $this -> recup_post();

    return $this->db->insert('users', $data);
}

public function update_user($id)
{
        $data =  $this -> recup_post();
        $this -> db -> where ('u_id',$id);
        return $this->db->update('users', $data);
        echo 'update réalisée par update_user';
        // , array('id' => $id));
}    

public function delete_user($id){
        // $this -> db -> where ('id',$id);
        // $this->db->delete('users');
        $this->db->query("delete from users where u_id='".$id."'");
        echo 'delete  réalisé par delete_users';
}

}