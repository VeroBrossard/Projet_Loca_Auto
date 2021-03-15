
<?php
class Locations extends CI_Controller
{
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('locations_model');
    $this->load->helper('url_helper');
  }

  
  // method to view all Locations items 
  public function get_locations()
  { 
      $data_Locs['locations'] = $this->locations_model->get_locations_md();
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