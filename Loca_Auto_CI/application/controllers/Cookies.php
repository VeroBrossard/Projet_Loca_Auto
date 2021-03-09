
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

//by : https://www.cloudways.com/blog/set-cookies-in-codeigniter/
if ( ! defined('BASEPATH')) exit('Stop Its demostrate how to set cookie');

class cw_cookies extends CI_Controller {

   function __construct()

   {

       parent::__construct();

       $this->load->helper('cookie');

   }



   function set()

   {
       $cookie= array(
           'name'   => 'Cloudways Cookie',
           'value'  => 'This is Demonstration of how to set cookie in CI',
           'expire' => '3600',
       );
       $this->input->set_cookie($cookie);
       echo "Congragulatio Cookie Set";
   }



   function get()

   {
       echo $this->input->cookie('Cloudways Cookie',true);
   }

}

// voir les sessions :
//https://techbriefers.com/how-to-work-with-session-and-cookies-in-codeigniter/


//by https://www.tutorialspoint.com/codeigniter/codeigniter_cookie_management.htm
   // class Cookies extends CI_Controller { 
	
   //    function __construct() { 
   //       parent::__construct(); 
   //       $this->load->helper(array('cookie', 'url')); 
   //    } 
  
   //    public function index() { 
   //       set_cookie('cookie_nameVB','cookie_valueVB','180'); 
   //       $this->load->view('cookie_view'); 
   //    } 
  
   //    public function displaycookie() { 
   //       echo get_cookie('cookie_nameVB'); 
   //       $this->load->view('cookie_view');
   //    } 
  
   //    public function deletecookie() { 
   //       delete_cookie('cookie_nameVB'); 
   //       //redirect('cookies/display'); 
   //    } 
		
   //    public function get_cookie()

   //    {  
   //        echo $this->input->cookie('cookie_nameVB',true);
   //    }
   // } 
?>



//   function set()
//   {
//     $cookie = array(
//       'name'   => 'remember_me',
//       'value'  => 'test',
//       'expire' => '300',
//       'secure' => TRUE
//     );
// }
