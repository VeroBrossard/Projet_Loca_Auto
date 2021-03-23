
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

  // LEWEL : mettre le test sur session admin
  public function index(){
$dataLocations['title'] = "essai depuis controller Gestion.php";
$dataLocations['locations'] = $this->gestion_model->get_locations_md();
$dataLocations['total_Locations'] = count($dataLocations['locations']);
$dataLocations['carsToRent'] = $this->carsToRent_model->get_carsToRent_md();
$dataLocations['total_carsToRent'] = count($dataLocations['carsToRent']);
 // echo 'var dump data de puis Patints.php <br>';
   // var_dump($data);
    $this->load->view('templates/header_gestion', $dataLocations);
    // $this->load->view('carsToRent/form_carsToRent', $data_Cars);
    $this->load->view('gestion/index', $dataLocations);
    $this->load->view('templates/footer_home');

}


  
  // pour voir détails 1 CAR appel depuis gestion/index avant modif par Admin ou employé
  public function view_1car($id = NULL) // *** LEWEL à finir !!!
  {
    if (empty($id)) {
      echo "pas de données passées 1 ";
      show_404();
      echo "pas de données passées 2";
    }
    
    $data['car_items']=  $this->carsToRent_model->get_carsToRent_md($id); //voiture à modifier
    $data['details']=  $this->carsToRent_model->researchDetails_md($id); // modéle voiture à modifier (LEWEL a supprimer plus tard , redondance )
    $data['modeles']=  $this->carsToRent_model->researchModeles_md();//tous les modéles de voiture
    $data['total_modeles'] = count($data['modeles']);
    $data['title'] = ' CAR ' .$id .' by Id';
    $data['gammes']=  $this->carsToRent_model->view_Gammes_md();
    $this->load->view('templates/header_gestion', $data);
    $this->load->view('gestion/formPrModifCar', $data);
    $this->load->view('templates/footer_home');
  }

}
  
  // method to view all Locations items 
  // public function __get_locations()
  // { 
  //     $data_Locs['locations'] = $this->locati__ons_model->get_locations_md();
  // // utiliser dans boutons footer et header
  //     $data_Locs['title'] = 'SHOW ALL locations';
  //     $data_Locs['total'] = count($data_Locs['locations']);
  //  // echo 'var dump data de puis Patints.php <br>';
  //    // var_dump($data);
  //     $this->load->view('templates/header', $data_Locs);
  //     $this->load->view('mysession/admin', $data_Locs);
  //     $this->load->view('templates/footer');
    
  // }

?>