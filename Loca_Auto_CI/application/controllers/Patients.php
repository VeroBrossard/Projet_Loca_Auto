<?php
class Patients extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('patients_model');
    $this->load->helper('url_helper');
  }

  // method to view all news items 
  public function index()
  { {
      $data['patients'] = $this->patients_model->get_patients();
  
      $data['title'] = 'SHOW ALL PATIENTS';
      $data['total'] = count($data['patients']);
   // echo 'var dump data de puis Patints.php <br>';
     // var_dump($data);
      $this->load->view('templates/headerHosp', $data);
      $this->load->view('patients/index', $data);
      $this->load->view('templates/patients_footer');
    }
  }

  // one for a specific news item
  public function view_1Patient($id = NULL)
  {
    $data['patients_item'] = $this->patients_model->get_patients($id);

    if (empty($data['patients_item'])) {
      show_404();
    }

    // $data['title'] = $data['patients_item']['title'] .'dans Patients.php by VB';
    //$data['title'] = $data['patients_item']['phone'] .'dans Patients.php by VB';
    $data['title'] = ' Patients by Id';
    $this->load->view('templates/headerHosp', $data);
    $this->load->view('patients/view', $data);
    $this->load->view('templates/patients_footer');
  }

public function hello(){
  echo ' hello  ceci est un test de fonction ';
}

  //vérifier si le formulaire a été soumis et si les données soumises ont passé les règles de validation.<?php
  public function create($id = NULL)
  {
    if ($id != NULL){
      //on recupère le patient by id
      $data['patients_item'] = $this->patients_model->get_patients($id);
      $data['title'] = 'update a  patient';
      if (empty($data['patients_item'])) {
        show_404();
      }
    }
    else{
      $data['title'] = 'Create a new patient';
    }

    $this->load->helper('form');
    $this->load->library('form_validation');

    // 2eme terme pour msg d erreur 
    $this->form_validation->set_rules('firstname', 'Prénom', 'required');
    $this->form_validation->set_rules('lastname', 'Nom', 'required');
    $this->form_validation->set_rules('phone', 'Tel', 'required');
    $this->form_validation->set_rules('mail', 'eMail', 'required');
    $this->form_validation->set_rules('birthdate', 'Date naissance', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/headerHosp', $data);
      $this->load->view('patients/create');
      $this->load->view('templates/patients_footer');
    } else {
      // $id_retour= '';

      if ($id != NULL){
        //on fait MAJ le patient by id
        $data['patients_item'] = $this->patients_model->update_patient($id);
        $this->load->view('patients/update_success');
        }
        else {
        //on crée l'enregistrement        
        $this->patients_model->set_patient();
        $this->load->view('patients/create_success');
        }
      }
    }
    public function delete_1patient($id = NULL){
      
        if ($id == NULL){
  
          show_404();
        }
        else{
        // $data['title'] = $data['patients_item']['title'] .'dans Patients.php by VB';
        //$data['title'] = $data['patients_item']['phone'] .'dans Patients.php by VB';
        $data['title'] = ' DELETE Patients by Id';
        $data['id_supp'] = $id;
        $this->patients_model->delete_patient($id);
        $this->load->view('templates/headerHosp', $data);
        $this->load->view('patients/delete_success', $data);
        $this->load->view('templates/patients_footer');
        }
      }

    }

