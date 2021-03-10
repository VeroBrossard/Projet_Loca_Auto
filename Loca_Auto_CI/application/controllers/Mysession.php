
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class MySession extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('form');
        // $this->session;
    }

    public function index() {
        //page d'accueil
        $data['title'] = ucfirst('bienvenue sur le site'); 
        $this->load->view('templates/header_home', $data);
        $this->load->view('pages/home', $data);
        $this->load->view('users/modale_create', $data);  
        $this->load->view('modales/modale_view', $data);
        $this->load->view('templates/footer_home', $data);
    }
 
    public function add() {
        $uname = $this->input->post('uname');
        $upwd = $this->input->post('upwd');
        $data['title'] = ucfirst('essai d\'affichage var de session');  
        $this->session->set_userdata('username', $uname);
        $this->session->set_userdata('userpwd', $upwd);
        $this->load->view('templates/header', $data);
        $this->load->view('mysession/sess-view');
        $this->load->view('mysession/user_gestion', $data);
        $this->load->view('templates/footer_home', $data);
    }
 
    public function remove() {
        // $this->session->unset_userdata('username');
        session_destroy() ;
        redirect('mysession/index');
    }

    public function test_user(){
        $data['title'] = ucfirst('entrée dans test_user() // <br> on passe au test dans la base de onnées');  

        $this->load->view('templates/header', $data);
        $this->load->view('pages/about', $data);
        $this->load->view('templates/footer_home', $data);

    }
    public function connexion() {
        $data['title'] = ucfirst('essai d\'acces à  connexion par function');  
        $this->load->view('templates/header', $data);
        $this->load->view('mysession/sess-form');
        $this->load->view('mysession/user_gestion', $data);
        $this->load->view('templates/footer_home', $data);
    }
    // public function destroy(){

    //     session_destroy(); 
    // }
 
}


function hello(){
    echo ' hello  ceci est un test de fonction  hello() depuis Mysession.php ';
  }
//Dans le construct de ta classe controller principale, tu charges library('session') et ensuite tu  mets $this->session; pour déclarer une session, toujours dans le construct.
// Ensuite n'importe où dans ton code, tu fais $this->session->nomVar = ...; Si tu veux voir si une session existe, isset($this->session->nomVar). Pour récupérer ta variable de session, $maVar = $this->session->nomVar; Et sur ton bouton de déconnexion session_destroy(); 