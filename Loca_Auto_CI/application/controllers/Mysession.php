  

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class MySession extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
        //$this->load->library('session');
       // $this->load->library('form_validation');
        //$this->load->helper('form');
        // $this->session;
        $this->load->model('carsToRent_model');
        $this->load->model('users_model');
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
         $this->load->view('templates/header_home', $data);
         $this->load->view('pages/home', $data);
         $this->load->view('carsToRent/indexCars_md', $dataCars);
         $this->load->view('templates/footer_home', $data);
         $this->load->view('modales/connexion_modale');
         $this->load->view('modales/user_param_modale');
         
        }
        //c'estjuste l'adresse du répertoire 
        // $this->load->view('users/modale_create', $data);  
        // $this->load->view('modales/modale_view', $data);
          
      public function essaiConnexion() {
        //appel par la page d'accueil  (headerhome.php)??
          $data['title'] = ucfirst('essai d\'acces à   par methode connexion');  
          $this->load->view('templates/header', $data);
          $this->load->view('mysession/sess-form', $data);
          $this->load->view('mysession/user_gestion', $data);
          $this->load->view('templates/footer_home', $data);
          
      }

    public function verifConnexion() {    
          //appel par  sess_form.php après  remplissage des données par user
        $uname = $this->input->post('uname');
        $upwd = $this->input->post('upwd');
        $uphone  = $this->input->post('uphone');
        //requete pour infos dans table user 
        $dataConnexion['users'] = $this->users_model->get_1user($uname,$uphone, $upwd);
        if(!($dataConnexion['users'])){
          //si retour Query vide pb
          echo "il y a un pb , vous semblez n'être pas inscrit <br>  pwd oublié ??<br>";
          $dataConnexion['title'] = "verifConnexion() *** A ECHOUER  ** depuis mySession";
          $this->load->view('templates/header', $dataConnexion);
          $this->load->view('mysession/echec_verifConn', $dataConnexion); 
          $this->load->view('templates/footer', $dataConnexion);
        }
        else{
        $dataConnexion['title'] = "verifConnexion() OK depuis mySession";
        // le user existe bien dans la base 
//si la requete est OK  alors $uname, $upwd et  $uphone sont OK
        // $ufonction = $dataConnexion['users']['u_fonction'];
        $this ->setSessionUser( $dataConnexion );
        // $this->load->view('templates/header', $dataConnexion);
        // $this->load->view('mysession/verifConn', $dataConnexion); 
        // $this->load->view('templates/footer', $dataConnexion);
        }
    }


    public function setSessionUser( $dataUser ){
     
      //$ufonction = $dataUser['users']['u_fonction'];
      foreach($dataUser as $key =>$element)
        {
          $this->session->set_userdata($key, $element);
        }
        // $this->session->set_userdata('ufonction', $dataUser['users']['u_fonction']); 
        
         //   ***   initialisation var ACCES
        $this->session->ACCES = $dataUser['users']['u_fonction'];
        $dataUser['titleHome'] = "recup de _dataUser  depuis setSessionUser()   <br>";

        $this->load->view('templates/header_home', $dataUser);
        $this->load->view('pages/home', $dataUser);
        //$this->load->view('mysession/sess-view', $dataUser);
        // $this->load->view('mysession/user_gestion', $dataUser);
        $this->load->view('templates/footer_home', $dataUser);
    }
 
    public function remove() {
        // $this->session->unset_userdata('username');
       session_destroy() ;
        redirect('mysession/index');
    }

    public function test_user(){
        $data['title'] = ucfirst('entrée dans test_user() // <br> on passe au test dans la base de données');  

        $this->load->view('templates/header', $data);
        $this->load->view('pages/about', $data);
        $this->load->view('templates/footer_home', $data);

    }
    // public function destroy(){

    //     session_destroy(); 
    // }
      // method to view all CarsToRent items 
    //    
    //   
    //    
    //     $this->load->view('carsToRent/indexCars', $dataCars);  
    //     var_dump($dataCars);
    //     echo 'page des cars ' .site_url('carsToRent/index') .' <br>';
    //     $this->load->view('users/modale_create', $data);  
    //     $this->load->view('modales/modale_view', $data);
    //     $this->load->view('templates/footer_home', $data);
}


function hello(){
    echo ' hello  ceci est un test de fonction  hello() depuis Mysession.php ';
  }
//Dans le construct de ta classe controller principale, tu charges library('session') et ensuite tu  mets $this->session; pour déclarer une session, toujours dans le construct.
// Ensuite n'importe où dans ton code, tu fais $this->session->nomVar = ...; Si tu veux voir si une session existe, isset($this->session->nomVar). Pour récupérer ta variable de session, $maVar = $this->session->nomVar; Et sur ton bouton de déconnexion session_destroy(); 