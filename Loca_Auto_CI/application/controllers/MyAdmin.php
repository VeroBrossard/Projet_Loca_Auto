
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MySession extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //$this->load->library('session');
    // $this->load->library('form_validation');
    //$this->load->helper('form');
    // $this->session;
    $this->load->model('carsToRent_model');
    $this->load->helper('url_helper');
    //$this->session; 
  }
  
  public function index()
  {
    $data['title'] = ucfirst('bienvenue sur le site');
    $dataCars['carsToRent'] = $this->carsToRent_model->get_carsToRent_md();
    //directement epuis carsToRent_model.php
    $dataCars['title'] = 'SHOW ALL carsToRent';
    $dataCars['total'] = count($dataCars['carsToRent']);
    // echo 'var dump data de puis Patints.php <br>';
    // var_dump($data);
    $this->load->view('templates/header_admin', $data);
    $this->load->view('mysession/admin', $dataCars);
    $this->load->view('templates/footer', $data);
  }

}

?>