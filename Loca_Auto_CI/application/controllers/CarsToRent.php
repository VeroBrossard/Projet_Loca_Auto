<?php
class CarsToRent extends CI_Controller
{
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('CarsToRent_model');
    $this->load->helper('url_helper');
  }

  // method to view all CarsToRent items 
  public function index()
  { 
      $data['carsToRent'] = $this->carsToRent_model->get_carsToRent();
  
      $data['title'] = 'SHOW ALL carsToRent';
      $data['total'] = count($data['carsToRent']);
   // echo 'var dump data de puis Patints.php <br>';
     // var_dump($data);
      $this->load->view('templates/header', $data);
      $this->load->view('carsToRent/indexCarsToRent', $data);
      $this->load->view('templates/footer');
    
  }

  // one for a specific news item
  public function view_1carToRent($id = NULL)
  {
    $data['carsToRent_item'] = $this->carsToRent_model->get_carsToRent($id);

    if (empty($data['carsToRent_item'])) {
      show_404();
    }
  //   // $data['title'] = $data['carsToRent_item']['title'] .'dans carsToRent.php by VB';
  //   //$data['title'] = $data['carsToRent_item']['phone'] .'dans carsToRent.php by VB';
    $data['title'] = ' ONE carsToRent by Id';
    $this->load->view('templates/header', $data);
    $this->load->view('carsToRent/viewOneCarToRent', $data);
    $this->load->view('templates/footer');
  }


  //vérifier si le formulaire a été soumis et si les données soumises 
  //ont passé les règles de validation.<?php
  public function create($id = NULL)
  {
    // $data['comm'] = ' <b style="color:green;" >carsToRent.php lg 48 comm : tout ok </b>';
    if ($id != NULL){
      //on recupère le carToRent by id
      $data['carsToRent_item'] = $this->carsToRent_model->get_carsToRent($id);
      $data['title'] = 'title depuis CarsToRent.php // update a  CarsToRent';
      if (empty($data['carsToRent_item'])) {
        show_404();
      }
    }
    else{
      $data['title'] = 'title depuis CarsToRent.php // Create a new carToRent';
    }

    $this->load->helper('form');
    
    $this->form_carToRent_validation();
    // $this->load->library('form_validation');

    if ($this->form_validation->run() === FALSE) {
      
      // $data['comm'] = ' <b style="color:red;" >carsToRent.php comm  lg 68 : problème de validation </b>';
      $this->load->view('templates/header', $data);
      $this->load->view('carsToRent/createCarsToRent');
      $this->load->view('templates/footer');
    } else {
      
      $data['comm'] = ' <b style="color:green;" > carsToRent.php comm  lg 74: en route...!!!  </b>';
     // $id_retour= '';
 
     if ($id != NULL){
      //on fait MAJ le carToRent by id
      $data['carsToRent_item'] = $this->carsToRent_model->update_carToRent($id);
      $this->load->view('carsToRent/templates/update_success');
      }
      else {
      //on crée l'enregistrement        
      $this->carsToRent_model->set_carToRent();
      $data['title'] = 'title depuis carsToRent.php  lg 84 // new carToRent create BRAVO ';
      $this->load->view('templates/header', $data);
      $this->load->view('carsToRent/templates/create_success');
      $this->load->view('templates/footer');
      }
    }
    }
    

    public function delete_1carToRent($id = NULL)
    {      
        if ($id == NULL){  
          show_404();
        }
        else{
        // $data['title'] = $data['carsToRent_item']['title'] .'dans carsToRent.php by VB';
        //$data['title'] = $data['carsToRent_item']['phone'] .'dans carsToRent.php by VB';
        $data['title'] = ' DELETE carsToRent by Id';
        $data['id_supp'] = $id;
        $this->carsToRent_model->delete_carToRent($id);
        $this->load->view('templates/header', $data);
        $this->load->view('carsToRent/templates/delete_success', $data);
        $this->load->view('templates/footer');
        }
      }


      public function form_carToRent_validation()
      {
        $this->load->library('form_validation');
        //$this->form_validation->set_message('required', '{field} doit etre remplis.');
        $this->form_validation->set_error_delimiters('<div class="errorFormInscription">', '</div>');
    
          // 2eme terme pour msg d erreur ???
        $this->form_validation->set_rules('lastname', 'Nom', 'required',
            array('required' => "Un nom de famille est obligatoire"));


        $this->form_validation->set_rules('firstname', 'Prénom', 'required',
            array('required' => "Un Prénom est obligatoire"));


        $this->form_validation->set_rules('mail', 'e-mail', 'required|is_unique[carsToRent.u_mail]|valid_email',
        array('required' => "L'email doit etre renseigné","is_unique" => "Cet email est deja utilisé","valid_email" => "Ceci n'est pas un email valide"));
        
        $this->form_validation->set_rules('pwd', 'Mot de passe', 'required',
            array('required' => "le mot de passe doit etre renseigné"));

        /*$this->form_validation->set_rules('pwdConfirm', 'pwdConfirm', 'required|matches[pass]',
            array('required' => "Vous n'avez pas rempli ce champ",'matches' => 'les deux mots de passe ne sont pas identiques'));*/

        $this->form_validation->set_rules('phone', 'Téléphone', 'required|is_unique[carsToRent.u_phone]',
            array('required' => "Le phone doit etre renseigné au format 0606060606 par exemple.","is_unique" => "Ce numéro de téléphone est deja utilisé"));

            $this->form_validation->set_rules('toArchive', 'A Archiver', 'required',
            array('required' => "toArchive doit etre renseigné"));
            $this->form_validation->set_rules('birthdate', 'Date de naissance', 'required',
            array('required' => "Voius ne connaissez pas votre date de naissance ?"));

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
            //   $this->load->view('carsToRent/create');
            //   $this->load->view('templates/footer');
            // } else {
            //   if ($id != NULL){
            //     //on fait MAJ le carToRent by id
            //     $data['carsToRent_item'] = $this->carsToRent_model->update_carToRent($id);
            //     $this->load->view('carsToRent/update_success');
            //     }
            //     else {
            //     //on crée l'enregistrement        
            //     $this->carsToRent_model->set_carToRent();
            //     $this->load->view('carsToRent/create_success');
            //     }
            //   }
  
        //   $carToRent = array(
        //     "lastName" => $this->input->post("lastName"),
        //     "firstName" => $this->input->post("firstName"),
        //     "login" => $this->input->post("login"),
        //     "mail" => $this->input->post("email"),
        //     "adress" => $this->input->post("adress"),
        //     "city" => $this->input->post("city"),
        //     "zipCode" => $this->input->post("zipCode"),
        //     "licenseDate" => $this->input->post("licenceDate"),
        //     "id_levelcarToRent" => "2",
        //   );

          // $this->Inscription_Model->insertClient($carToRent);
          // $carToRent = $this->Inscription_Model->getcarToRentByLogin($this->input->post("login"));
          // $carToRentMdp = array("password" => $this->input->post("pass"),"id_carToRent" => $carToRent[0]->id);
          // $this->Inscription_Model->insertMdp($carToRentMdp);
    
          // $this->session->set_carToRentdata(array("login" => $this->input->post("login")));
          // $this->session->set_carToRentdata(array("password" => $this->input->post("pass")));
          
          // redirect(base_url());
          
        }
      }
    
    