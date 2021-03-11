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
    $data['title'] = ' ONE users by Id';
    $this->load->view('templates/header', $data);
    $this->load->view('users/view', $data);
    $this->load->view('templates/footer');
  }


  
  // // one for a specific user by uname, 
  // public function view_1user_byPhone($id = NULL)
  // {
  //    $dataConnexion['users_item'] = $this->users_model->get_users($id);

  //   if (empty($dataConnexion['users_item'])) {
  //     show_404();
  //   }
  // //   // $data['title'] = $data['users_item']['title'] .'dans users.php by VB';
  // //   //$data['title'] = $data['users_item']['phone'] .'dans users.php by VB';
  //   $dataConnexion['title'] = ' ONE users by Id';
   
  // }

  //vérifier si le formulaire a été soumis et si les données soumises 
  //ont passé les règles de validation.<?php
  public function create($id = NULL)
  {
    // $data['comm'] = ' <b style="color:green;" >Users.php lg 48 comm : tout ok </b>';
    if ($id != NULL){
      //on recupère le user by id
      $data['users_item'] = $this->users_model->get_users($id);
      $data['title'] = 'title depuis Users.php // update a  user';
      if (empty($data['users_item'])) {
        show_404();
      }
    }
    else{
      $data['title'] = 'title depuis Users.php // Create a new user';
    }

    $this->load->helper('form');
    
    $this->form_user_validation();
    // $this->load->library('form_validation');

    if ($this->form_validation->run() === FALSE) {
      
      // $data['comm'] = ' <b style="color:red;" >Users.php comm  lg 68 : problème de validation </b>';
      $this->load->view('templates/header', $data);
      $this->load->view('users/create');
      $this->load->view('templates/footer');
    } else {
      
      $data['comm'] = ' <b style="color:green;" > Users.php comm  lg 74: en route...!!!  </b>';
     // $id_retour= '';
 
     if ($id != NULL){
      //on fait MAJ le user by id
      $data['users_item'] = $this->users_model->update_user($id);
      $this->load->view('templates/update_success');
      }
      else {
      //on crée l'enregistrement        
      $this->users_model->set_user();
      $data['title'] = 'title depuis Users.php  lg 84 // new user create BRAVO ';
      $this->load->view('templates/header', $data);
      $this->load->view('templates/create_success');
      $this->load->view('templates/footer');
      }
    }
    }
    

    public function delete_1user($id = NULL)
    {      
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
        $this->load->view('templates/delete_success', $data);
        $this->load->view('templates/footer');
        }
      }


      public function form_user_validation()
      {
        $this->load->library('form_validation');
        //$this->form_validation->set_message('required', '{field} doit etre remplis.');
        $this->form_validation->set_error_delimiters('<div class="errorFormInscription">', '</div>');
    
          // 2eme terme pour msg d erreur ???
        $this->form_validation->set_rules('lastname', 'Nom', 'required',
            array('required' => "Un nom de famille est obligatoire"));


        $this->form_validation->set_rules('firstname', 'Prénom', 'required',
            array('required' => "Un Prénom est obligatoire"));


        $this->form_validation->set_rules('mail', 'e-mail', 'required|is_unique[users.u_mail]|valid_email',
        array('required' => "L'email doit etre renseigné","is_unique" => "Cet email est deja utilisé, vous êtes déjà inscrit. Connectez vous.. ","valid_email" => "Ce n'est pas un email valide"));
        
        $this->form_validation->set_rules('pwd', 'Mot de passe', 'required',
            array('required' => "le mot de passe doit etre renseigné"));

        /*$this->form_validation->set_rules('pwdConfirm', 'pwdConfirm', 'required|matches[pass]',
            array('required' => "Vous n'avez pas rempli ce champ",'matches' => 'les deux mots de passe ne sont pas identiques'));*/

        $this->form_validation->set_rules('phone', 'Téléphone', 'required|is_unique[users.u_phone]',
            array('required' => "Le phone doit etre renseigné au format 0606060606.","is_unique" => "Ce numéro de téléphone est deja utilisé, vous êtes déjà inscrit. Connectez vous.. "));

            $this->form_validation->set_rules('toArchive', 'A Archiver', 'required',
            array('required' => "toArchive doit etre renseigné"));
            $this->form_validation->set_rules('birthdate', 'Date de naissance', 'required',
            array('required' => "Vous ne connaissez pas votre date de naissance ?"));

        /*$this->form_validation->set_rules('adress', 'Adresse', 'required',
            array('required' => "L'adresse doit etre renseignée"));
        $this->form_validation->set_rules('city', 'city', 'required',
            array('required' => "La ville doit etre renseignée"));
        $this->form_validation->set_rules('zipCode', 'zipCode', 'required',
            array('required' => "Le code postal doit etre renseigné"));
        $this->form_validation->set_rules('licenceDate', 'Date permis de conduire', 'required',
            array('required' => "Vous n'avez pas de permis de conduire ?"));*/
    
            // if ($this->form_validation->run() === FALSE) {
            //   $data['title'] = ' <b style="color:red;" >problème de validation </b>';
            //   $data['comm'] = ' <b style="color:red;" >problème de validation </b>';
            //   $this->load->view('templates/header', $data);
            //   $this->load->view('users/create');
            //   $this->load->view('templates/footer');
            // } else {
            //   if ($id != NULL){
            //     //on fait MAJ le user by id
            //     $data['users_item'] = $this->users_model->update_user($id);
            //     $this->load->view('users/update_success');
            //     }
            //     else {
            //     //on crée l'enregistrement        
            //     $this->users_model->set_user();
            //     $this->load->view('users/create_success');
            //     }
            //   }
  
        //   $user = array(
        //     "lastName" => $this->input->post("lastName"),
        //     "firstName" => $this->input->post("firstName"),
        //     "login" => $this->input->post("login"),
        //     "mail" => $this->input->post("email"),
        //     "adress" => $this->input->post("adress"),
        //     "city" => $this->input->post("city"),
        //     "zipCode" => $this->input->post("zipCode"),
        //     "licenseDate" => $this->input->post("licenceDate"),
        //     "id_levelUser" => "2",
        //   );

          // $this->Inscription_Model->insertClient($user);
          // $user = $this->Inscription_Model->getUserByLogin($this->input->post("login"));
          // $userMdp = array("password" => $this->input->post("pass"),"id_user" => $user[0]->id);
          // $this->Inscription_Model->insertMdp($userMdp);
    
          // $this->session->set_userdata(array("login" => $this->input->post("login")));
          // $this->session->set_userdata(array("password" => $this->input->post("pass")));
          
          // redirect(base_url());
          
        }
      }
    
    