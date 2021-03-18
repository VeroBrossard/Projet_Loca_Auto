
<?php
class Gestion extends CI_Controller
{
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('gestion_model');
    $this->load->model('carsToRent_model');
    $this->load->helper('url_helper');
  }

  
  public function index(){
$dataLocations['title'] = "essai depuis controller Gestion.php";
$dataLocations['locations'] = $this->gestion_model->get_locations_md();
$dataLocations['carsToRent'] = $this->carsToRent_model->get_carsToRent_md();
 // echo 'var dump data de puis Patints.php <br>';
   // var_dump($data);
    $this->load->view('templates/header_gestion', $dataLocations);
    // $this->load->view('carsToRent/form_carsToRent', $data_Cars);
    $this->load->view('gestion/index', $dataLocations);
    $this->load->view('templates/footer_home');

}


  
  // method to view all Locations items 
  public function get_locations()
  { 
      $data_Locs['locations'] = $this->locati__ons_model->get_locations_md();
  // utiliser dans boutons footer et header
      $data_Locs['title'] = 'SHOW ALL locations';
      $data_Locs['total'] = count($data_Locs['locations']);
   // echo 'var dump data de puis Patints.php <br>';
     // var_dump($data);
      $this->load->view('templates/header', $data_Locs);
      $this->load->view('mysession/admin', $data_Locs);
      $this->load->view('templates/footer');
    
  }
}
?>