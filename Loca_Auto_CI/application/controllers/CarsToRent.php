<?php
class CarsToRent extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('carsToRent_model');
    $this->load->helper('url_helper');
    $this->load->helper('url');  //utile  LEWEL ???
  }


  // method to view all CarsToRent items 
  public function index()
  {
    $data_Gammes['gammes'] = $this->carsToRent_model->get_gammes_md(); //pour liste de choix form
    $data_Cars['carsToRent'] = $this->carsToRent_model->get_carsToRent_md(); //view all carsToRent items 
    $data_Cars['title'] = 'SHOW ALL carsToRent <br> de data_Cars';
    $data_Cars['total'] = count($data_Cars['carsToRent']);

    // echo 'var dump data de puis Patints.php <br>';
    // var_dump($data);
    $this->load->view('templates/header_home', $data_Cars);
    // $this->load->view('carsToRent/form_carsToRent', $data_Cars);
    $this->load->view('carsToRent/indexCars', $data_Gammes);
    $this->load->view('templates/footer_home');
  }

  public function researchCars()
  {
    //LEWEL faire vérifications  données transmises

    $ugamme = $this->input->post('ugamme');
    $this->session->set_userdata('ugamme', $ugamme); //pour ecriture dans form si retour
    $dataSearch['essai'] = "depuis researchCars() de CTR et ugamme =" . $ugamme;
    $dataSearch['ugamme'] = $ugamme;
    echo "essai depuis researchCars";
    $dataSearch['carsToRent'] = $this->carsToRent_model->researchCars_md($ugamme);
    $this->load->view('templates/header_home', $dataSearch);
    // $this->load->view('carsToRent/form_carsToRent', $data_Cars);
    $this->load->view('carsToRent/form_carsToRent', $dataSearch);
    $this->load->view('templates/footer_home');
    $this->session->unset_userdata('session_name');
  }

  public function form_research_validation()
  {
    $this->load->library('form_validation');
    //$this->form_validation->set_message('required', '{field} doit etre remplis.');
    $this->form_validation->set_error_delimiters('<div class="errorFormInscription">', '</div>');

    // 2eme terme pour msg d erreur ???
    $this->form_validation->set_rules('gamme', 'gamme');

    // $this->form_validation->set_rules('firstname', 'Prénom', 'required',
    //     array('required' => "Un Prénom est obligatoire"));

    //depuis formulaire form_carsToRent.php (recherche d'une location )

  }




  //vérifier si le formulaire a été soumis et si les données soumises 
  //ont passé les règles de validation.<?php
  public function modifyORcreate($id = NULL)
  {
    echo $id;
    if ($id === NULL) {
          //si query vide 
          show_404();
          echo "show_404 // pb avec id transmis (id NULL)";
    }
   else {   //($id != NULL) 
      //on recupère le cars by id et les infos du formulaire
      // 2eme terme pour msg d erreur 
      //appel  depuis formPrModifCars

      //on teste les infos formulaires
      $this->form_validation->set_rules('gamme', 'Gamme', 'required');
      $this->form_validation->set_rules('immatriculation', 'Immatriculation', 'required');
      $this->form_validation->set_rules('pricePerDay', 'PricePerDay', 'required');
      $this->form_validation->set_rules('km', 'Km', 'required');
      $this->form_validation->set_rules('year', 'Year', 'required');
      $this->form_validation->set_rules('img', 'Img', 'required');
      $this->form_validation->set_rules('toArchive', 'ToArchive', 'required');
      $this->form_validation->set_rules('cd_id', 'Cd_id', 'required'); //voir carDetails pour gammeà choisir.
        //on recupe les données du POST pour renvoi au form si erreur et traitement si ok
        $data['car_post'] = array(
          'ctr_id' => $id,
          'ctr_gamme' => $this->input->post('gamme'),
          'ctr_immatriculation' => $this->input->post('immatriculation'),
          'ctr_pricePerDay' => $this->input->post('pricePerDay'),
          'ctr_km' => $this->input->post('km'),
          'ctr_year' => $this->input->post('year'),
          'ctr_img' => $this->input->post('img'),
          'ctr_toArchive' => $this->input->post('toArchive'),
          'cd_id' => $this->input->post('cd_id')
          );
      if ($this->form_validation->run() === FALSE) {
        // si infos form pas ok retour au formulaire (listeCarsPourGestion) 
        $data['title'] = '<h2>infos du form  érronées ou incomplètes </h2>';
        $data['ctr_id']= $id; //renvoi id du véhicule à modifier  (LEWEL à tester)
        $this->load->view('templates/header_gestion', $data);
        $this->load->view('templates/echec', $data); //????? LEWEL
        $this->load->view('templates/footer_home');
      } else {
  //données du form OK
       // $data['title'] = 'update a  car 1';
        //on fait MAJ la voiture  by id
        $data['carsUpdate'] = $this->carsToRent_model->update_carToRent_md($id,$data['car_post']);

        $test =  $data['car_post']['ctr_gamme'];
        $data['title'] ="<h2>UPDATE OK</h2> de CAR " .$id ." by Id et gamme modifiée= ". $test ."";
//voiture à modifier
        $data['details']=  $this->carsToRent_model->researchDetails_md($id);
  
        $data['gammes']=  $this->carsToRent_model->view_Gammes_md();
        $data['modeles']=  $this->carsToRent_model->researchModeles_md();//tous les modéles de voiture
        $data['total_modeles'] = count($data['modeles']);


              $data['car_items']=  $this->carsToRent_model->get_carsToRent_md($id); 
          $this->load->view('templates/header_gestion', $data);
          $this->load->view('templates/update_success');
          $this->load->view('gestion/formPrModifCar'); //  ***LEWEL à modifier après les verif
          $this->load->view('templates/footer_home');
        }
      }
   
  }


  public function delete_1carToRent($id = NULL)
  {
    if ($id == NULL) {
      show_404();
    } else {
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
    $this->load->view('carsToRent/viewOneCarToRent', $data);
    // $this->load->view('templates/footer', $data);
  }
}

function hello()
{
  echo "<br><br><br> hello  ceci est un test de fonction  hello() depuis CarsToRent.php <br>";
  echo '<a class="bouton" href="' . site_url('carsToRent/index') . '"> retour ACCUEIL carsToRent</a>';
}
