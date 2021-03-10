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
    $this->form_validation->set_rules('lastname', 'Nom', 'required');
    $this->form_validation->set_rules('firstname', 'Prénom', 'required');
    $this->form_validation->set_rules('mail', 'eMail', 'required');
    $this->form_validation->set_rules('pwd', 'Password', 'required');
    $this->form_validation->set_rules('phone', 'Tel', 'required');
    $this->form_validation->set_rules('toArchive', 'A archiver', 'required');
    $this->form_validation->set_rules('birthdate', 'Date naissance', 'required');

    if ($this->form_validation->run() === FALSE) {
      $data['comm'] = ' <b style="color:red;" >problème de validation </b>';
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
      public function form_validation(){

        $this->load->library('form_validation');
        //$this->form_validation->set_message('required', '{field} doit etre remplis.');
        $this->form_validation->set_error_delimiters('<div class="errorFormInscription">', '</div>');
    
        $this->form_validation->set_rules('lastName', 'lastName', 'required',
            array('required' => "Le nom de famille doit etre renseigner"));
        $this->form_validation->set_rules('firstName', 'firstName', 'required',
            array('required' => "Le Prénom doit etre renseigner"));
        $this->form_validation->set_rules('login', 'login', 'required|is_unique[user.login]',
            array('required' => "Le Login doit etre renseigner","is_unique" => "Le Login est deja utiliser"));
        $this->form_validation->set_rules('pass', 'pass', 'required',
            array('required' => "le mot de passe doit etre renseigner"));
        $this->form_validation->set_rules('passConfirm', 'passConfirm', 'required|matches[pass]',
            array('required' => "La confirmation du mot de passe doit etre renseigner",'matches' => 'les deux mots de passe ne sont pas identique'));
        $this->form_validation->set_rules('email', 'email', 'required|is_unique[user.mail]|valid_email',
            array('required' => "L'email doit etre renseigner","is_unique" => "L'email est deja utiliser","valid_email" => "L'email n'a pas un bon format"));
        $this->form_validation->set_rules('adress', 'adress', 'required',
            array('required' => "L'adresse doit etre renseigner"));
        $this->form_validation->set_rules('city', 'city', 'required',
            array('required' => "La ville doit etre renseigner"));
        $this->form_validation->set_rules('zipCode', 'zipCode', 'required',
            array('required' => "Le code postal doit etre renseigner"));
        $this->form_validation->set_rules('licenceDate', 'licenceDate', 'required',
            array('required' => "La date d'obtention du permis doit etre renseigner"));
    
        if ($this->form_validation->run() == FALSE)
        {
          $this->index();
        }
        else
        {
          $user = array(
            "lastName" => $this->input->post("lastName"),
            "firstName" => $this->input->post("firstName"),
            "login" => $this->input->post("login"),
            "mail" => $this->input->post("email"),
            "adress" => $this->input->post("adress"),
            "city" => $this->input->post("city"),
            "zipCode" => $this->input->post("zipCode"),
            "licenseDate" => $this->input->post("licenceDate"),
            "id_levelUser" => "2",
          );
          $this->Inscription_Model->insertClient($user);
          $user = $this->Inscription_Model->getUserByLogin($this->input->post("login"));
          $userMdp = array("password" => $this->input->post("pass"),"id_user" => $user[0]->id);
          $this->Inscription_Model->insertMdp($userMdp);
    
          $this->session->set_userdata(array("login" => $this->input->post("login")));
          $this->session->set_userdata(array("password" => $this->input->post("pass")));
          
          redirect(base_url());
        }
      }
    }
