<?php
class Users extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('users_model');
    $this->load->helper('url_helper');
  }

  // method to view all users items 
  public function index()
  { 
      $data['users'] = $this->users_model->get_users();
  
      $data['title'] = 'SHOW ALL users';
      $data['total'] = count($data['users']);
   // echo 'var dump data de puis Patints.php <br>';
     // var_dump($data);
      $this->load->view('templates/header', $data);
      $this->load->view('users/index', $data);
      $this->load->view('templates/footer');
    
  }

  // one for a specific news item
  public function view_1user($id = NULL)
  {
    $data['users_item'] = $this->users_model->get_users($id);

    if (empty($data['users_item'])) {
      show_404();
    }

  //   // $data['title'] = $data['users_item']['title'] .'dans users.php by VB';
  //   //$data['title'] = $data['users_item']['phone'] .'dans users.php by VB';
    $data['title'] = ' users by Id';
    $this->load->view('templates/header', $data);
    $this->load->view('users/view', $data);
    $this->load->view('templates/footer');
  }

// public function hello(){
//   echo ' hello  ceci est un test de fonction ';
// }

  //vérifier si le formulaire a été soumis et si les données soumises ont passé les règles de validation.<?php
  public function create($id = NULL)
  {
    if ($id != NULL){
      //on recupère le user by id
      $data['users_item'] = $this->users_model->get_users($id);
      $data['title'] = 'update a  user';
      if (empty($data['users_item'])) {
        show_404();
      }
    }
    else{
      $data['title'] = 'Create a new user';
    }

    $this->load->helper('form');
    $this->load->library('form_validation');

    // 2eme terme pour msg d erreur 
    $this->form_validation->set_rules('firstname', 'Prénom', 'required');
    $this->form_validation->set_rules('lastname', 'Nom', 'required');
    $this->form_validation->set_rules('phone', 'Tel', 'required');
    $this->form_validation->set_rules('mail', 'eMail', 'required');
    $this->form_validation->set_rules('birthdate', 'Date naissance', 'required');
    $this->form_validation->set_rules('pwd', 'Password', 'required');
    $this->form_validation->set_rules('toArchive', 'A archiver', 'required');

    if ($this->form_validation->run() === FALSE) {
      $data['comm'] = ' problème de validation ';
      $this->load->view('templates/header', $data);
      $this->load->view('users/create');
      $this->load->view('templates/footer');
    } else {
      // $id_retour= '';

      if ($id != NULL){
        //on fait MAJ le user by id
        $data['users_item'] = $this->users_model->update_user($id);
        $this->load->view('users/update_success');
        }
        else {
        //on crée l'enregistrement        
        $this->users_model->set_user();
        $this->load->view('users/create_success');
        }
      }
    }

    public function delete_1user($id = NULL){      
        if ($id == NULL){  
          show_404();
        }
        else{
        // $data['title'] = $data['users_item']['title'] .'dans users.php by VB';
        //$data['title'] = $data['users_item']['phone'] .'dans users.php by VB';
        $data['title'] = ' DELETE users by Id';
        $data['id_supp'] = $id;
        $this->users_model->delete_user($id);
        $this->load->view('templates/header', $data);
        $this->load->view('users/delete_success', $data);
        $this->load->view('templates/footer');
        }
      }

    }
