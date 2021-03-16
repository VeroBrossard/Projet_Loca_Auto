<?php
class CarsToRent extends CI_Controller
{
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('carsToRent_model');
    $this->load->helper('url_helper');
  }

  
  // method to view all CarsToRent items 
  public function index()
  { 
      $data_Cars['carsToRent'] = $this->carsToRent_model->get_carsToRent_md();
  // utiliser dans boutons footer et header
      $data_Cars['title'] = 'SHOW ALL carsToRent';
      $data_Cars['total'] = count($data_Cars['carsToRent']);
   // echo 'var dump data de puis Patints.php <br>';
     // var_dump($data);
      $this->load->view('templates/header', $data_Cars);
      $this->load->view('carsToRent/indexCars_md', $data_Cars);
      $this->load->view('templates/footer');
    
  }

  // one for a specific news item
  // public function view_1carToRent($id = NULL)
  // {
  //   $dataCars['carsToRent_item'] = $this->carsToRent_model->get_carsToRent($id);

  //   if (empty($dataCars['carsToRent_item'])) {
  //     show_404();
  //   }
  // //   // $data['title'] = $data['carsToRent_item']['title'] .'dans carsToRent.php by VB';
  // //   //$data['title'] = $data['carsToRent_item']['phone'] .'dans carsToRent.php by VB';
  //   $dataCars['title'] = ' ONE carsToRent by Id';
  //   $this->load->view('templates/header', $dataCars);
  //   $this->load->view('carsToRent/viewOneCarToRent', $dataCars);
  //   $this->load->view('templates/footer');
  // }


  //vérifier si le formulaire a été soumis et si les données soumises 
  //ont passé les règles de validation.<?php
  public function create($id = NULL)
  {
    // $data['comm'] = ' <b style="color:green;" >carsToRent.php lg 48 comm : tout ok </b>';
    if ($id != NULL){
      //on recupère le carToRent by id
      $dataCars['carsToRent_item'] = $this->carsToRent_model->get_carsToRent($id);
      $dataCars['title'] = 'title depuis CarsToRent.php // update a  CarsToRent';
      if (empty($dataCars['carsToRent_item'])) {
        show_404();
      }
    }
    else{
      $dataCars['title'] = 'title depuis CarsToRent.php // Create a new carToRent';
    }

    $this->load->helper('form');
    
    $this->form_carToRent_validation();
    // $this->load->library('form_validation');

    if ($this->form_validation->run() === FALSE) {
      
      // $data['comm'] = ' <b style="color:red;" >carsToRent.php comm  lg 68 : problème de validation </b>';
      $this->load->view('templates/header', $dataCars);
      $this->load->view('carsToRent/createCarsToRent');
      $this->load->view('templates/footer');
    } else {
      
      $dataCars['comm'] = ' <b style="color:green;" > carsToRent.php comm  lg 74: en route...!!!  </b>';
     // $id_retour= '';
 
     if ($id != NULL){
      //on fait MAJ le carToRent by id
      $dataCars['carsToRent_item'] = $this->carsToRent_model->update_carToRent($id);
      $this->load->view('carsToRent/templates/update_success');
      }
      else {
      //on crée l'enregistrement        
      $this->carsToRent_model->set_carToRent();
      $dataCars['title'] = 'title depuis carsToRent.php  lg 84 // new carToRent create BRAVO ';
      $this->load->view('templates/header', $dataCars);
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
        $dataCars['title'] = ' DELETE carsToRent by Id';
        $dataCars['id_supp'] = $id;
        $this->carsToRent_model->delete_1car($id);
        $this->load->view('templates/header', $dataCars);
        $this->load->view('carsToRent/templates/delete_success', $dataCars);
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


          
        }

           //  one for a specific car item
    public function view_1Car($id = NULL)
    {
      var_dump($id);
      $data['cars_item'] = $this->carsToRent_model->get_carsToRent_md($id);
  
      if (empty($data['cars_item'])) {
        show_404();
        echo 'show_404()';
      }
  
      // $data['title'] = $data['patients_item']['title'] .'dans Patients.php by VB';
      //$data['title'] = $data['patients_item']['phone'] .'dans Patients.php by VB';
      $data['title'] = ' Car unique by Id';
      // $this->load->view('templates/header_admin', $data);
      $this->load->view('admin/viewOneCarToRent', $data);
      // $this->load->view('templates/footer', $data);
    }
    // public function delete_1patient($id = NULL){      
    //   if ($id == NULL){  
    //     show_404();
    //   }
    //   else{
    //   // $data['title'] = $data['patients_item']['title'] .'dans Patients.php by VB';
    //   //$data['title'] = $data['patients_item']['phone'] .'dans Patients.php by VB';
    //   $data['title'] = ' DELETE Patients by Id';
    //   $data['id_supp'] = $id;
    //   $this->patients_model->delete_patient($id);
    //   $this->load->view('templates/headerHosp', $data);
    //   $this->load->view('patients/delete_success', $data);
    //   $this->load->view('templates/patients_footer');
    //   }
    // }

      }
    
    