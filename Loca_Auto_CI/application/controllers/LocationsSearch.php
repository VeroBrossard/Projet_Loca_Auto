<?php
class LocationsSearch extends CI_Controller
{
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('locationsSearch_model');
    $this->load->helper('url_helper');
  }

  // method to view gamme  locations items 
  public function index()
  { 
      $dataGammes['locations'] = $this->locationsSearch_model->get_carGammes();
  
      $dataGammes['title'] = 'SHOW gammes';
      $dataGammes['total'] = count($dataGammes['locations']);
   // echo 'var dump data de puis Patints.php <br>';
     // var_dump($data);
      $this->load->view('templates/header', $dataGammes);
      $this->load->view('locationsSearch/form_locationsSearch', $dataGammes);
      $this->load->view('templates/footer');
    
  }

  // one for a specific news item
  // public function view_1carToRent($id = NULL)
  // {
  //   $dataCars['locations_item'] = $this->locations_model->get_locations($id);

  //   if (empty($dataCars['locations_item'])) {
  //     show_404();
  //   }
  // //   // $data['title'] = $data['locations_item']['title'] .'dans locations.php by VB';
  // //   //$data['title'] = $data['locations_item']['phone'] .'dans locations.php by VB';
  //   $dataCars['title'] = ' ONE locations by Id';
  //   $this->load->view('templates/header', $dataCars);
  //   $this->load->view('locations/viewOneCarToRent', $dataCars);
  //   $this->load->view('templates/footer');
  // }


  //vérifier si le formulaire a été soumis et si les données soumises 
  //ont passé les règles de validation.<?php
  public function create($id = NULL)
  {
    // $data['comm'] = ' <b style="color:green;" >locations.php lg 48 comm : tout ok </b>';
    if ($id != NULL){
      //on recupère le carToRent by id
      $dataCars['locations_item'] = $this->locations_model->get_locations($id);
      $dataCars['title'] = 'title depuis locations.php // update a  locations';
      if (empty($dataCars['locations_item'])) {
        show_404();
      }
    }
    else{
      $dataCars['title'] = 'title depuis locations.php // Create a new carToRent';
    }

    $this->load->helper('form');
    
    $this->form_carToRent_validation();
    // $this->load->library('form_validation');

    if ($this->form_validation->run() === FALSE) {
      
      // $data['comm'] = ' <b style="color:red;" >locations.php comm  lg 68 : problème de validation </b>';
      $this->load->view('templates/header', $dataCars);
      $this->load->view('locations/createlocations');
      $this->load->view('templates/footer');
    } else {
      
      $dataCars['comm'] = ' <b style="color:green;" > locations.php comm  lg 74: en route...!!!  </b>';
     // $id_retour= '';
 
     if ($id != NULL){
      //on fait MAJ le carToRent by id
      $dataCars['locations_item'] = $this->locations_model->update_carToRent($id);
      $this->load->view('locations/templates/update_success');
      }
      else {
      //on crée l'enregistrement        
      $this->locations_model->set_carToRent();
      $dataCars['title'] = 'title depuis locations.php  lg 84 // new carToRent create BRAVO ';
      $this->load->view('templates/header', $dataCars);
      $this->load->view('locations/templates/create_success');
      $this->load->view('templates/footer');
      }
    }
    }
    

    // public function delete_1carToRent($id = NULL)
    // {      
    //     if ($id == NULL){  
    //       show_404();
    //     }
    //     else{
    //     // $data['title'] = $data['locations_item']['title'] .'dans locations.php by VB';
    //     //$data['title'] = $data['locations_item']['phone'] .'dans locations.php by VB';
    //     $dataCars['title'] = ' DELETE locations by Id';
    //     $dataCars['id_supp'] = $id;
    //     $this->locations_model->delete_carToRent($id);
    //     $this->load->view('templates/header', $dataCars);
    //     $this->load->view('locations/templates/delete_success', $dataCars);
    //     $this->load->view('templates/footer');
    //     }
    //   }


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


        $this->form_validation->set_rules('mail', 'e-mail', 'required|is_unique[locations.u_mail]|valid_email',
        array('required' => "L'email doit etre renseigné","is_unique" => "Cet email est deja utilisé","valid_email" => "Ceci n'est pas un email valide"));
        
        $this->form_validation->set_rules('pwd', 'Mot de passe', 'required',
            array('required' => "le mot de passe doit etre renseigné"));

        /*$this->form_validation->set_rules('pwdConfirm', 'pwdConfirm', 'required|matches[pass]',
            array('required' => "Vous n'avez pas rempli ce champ",'matches' => 'les deux mots de passe ne sont pas identiques'));*/

        $this->form_validation->set_rules('phone', 'Téléphone', 'required|is_unique[locations.u_phone]',
            array('required' => "Le phone doit etre renseigné au format 0606060606 par exemple.","is_unique" => "Ce numéro de téléphone est deja utilisé"));

            $this->form_validation->set_rules('toArchive', 'A Archiver', 'required',
            array('required' => "toArchive doit etre renseigné"));
            $this->form_validation->set_rules('birthdate', 'Date de naissance', 'required',
            array('required' => "Voius ne connaissez pas votre date de naissance ?"));


          
        }
      }
    
    
    